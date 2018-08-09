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

     public function show_dirmaker(){
        $this->load->view('coursedir_maker');
     }

  
//Show id wise content on View Link click
public function show($id) {
  
    $content = $this->course_model->getcourse($id);
    $data['contents'] = $content;
    $this->load->view('TeacherPanel/views/course-view.php', $data);
}

//loading content to Manipulate_Course View
public function coursecontent($id){

    $this->db->where('cdir_id', $id);
          $query = $this->db->get('course_content');
 $content['contents'] = $query->result();
    $this->load->view('TeacherPanel/views/course-content.php', $content);
}

public function delete_content($id){

    $sql="DELETE FROM course_content WHERE id='$id'";
    $query=$this->db->query($sql);

   
}
}

?>