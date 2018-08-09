<?php

	class Deposit_form_model extends CI_Model{

		public function __construct(){

			$this->load->database();
		}

		public function insert_deposit_form(){

			$data=["invoice_id"=>$_POST['invoice_num'],"transction_num"=>$_POST['transaction_num'],	
			"cnic"=>$_POST['CNIC'],"date"=>$_POST['date'],"deposit_method"=>$_POST['payment_method'],"amount"=>$_POST['amount']];

			$result=$this->db->insert("deposit_conf",$data);
			if($this->db->affected_rows()>0){
				return true;
			}
			else{
				return false;
			}

		}

	}

?>