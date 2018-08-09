<?php

class Rating_model extends CI_Model {


    function __construct() {
        
    }

 public function get_course_rating($course_id) {
        $sql = 'SELECT COUNT(DISTINCT(cr.vote_id)) total_rows,
            IFNULL(SUM(cr.course_vote),0) total_rating, cr.course_id
            FROM course_rating cr
            WHERE cr.course_id=' . $course_id . ' LIMIT 1';
        $query = $this->db->query($sql);
        $row = $query->row();
        $total_rows = $row->total_rows;
        $total_rating = $row->total_rating;
        $results['vote_rows'] = $total_rows;
        $rating = 0;
        if ($total_rows > 0) {
            $rating = $total_rating / $total_rows;
        }
        $dec_rating = round($rating, 1);
        $results['vote_rate'] = $rating;
        $results['vote_dec_rate'] = $dec_rating;
        return $results;
    }

    function get_course_rating_from_ip($course_id) {
        $ip = $this->input->server('REMOTE_ADDR');
        $sql = 'SELECT cr.vote_id
            FROM course_rating cr 
            WHERE cr.ip_address=' . $this->db->escape($ip) .
                ' AND cr.course_id=' . $course_id;
        $this->db->limit(1);
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $vote_id = $row->vote_id;
            $sql = 'SELECT IFNULL(SUM(cr.course_vote),0) total_rating,
                cr.course_id
                FROM course_rating cr  
                WHERE cr.course_id=' . $course_id .
                    ' LIMIT 1';
            $query = $this->db->query($sql);
            $row = $query->row();
            $rating = $row->total_rating;
            $rating = round($rating, 1);
            $results['vote_rate'] = $rating;
            return $results;
        }
    }

     /*
     * rate this course
     */

   public function rate_course($course_id, $rating,$user_email) {
        $ip = $this->input->server('REMOTE_ADDR');
       $sql = 'SELECT cr.vote_id
            FROM course_rating cr
            WHERE cr.ip_address=' . $this->db->escape($ip) .' AND cr.course_id=' . $course_id;
        $this->db->limit(1);
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $vote_id = $row->vote_id;
            $sql = 'SELECT IFNULL(SUM(cr.course_vote),0) total_rating,
                 cr.course_id
                FROM course_rating cr 
                WHERE cr.vote_id=' . $vote_id . '
                AND cr.course_id=' . $course_id .
                    ' LIMIT 1';
            $query = $this->db->query($sql);
            $row = $query->row();
            $rating = $row->total_rating;
            $rating = round($rating, 1);
            $results['vote_curr_rate'] = $rating;
        } else {
          
            $data = array(
                'course_vote' => $rating,
                'course_id' => $course_id,
                'u_email'=> $user_email,
                'ip_address' => $ip
            );
            $this->db->insert('course_rating', $data);
            $last_id=$this->db->insert_id();
            return $last_id;

         /*    $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            }
           else {
                $this->db->trans_commit();
                $sql = 'SELECT IFNULL(SUM(cr.course_vote),0) total_rating,
                cr.course_id
                FROM course_rating cr
                WHERE cr.course_id=' . $blog_id .
                        ' LIMIT 1';
                $query = $this->db->query($sql);
                $row = $query->row();
                $rating = $row->total_rating;
                $rating = round($rating, 1);
                $results['vote_curr_rate'] = $rating;
               
            }*/
        }
        /*$overall_results = $this->get_course_rating($course_id);
        $results['vote_rows'] = $overall_results['vote_rows'];
        $results['vote_rate'] = $overall_results['vote_rate'];
        $results['vote_dec_rate'] = $overall_results['vote_dec_rate'];*/
       
       
    }

   public function course_feedback($feedback,$vote_id){

        $data = array(
                'feedback'=> $feedback,
                'vote_id' => $vote_id
            );
       $this->db->insert('course_feedback',$data);
    }


    public function getRatingandFeedBack($course_id){

    	$query="SELECT cr.*,s.first_name as sfname,s.last_name as slname,t.first_name as tfname,t.last_name as tlname,cf.feedback FROM course_rating cr LEFT JOIN students s on cr.u_email=s.email LEFT JOIN teachers t on cr.u_email=t.email LEFT JOIN course_feedback cf on cr.vote_id=cf.vote_id 
    	    HAVING cr.course_id='$course_id'";

    	    $res=$this->db->query($query);

			if($res->num_rows()>0){
               $result['res']=$res->result_array();
				
				return $result;			}
			else{
				return false;
			}
        }
        

//
public function get_teacherbyrating($teacher_id) {
    $sql = 'SELECT COUNT(DISTINCT(tr.vote_id)) total_rows,
        IFNULL(SUM(tr.teacher_vote),0) total_rating, tr.teacher_id
        FROM teacher_rating tr
        WHERE tr.teacher_id=' . $teacher_id . ' LIMIT 1';
    $query = $this->db->query($sql);
    $row = $query->row();
    $total_rows = $row->total_rows;
    $total_rating = $row->total_rating;
    $results['vote_rows'] = $total_rows;
    $rating = 0;
    if ($total_rows > 0) {
        $rating = $total_rating / $total_rows;
    }
    $dec_rating = round($rating, 1);
    $results['vote_rate'] = $rating;
    $results['vote_dec_rate'] = $dec_rating;
    return $results;
}

}






?>