<?php

class Payment_Model extends CI_Model{


	public function __construct()
    {
    	$this->load->database();
    	
 	}

	//Create Invoice Method to Insert Data into Invoice Table
	public function create_invoice($table_name,$course_id,$u_id){

		$data=Date("y-m-d");
		$data=["Date"=>$data,"Course_Id"=>$course_id,"Student_Id"=>$u_id,"type"=>$_SESSION['user_type']];
		$check=$this->db->insert($table_name,$data);
		if($this->db->affected_rows()){

			//Returns Last Invoice Id Number
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	//Show Invoice Details
	public function view_invoice($table,$invoice_id,$u_id){


		if($_SESSION['user_type']==0){
			$table_to_be_joined="students";
		}else{
			$table_to_be_joined="teachers";
		}

		if($table=="invoice"){
			$q="select *,s.first_name as s_fname,s.last_name as s_lname,s.address as s_address,s.city as s_city from invoice i JOIN $table_to_be_joined s on i.Student_Id=s.sid JOIN course_content c on i.Course_Id=c.id JOIN course_dir d on c.cdir_id=d.id JOIN teachers t on d.teacher_id=t.tid HAVING i.Invoice_Id='$invoice_id' AND i.Student_Id='$u_id'";
		}else{

			$q="select *,s.first_name as s_fname,s.last_name as s_lname,s.address as s_address,s.city as s_city from invoice_online i JOIN $table_to_be_joined s on i.Student_Id=s.sid JOIN online_course o on i.Course_Id=o.id JOIN teachers t on o.t_email=t.email HAVING i.Invoice_Id='$invoice_id' AND i.Student_Id='$u_id'";
		}

		$result=$this->db->query($q);

		if($result->num_rows()>0){
			return $result->row_array();
		}
		else{
			return false;
		}
	}

	//Show Paid Invoices List
	public function showPaid(){

		$u_email=$_SESSION['user_email'];

		$q="select * from invoice_online i JOIN online_course c on i.Course_Id=c.id having c.t_email='$u_email' AND i.Paid='yes'";

		$res=$this->db->query($q);
		if($res->num_rows()>0){
			return $res->result_array();
		}
		else{
			return false;
		}
	}

	//Show All Paid Invoice Online Of Logged In Student
	//Show Paid Invoices List
	public function show_paid_invoice(){

		$u_id=$_SESSION['user_id'];
		$u_type=$_SESSION['user_type'];

		$q="select * from invoice_online where Student_Id='$u_id' AND type='$u_type' AND paid='yes'";

		$res=$this->db->query($q);
		if($res->num_rows()>0){
			return $res->result_array();
		}
		else{
			return false;
		}
	}

}

?>