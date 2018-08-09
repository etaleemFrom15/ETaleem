
<?php
class Course_model extends CI_Model {



    function __construct() {
        
    }

//get course directory wise
public function getcourse($id) {
  if($id != FALSE) {
    $query = $this->db->get_where('course_content', array('cdir_id' => $id));
    return $query->result();
  }
  else {
    return FALSE;
  }
}

//get course details
public function getcoursedetails($id) {
   $sql="SELECT cdr.id,cdr.course_thumb,cdr.dir_name,cdr.course_desc,cdr.price,
                          t.first_name,t.last_name from course_dir cdr
                          
                          INNER JOIN teachers t on cdr.teacher_id=t.tid
                          Where cdr.id=$id";
                          $query = $this->db->query($sql); 

                          return $query->row_array();

}


//get course rating



}

?>