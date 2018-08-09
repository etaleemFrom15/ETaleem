<?php

	class Comment_Model extends CI_Model{
		
		//Insert Comment Into DB
		public function insertComment($des,$u_id,$course_id,$date,$type){
		
			$data=["comment"=>$des,"u_id"=>$u_id,"c_id"=>$course_id,"date"=>$date,"type"=>$type];
			if($this->db->insert("course_comments",$data)){
				return true;
			}
			else{
				return false;
			}
		}

		//Show Comments
		public function showComments($course_id){

			$q="SELECT c.*,s.first_name as sfname,s.last_name as slname,t.first_name as tfname,t.last_name as tlname FROM course_comments c LEFT JOIN students s on c.u_id=s.sid AND c.type=s.type LEFT JOIN teachers t on c.u_id=t.tid AND c.type=t.type having c.c_id='$course_id'";

			$res=$this->db->query($q);

			if($res->num_rows()>0){

				$result['res']=$res->result_array();
				$result['count']=$res->num_rows();
				return $result;
			}
			else{
				return false;
			}
		}
	}

?>