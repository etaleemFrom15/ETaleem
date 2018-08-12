<?php
class Main extends CI_Controller{

public function __construct(){
 
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model("Request_Model");

        //Library to Load Header+Content+Footer Dynamically, So Use this
        $this->load->library('loadviewteacher');
}

        public function index()
        {
                $this->loadviewteacher->load_view('TeacherPanel/views/index.php');
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
        public function classes(){
            $this->loadviewteacher->load_view('TeacherPanel/views/classes.php');
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
          
       public function scheduleclasses(){
                $this->loadviewteacher->load_view('TeacherPanel/views/scheduled-classes.php');
         }            
         public function students(){
                $this->loadviewteacher->load_view('TeacherPanel/views/students.php');
         }       
        
}

?>