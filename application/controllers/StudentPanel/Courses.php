<?php
 class Courses extends CI_Controller{
 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                  $this->load->model('course_model');
                    $this->load->model('rating_model');
                    $this->load->database();
        }

        public function index()
        {
                $this->load->view('view_courses', array('error' => ' ' ));
        }


  
//Show id wise content on View Link click
public function show($id) {
  
    $content = $this->course_model->getcourse($id);
    $data['contents'] = $content;
    $this->load->view('StudentPanel/views/course-view.php', $data);
}
}
?>