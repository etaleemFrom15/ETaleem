
<?php
class TeacherSearch_model extends CI_Model{




   public function __construct()
        {
             
        }

      public function getTeachers($id){

    
           $sql="SELECT t.tid,t.t_pic, t.first_name,t.last_name,tr.teacher_vote,t.address,UPPER(sub.subject_name) as subject_name,catogery.cat from teacher_subject
                 LEFT JOIN teachers t on t.tid=teacher_subject.tid 
                LEFT JOIN subjects sub on sub.id=teacher_subject.subject_id 
                LEFT JOIN catogery on catogery.id=sub.cat_id
                LEFT JOIN teacher_rating tr on tr.teacher_id=t.tid
                WHERE sub.id='$id'";
             $query=$this->db->query($sql);

         if($query->num_rows()>0){      
                return $query->result();
     }
     else{
        return false;
     }

 }

 public function getTeachersBySubject($subject){

    
           $sql="SELECT t.tid,t.t_pic,t.first_name,t.last_name,tr.teacher_vote,t.address,UPPER(sub.subject_name) as subject_name,catogery.cat from  teacher_subject
                 LEFT JOIN teachers t on t.tid=teacher_subject.tid 
                LEFT JOIN subjects sub on sub.id=teacher_subject.subject_id 
                LEFT JOIN catogery on catogery.id=sub.cat_id
                LEFT JOIN teacher_rating tr on tr.teacher_id=t.tid
                WHERE sub.subject_name='$subject'";
             $query=$this->db->query($sql);

         if($query->num_rows()>0){      
                return $query->result();
     }
     else{
        return false;
     }

 }

 public function getTeachersByLocation($subject,$location){

    
    $sql="SELECT t.tid,t.t_pic,t.first_name,t.last_name,tr.teacher_vote,t.address,UPPER(sub.subject_name) as subject_name,catogery.cat from  teacher_subject
          LEFT JOIN teachers t on t.tid=teacher_subject.tid 
         LEFT JOIN subjects sub on sub.id=teacher_subject.subject_id 
         LEFT JOIN catogery on catogery.id=sub.cat_id
         LEFT JOIN teacher_rating tr on tr.teacher_id=t.tid
         WHERE sub.subject_name='$subject' AND t.location LIKE '%$location%'";
      $query=$this->db->query($sql);

  if($query->num_rows()>0){      
         return $query->result();
}
else{
 return false;
}
 }
public function getTeachersByRating($subject){

    
    $sql="SELECT t.tid,t.t_pic,t.first_name,t.last_name,tr.teacher_vote,t.address,UPPER(sub.subject_name) as subject_name,catogery.cat from  teacher_subject
        LEFT JOIN teachers t on t.tid=teacher_subject.tid 
        LEFT JOIN subjects sub on sub.id=teacher_subject.subject_id 
        LEFT JOIN catogery on catogery.id=sub.cat_id
        LEFT JOIN teacher_rating tr on tr.teacher_id=t.tid
        WHERE sub.subject_name='$subject' AND tr.teacher_vote BETWEEN '4' AND '5'";
      $query=$this->db->query($sql);

  if($query->num_rows()>0){      
         return $query->result();
}
else{
 return false;
}

}
 public function getTeacherProfile($id){
       $sql="SELECT * from teachers where tid='$id'";
       $query=$this->db->query($sql);

       if($query->num_rows()>0){
        return $query->row_array();
       }
       else{
        return false;
       }

 }
 public function getTeacherExp($id){
    $sql="SELECT * from teacher_experience LEFT JOIN teachers
           on teacher_experience.t_id=teachers.tid 
            where t_id='$id'";
    $query=$this->db->query($sql);

    if($query->num_rows()>0){
     return $query->result();
    }
    else{
     return false;
    }

}

     }

      
 

    
?>