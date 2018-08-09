<?php
	class Notifications extends CI_Controller{

		public function __construct(){

			parent::__construct();

			//Calling Notification Model
			$this->load->model("notification_model");

			//Calling Session Library
			$this->load->library("session");

			//Calling Helper Classes
			$this->load->helper("url");

		}


		//Show Single or All Notifications Of Logged In User
		public function notify($notify_id=NULL){
			
			//Logged In User Email
			$user_email=$_SESSION['user_email'];

			//If Null, Then Show All Notificatins for Logged in User
			if($notify_id==NULL){

				//Show All Notifications For Logged in User
				$data['notifications']=$this->notification_model->get_notify($user_email);
			}

			//Else Show Specfic Notification
			else{

				//Show Selected Notification For Logged in User
				$data['notification']=$this->notification_model->get_notify($user_email,$notify_id);

				//Update Check Value to 1 For the Selected Notification
				if($this->db->affected_rows()==1){
					$this->notification_model->update_check($data['notification']['id']);
				}
			}

			//Load the view with the Notfications
			$this->load->view("notify",$data);

		}
	}

?>