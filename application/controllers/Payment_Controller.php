<?php

//Controller for Payment Related Functiolity
class Payment_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->Model("Payment_Model");
		$this->load->Model("Course_model");
		$this->load->Model("Request_Model");

	}

	//Pass Invoice Data to Create_Invoice Model which insert Data into DB.
	public function create_invoice($course_id=""){

		
		//Get Logged In User ID From Session
		$u_id=$_SESSION['user_id'];

		//If User No Logged in then Redirect to Main Controller Otherwise Not
		if(isset($u_id)){

		//If Course Id is empty Then It Means Generate Invoice for Online Course
		if($course_id==""){

			$by=$_POST['by'];
			$req_id=$_POST['req_id'];
			
			//Getting Data From Request Table To Insert it into Online_Course Table
			$result=$this->Request_Model->get_request($req_id,$by);

			
			$c_name=$result['c_name'];

			$price=$result['bid'];

			$t_email=$by;

			$data=array("c_name"=>$c_name,"price"=>$price,"t_email"=>$t_email);
			$c_id=$this->Course_model->insertData($data);

			$res=$this->Payment_Model->create_invoice("invoice_online",$c_id,$u_id);
			$data['type']="online";

		}
		else{
			$res=$this->Payment_Model->create_invoice("invoice",$course_id,$u_id);

		}

			//Getting Result
			if($res!=FALSE){

				$data['invoice_num']=$res;
				$this->load->view("invoice",$data);
			}
		}else{
			redirect("Main/signin");
		}
	}

	//Show Invoice Of The Loggin User
	public function show_invoice($invoice_id,$table){

		if(isset($_SESSION['user_id'])){
			$result=$this->Payment_Model->view_invoice($table,$invoice_id,$_SESSION['user_id']);
			$data['res']=$result;
		}
		else{
			$data['res']=false;
		}
		$this->load->view("view_invoice",$data);
	}

}

?>