<?php

	//Controller for Sending Bid for Requested Course
	class Bid_Controller extends CI_Controller{
		
		public function __construct(){

			parent::__construct();
			$this->load->model("Request_Model");

		}

		//Send Bid Method
		public function send_bid(){
			
			//Getting Bid_Id Of last Inserted Bid
			$bid_id=$this->Request_Model->send_bid();
			
			if($bid_id!=false){

				$result=$this->Request_Model->join_bid_request($bid_id);
				$requester_email=$result['request_u_email'];

			}

			//Preparing Data To be Sent in Notification Table
			$to=$requester_email;
			$by=$_SESSION['user_email'];
			$notification=$_SESSION['user_fname']." Has Bid ".$_POST['bid'];
			$req_id=$result['req_id'];

			$data=array("notification"=>$notification,"to"=>$to,"type"=>1, "by"=>$by,"req_id"=>$req_id);
			$check=$this->Request_Model->send_request_notifications($data);
			echo $check;
		} 		
	}

?>