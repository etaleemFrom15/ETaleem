<?php

class Payment_Model extends CI_Model{


	public function __construct()
    {
    	$this->load->database();
    	
 	}

	//Create Invoice Method to Insert Data into Invoice Table
	public function create_invoice($course_id,$u_id){

		$data=Date("y-m-d");
		$data=["Date"=>$data,"Course_Id"=>$course_id,"Student_Id"=>$u_id];
		$check=$this->db->insert("invoice",$data);
		if($this->db->affected_rows()){

			//Returns Last Invoice Id Number
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	//Show Invoice Details
	public function view_invoice($invoice_id,$u_id){

		$q="select *,s.first_name as s_fname,s.last_name as s_lname,s.address as s_address,s.city as s_city from invoice i JOIN students s on i.Student_Id=s.sid JOIN course_content c on i.Course_Id=c.id JOIN course_dir d on c.cdir_id=d.id JOIN teachers t on d.teacher_id=t.tid HAVING i.Invoice_Id='$invoice_id' AND i.Student_Id='$u_id'";

		$result=$this->db->query($q);

		if($result->num_rows()>0){
			return $result->row_array();
		}
		else{
			return false;
		}
	}
}

?>