<?php

class Subjects extends CI_Controller{

public function __construct(){
 
        parent::__construct();
    $this->load->helper('url');
   $this->load->model("Subject_model");
        $this->load->library('session');

 
}

        public function index()
        {
        	 $progSubject=$this->Subject_model->getProgrammingSubjects();
         $data['progSub']=$progSubject;
         
                $this->load->view('subjects.php',$data);
        }

        public function subjects(){

        }
}
?>