<?php

	/*
	Termonoligies
	G- Method From General(User) Module
	S- Method from Controller Specific Module
	*/

	/*****Start Here*****/

	//Controller For Controlling Course Requests !
	class Request_Controller extends CI_Controller{
		

		//Constructor For Initializing Helpers, Modals etc.
		public function __construct(){
	        
	        //Important to Call Parent Constructor
	        parent::__construct();

		    //Form Helper Library
		    $this->load->helper('form');

		    //Iniliaze Request Model For Request Specific Database Operations
		    $this->load->model('request_model');

		    //Initilizae Model For General Database Operations
		    $this->load->model('user_model');

		    //Calling Session Library
		    $this->load->library("session");
		}

		//Method To Send the Request Form Data into Database
		public function send_request(){
	    	
	    	//Getting Catogries To Display in Request Form(G)
	    	$data['cats']=$this->user_model->show_cat();

	    	//Check To Test Request Form Was Submited Or Not
			if($this->input->post("c_name")){
				
				//Request Status i.e Submited or Not (S)
				$req_id=$this->request_model->send_request();

				//Getting Selected Catogery From the Request Form 
				$data['cat']=$this->input->post("cat_id");

				//Logged In Student Name From Session
				$by_name=$_SESSION['user_fname'];

				//Logged In Student Email
				$by=$_SESSION['user_email'];

				//Requested Course Title
				$course_title=$this->input->post("c_name");

				//Notification
				$notification=$by_name." Wants to Learn ".$course_title;


				//Select Teachers With the Selected Catogery (G)
				$teachers=$this->user_model->show_teacher($data['cat']);


				//Traversing To Obtained Indidual Teacher And Store His Email to Notification Table
				//These Teaachers Will Recieve a Notifications in THeir Time Line For Course Request
				foreach ($teachers as $teacher) {
					
					//Teacher Email
					$to=$teacher['email'];

					//Combining Data
					$notify=array("notification"=>$notification,"to"=>$to,"by"=>$by,"req_id"=>$req_id);

					//Inserting Notify Data into Notification Table (S)
					$check=$this->request_model->send_request_notifications($notify);
					echo $check;
					
				}
				
			}
		}
	}

?>