<?php

 	class Live_Class_Model extends CI_Model{

 		public function __construct(){
 			parent::__construct();
 			$this->load->database();
 		}

 		//Insert Schdule Class Data into Online Class Table
 		public function schedule_class(){


 			$data=array("cid"=>$_GET['cid'],"start_time"=>$_GET['start_time'],"end_time"=>$_GET['end_time'],"date"=>$_GET['date'],"course_id"=>$_GET['course_id']);

 			$res=$this->db->insert("online_class",$data);
 			if($this->db->affected_rows()>0){
 				return true;
 			}
 			else{
 				return false;
 			}
 		}

 		//Check if class is scheduled or not
 		public function check_class(){

 			$u_email=$_SESSION['user_email'];
 			$course_id=$_GET['course_id'];
 			$q="select * from online_class o JOIN online_course c on o.course_id=c.id having o.course_id='$course_id' AND c.t_email='$u_email'";
 			$res=$this->db->query($q);
 			if($res->num_rows()>0){
 				return true;
 			}else{
 				return false;
 			}
 		}

 		//Get List of Schduled Classes By Teacher
 		public function scheduled_class(){

 			$u_email=$_SESSION['user_email'];
 			$q="select * from online_class o JOIN online_course c on o.course_id=c.id having c.t_email='$u_email'";
 			$res=$this->db->query($q);
 			if($res->num_rows()>0){
 				return $res->result_array();
 			}else{
 				return false;
 			}
 		}

 		//Get List of All Schduled Classes
 		public function live_classes(){

 			$q="select * from online_class o JOIN online_course c on o.course_id=c.id";
 			$res=$this->db->query($q);
 			if($res->num_rows()>0){
 				return $res->result_array();
 			}else{
 				return false;
 			}
 		}
 	}


?>