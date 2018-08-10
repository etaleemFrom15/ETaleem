<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoadViewStudent{

   function __construct(){
    $this->CI =& get_instance();
    $this->CI->load->model("Notification_Model");
   }


   function load_view($page,$data=NULL){

	   $data_h['notifications']=$this->CI->Notification_Model->get_notify($_SESSION['user_email']);
	   $this->CI->load->view('StudentPanel/views/header',$data_h);
	   

	   if($data==NULL){
	   	$this->CI->load->view($page);
	   }else{
	   	$this->CI->load->view($page,$data);
	   }
	   
	   $this->CI->load->view('StudentPanel/views/footer');
   }   
}