<?php

//Controller for Payment Related Functiolity
class Payment_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->Model("Payment_Model");
	}

	//Pass Invoice Data to Create_Invoice Model which insert Data into DB.
	public function create_invoice($course_id){
		
		//Get Logged In User ID From Session
		$u_id=$_SESSION['user_id'];

		//If User No Logged in then Redirect to Main Controller Otherwise Not
		if(isset($u_id)){

			//Getting Result
			$res=$this->Payment_Model->create_invoice($course_id,$u_id);
			if($res!=FALSE){

				$data['invoice_num']=$res;
				$this->load->view("invoice",$data);
			}
		}else{
			redirect("Main/signin");
		}
	}

	//Show Invoice Of The Loggin User
	public function show_invoice($invoice_id){

		if(isset($_SESSION['user_id'])){
			$result=$this->Payment_Model->view_invoice($invoice_id,$_SESSION['user_id']);
			$data['res']=$result;
		}
		else{
			$data['res']=false;
		}
		$this->load->view("view_invoice",$data);
	}





}

?>