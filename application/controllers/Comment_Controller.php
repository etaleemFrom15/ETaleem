<?php

	class Comment_Controller extends CI_Controller{
		
		public function __construct(){

			parent::__construct();
			$this->load->model("Comment_Model");

		}

		public function insertComment(){

			$des=$_GET['des'];
			$u_id=$_GET['u_id'];
			$course_id=$_GET['course_id'];
			$date=$_GET['date'];
			$type=$_GET['type'];
			$check=$this->Comment_Model->insertComment($des,$u_id,$course_id,$date,$type);
			echo $check;
		} 		
	}

?>