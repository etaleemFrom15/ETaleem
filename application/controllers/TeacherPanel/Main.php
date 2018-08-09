<?php
class Main extends CI_Controller{

public function __construct(){
 
        parent::__construct();
    $this->load->helper('url');
    
        $this->load->library('session');

     
 
}

        public function index()
        {
                $this->load->view('TeacherPanel/views/index.php');
        }

        public function courses(){
         $this->load->view('TeacherPanel/views/courses.php');
        }

          public function addcourse(){
         $this->load->view('TeacherPanel/views/add-course.php');
        }
         public function courseview(){
         $this->load->view('TeacherPanel/views/course-view.php');
        } 
       
        public function addcontent($id){
         $this->load->view('TeacherPanel/views/add-content.php');
        } 
        public function classes(){
                $this->load->view('TeacherPanel/views/classes.php');
               } 
        public function requestview(){
         $this->load->view('TeacherPanel/views/request-view.php');
               }   
       public function scheduleclasses(){
                $this->load->view('TeacherPanel/views/scheduled-classes.php');
         }            
         public function students(){
                $this->load->view('TeacherPanel/views/students.php');
         }       
        
}

?>