<?php

	 
	class Payments extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->helper("url");
			$this->load->model("Deposit_form_model");
		}

		//Load Payment Deposit Form and Details View
		public function index(){

			//Emptry Data array for default view
			$data=array();

			//If Deposit Form Was Submited
			if(isset($_POST['submit'])){

				$check=$this->Deposit_form_model->insert_deposit_form();

				if($check==true){
					$data['mesg']="Your Details Send Succesfully";
				}
			}

			$this->load->view("payments",$data);

		}
	}

?>