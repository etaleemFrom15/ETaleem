<?php


	class Notification_Model extends CI_Model{

		public function __construct(){

			//Calling Database 
			$this->load->database();
		}

		//Get Single or All Notifications from Database Of Logged in User
		public function get_notify($user_email,$notify_id=NULL){

			if($notify_id==NULL){
				$data=array("to"=>$user_email);
				$result=$this->db->get_where("notify",$data);
				return $result->result_array();
			}
			else{
				$data=array("id"=>$notify_id, "to"=>$user_email);
				$result=$this->db->get_where("notify",$data);
				return $result->row_array();
			}

		}

		//Model To Update Check Value in Notification Table
		public function update_check($notify_id){

			$data=array("check"=>1);
			$this->db->update("notify",$data,"id=".$notify_id);
		}
	}
?>