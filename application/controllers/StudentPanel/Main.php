<?php
class Main extends CI_Controller{

public function __construct(){
 
        parent::__construct();
    $this->load->helper('url');
    
        $this->load->library('session');

        $this->load->Model('Request_Model');

        //Library to Load Header+Content+Footer Dynamically, So Use this
        $this->load->library('loadviewstudent');  
 
}

        public function index()
        {
                $this->loadviewstudent->load_view('StudentPanel/views/index.php');

        }


        public function courses(){
         $this->loadviewstudent->load_view('StudentPanel/views/courses.php');
        }
        public function bidview($req_id){
                $data['bids']=$this->Request_Model->getBids($req_id);
                $this->loadviewstudent->load_view('StudentPanel/views/bidview.php',$data);
               }
        public function scheduledclasses(){
                $this->loadviewstudent->load_view('StudentPanel/views/scheduled-classes.php');
               }       
        public function tutorRequest(){
                $data['requests']=$this->Request_Model->showRequest();
                $this->loadviewstudent->load_view('StudentPanel/views/tutor-request.php',$data);
               }
        public function teachers(){
            $this->loadviewstudent->load_view('StudentPanel/views/teachers.php');
         }       
    
        }
        ?>