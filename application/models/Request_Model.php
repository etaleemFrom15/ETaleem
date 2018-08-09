<?php

    //Model For Course Request Controller
	class Request_Model extends CI_Model{

	    //Constructor For Initializing Database Connection etc.
	    public function __construct(){
			$this->load->database();
		}
 

	    //Method to Send the Content of Request Form to Request Table
		public function send_request(){
			$cname=$this->input->post("c_name");
			$des=$this->input->post("des");
			$cat_id=$this->input->post("cat_id");
			$user_email=$_SESSION['user_email'];

			$data=array("c_name"=>$cname,"des"=>$des,"u_email"=>$user_email,"cat_id"=>$cat_id);
			$this->db->insert("request",$data);

			//Checking it Request Inserted Succesfully or Not in DB
			if($this->db->affected_rows()==TRUE){
				
				$req_id=$this->db->insert_id();
				return $req_id ;
			}
			else{
				return false;
			}
	    }

	    //Get Request Table Data Specific or All
	    public function get_request($id="",$email=""){

	    		$q="select * from request r JOIN course_bid b on r.id=b.req_id having b.req_id='$id' AND b.u_email='$email'";
	    		
	    		$result=$this->db->query($q);
	    		return $result->row_array();
	    	
	    }

	    //Add Teacher Bid of Request Course to Table
	    public function send_bid(){

	    	$bid=$_POST['bid'];
	    	$req_id=$_POST['req_id'];
	    	$u_email=$_POST['u_email'];

	    	$data=array("bid"=>$bid,"req_id"=>$req_id,"u_email"=>$u_email);
	    	$this->db->insert("course_bid",$data);
	    	if($this->db->affected_rows()>0){
	   
	    		$bid_id=$this->db->insert_id();
				return $bid_id ;
	    	}
	    	else{
	    		return false;
	    	}
	    }

	    //Join Bid Table with Request Table to Get the Course Requester Email
	    public function join_bid_request($id){

	    	//First get the Request Id from the Last Inserted Bid Row
	    	$q="select req_id from course_bid where id='$id'";
	    	$result=$this->db->query($q);
	    	$result=$result->row_array();
	    	$req_id=$result['req_id'];

	    	//Now Join that Row withe request table where request id is same
	    	$q="select *,r.u_email as request_u_email from course_bid b JOIN request r on b.req_id=r.id 
	    	having b.req_id='$req_id'";

	    	$result=$this->db->query($q);
	    	return $result->row_array();

	    }




	    //Send Request Notifications to Teachers Or Students.
	    public function send_request_notifications($notify_data){
	    	$this->db->insert("notify",$notify_data);

	    	//Checking it Request Inserted Succesfully or Not in DB
			if($this->db->affected_rows()==TRUE){
				return 0;
			}
			else{
				return 1;
			}
	    }
    }
?> 
 
