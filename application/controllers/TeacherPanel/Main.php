<?php
class Main extends CI_Controller{

public function __construct(){
 
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model("User_model");
        $this->load->model("Request_Model");
        $this->load->model("Payment_Model");
        $this->load->model("Live_Class_Model");



        //Library to Load Header+Content+Footer Dynamically, So Use this
        $this->load->library('loadviewteacher');
}

        public function index()
        {
                $this->loadviewteacher->load_view('TeacherPanel/views/index.php');
        }
        
        
        public function editprofile()
        {
             $data['profilepic']=$this->User_model->show_profilepic();
            
              
             
            
                $this->loadviewteacher->load_view('TeacherPanel/views/edit-profile.php',$data);
        }
        public function courses(){
            $this->loadviewteacher->load_view("TeacherPanel/views/courses");
        }

          public function addcourse(){
         $this->loadviewteacher->load_view('TeacherPanel/views/add-course.php');
        }
         public function courseview(){
            $this->loadviewteacher->load_view('TeacherPanel/views/course-view.php');
        } 
       
        public function addcontent($id){
         $this->loadviewteacher->load_view('TeacherPanel/views/add-content.php');
        }   

        public function requestview(){
            $data['requests']=$this->Request_Model->showRequests($_SESSION['user_email']);
            $data['bids']=$this->Request_Model->getBids();
            $this->loadviewteacher->load_view('TeacherPanel/views/request-view.php',$data);
        }

        public function submitBid($req_id){
            $data['req_id']=$req_id;
            $data['checkBid']=$this->Request_Model->checkBid($req_id);
            $this->loadviewteacher->load_view('TeacherPanel/views/submitrequest.php',$data);
        }
          
        public function schedule_new_class(){

            $data['paid_invoices']=$this->Payment_Model->showPaid();
            $this->loadviewteacher->load_view('TeacherPanel/views/schedule-new-class.php',$data);

        }           
         public function students(){
                $this->loadviewteacher->load_view('TeacherPanel/views/students.php');
         } 

         //Insert Data into Live Class Table
         public function schedule_class(){
            $check=$this->Live_Class_Model->schedule_class();
            echo $check;
         }    

         //Check if class is scheduled or not
         public function check_schedule_class(){
          $check=$this->Live_Class_Model->check_class();
            echo $check;
         } 

         //List of schedule classes by teacher
         public function scheduled_classes(){

              $data['scheduled_classes']=$this->Live_Class_Model->scheduled_class();
              $this->loadviewteacher->load_view('TeacherPanel/views/scheduled-classes.php',$data);
        } 
 
        
}

?>