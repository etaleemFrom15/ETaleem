<?php
class Main extends CI_Controller{

public function __construct(){
 
        parent::__construct();
    $this->load->helper('url');
    
        $this->load->library('session');

     
 
}

        public function index()
        {
                $this->load->view('StudentPanel/views/index.php');
        }

        public function courses(){
         $this->load->view('StudentPanel/views/courses.php');
        }
        public function bidview(){
                $this->load->view('StudentPanel/views/bid-view.php');
               }
        public function scheduledclasses(){
                $this->load->view('StudentPanel/views/scheduled-classes.php');
               }       
        public function tutorRequest(){
                $this->load->view('StudentPanel/views/tutor-request.php');
               }
        public function teachers(){
        $this->load->view('StudentPanel/views/teachers.php');
         }       
    
        }
        ?>