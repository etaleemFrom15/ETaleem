<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoadViewTeacher{

   function __construct(){
    $this->CI =& get_instance();
	$this->CI->load->model("Notification_Model");
	$this->CI->load->model("User_model");

   }


   function load_view($page,$data=NULL){

	   $data_h['notifications']=$this->CI->Notification_Model->get_notify($_SESSION['user_email']);
	   $data_h['profilepic']=$this->CI->User_model->show_profilepic();

	   $this->CI->load->view('TeacherPanel/views/header',$data_h);
	   

	   if($data==NULL){
	   	$this->CI->load->view($page);
	   }else{
	   	$this->CI->load->view($page,$data);
	   }
	   
	   $this->CI->load->view('TeacherPanel/views/footer');
   }   
}