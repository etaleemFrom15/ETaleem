<?php
class User_model extends CI_model{
 

  public function show_cat($cat_id=NULL){

    if($cat_id!=NULL){
      $data=array("id"=>$cat_id);
      $result=$this->db->get_where("catogery",$data);
    }
    else{
      $result=$this->db->get("catogery");
    }
    return $result->result_array();

  }
  //END

  //Showing Teachers All Or According to Catogries
  public function show_teacher($cat_id){
    
    if($cat_id==NULL){
      $result=$this->db->get("teachers");
    }
    else{
      $data=array("cat_id"=>$cat_id);
      $result=$this->db->get_where("teachers",$data);
    }
    return $result->result_array();
  }
  //END

 

 
public function register_user($db,$user){
 
 
$this->db->insert($db, $user);

 
}



#checking user  
public function login_user($email,$pass,$table){ 
  $this->db->select('*');
  $this->db->from($table);
  $this->db->where('email',$email);
  $this->db->where('password',$pass);

 
  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
 
    return false;
  }
 
 
}
public function email_check($email){
 
// Query #1 checking from students table
$sql = "SELECT email FROM students WHERE email='$email' 
       UNION SELECT email FROM teachers WHERE email='$email'";
$query = $this->db->query($sql);


if($query->num_rows()>0){

return false;
 
}

else{
  return true;
}

 
}
 
 
}
 
 
?>