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
			$date=date('m,d,Y');
			$place=$this->input->post("place");

			$data=array("c_name"=>$cname,"des"=>$des,"u_email"=>$user_email,"cat_id"=>$cat_id,"date"=>$date,"place"=>$place);
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

	    //Show Request
	    public function showRequest(){
	    	$u_email=$_SESSION['user_email'];
	    	$q="select * from request where u_email='$u_email'";
	    	$res=$this->db->query($q);
	    	if($res->num_rows()>0){
	    		return $res->result_array();
	    	}else{
	    		return false;
	    	}
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

	    //Check if Bid Exists or Not for Specified Request Id and User email
	    public function checkBid($req_id){

	    	$u_email=$_SESSION['user_email'];
	    	$q="select * from course_bid where req_id='$req_id' and u_email='$u_email'";
	    	$res=$this->db->query($q);
	    	if($res->num_rows()>0){
	    		return true;
	    	}
	    	else{
	    		return false;
	    	}
	    }

	    //Get Course Bdi record as array
	    public function getBids($req_id=NULL){
	    	if($req_id==NULL){
	    		$u_email=$_SESSION['user_email'];
	    		$q="select * from course_bid where u_email='$u_email'";
	    	}else{
	    		$q="select * from course_bid c JOIN teachers t on c.u_email=t.email JOIN request r on c.req_id=r.id having c.req_id='$req_id'";
	    	}
	    	$res=$this->db->query($q);
	    	if($res->num_rows()>0){
	    		return $res->result_array();
	    	}
	    	else{
	    		return false;
	    	}	
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

	    //Show all request Teacher has Recived
	    public function showRequests($u_email){

	    	$q="select r.*,n.*,s.first_name as sfname,s.last_name as slname,s.type as stype,t.first_name as tfname,t.last_name as tlname,t.type as ttype from notify n JOIN request r on n.req_id=r.id LEFT JOIN students s on r.u_email=s.email LEFT JOIN teachers t on r.u_email=t.email having n.to='$u_email'";
	    	$res=$this->db->query($q);
	    	if($res->num_rows()==0){
	    		return false;
	    	}else{
	    		return $res->result_array();
	    	}

	    }
    }






?> 
 
