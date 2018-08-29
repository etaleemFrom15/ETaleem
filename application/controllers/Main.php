
<?php

class Main extends CI_Controller{


public function __construct(){
 
        parent::__construct();
    $this->load->helper('url');
    $this->load->model('user_model'); //loading user_model
        $this->load->library('session');
        
        //Library to Load Header+Content+Footer Dynamically, So Use this
        $this->load->library('loadviewteacher');
                $this->load->library('loadviewstudent');

 
}
public function index()
{
  
      $data['cats']=$this->user_model->show_cat();
      $this->load->view('index.php', $data);
}



//Register User and Checking Email from both table.
// Email check logic in user_model method email_check. 
public function register_user(){
       
      $registerAs=$this->input->post('profession');
      $user=array(
      'first_name'=>$this->input->post('fname'),
      'last_name'=>$this->input->post('lname'),
      'gender'=>$this->input->post('gender'),
      'email'=>$this->input->post('email'),
      'password'=>$this->input->post('password'),
      'mobile_no'=>$this->input->post('mobile_no'),
      'city'=>$this->input->post('city'),
       'address'=>$this->input->post('address'),
        'location'=>$this->input->post('loc')
        );

    
 
$email_check=$this->user_model->email_check($user['email']);
 
if($email_check==true){
  
  if($registerAs=="student") { 
  $this->user_model->register_user('students',$user);
   
 
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');

 redirect('main');
}

else{
$this->user_model->register_user('teachers',$user);
    
 
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');

  redirect('main');
}
}

else{ 
  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');

 
  redirect('main');

 }
}



//check login credentials 
function login_user(){
  $user_login=array(
 
  'email'=>$this->input->post('email'),
  'password'=>$this->input->post('password'),
   'role'=>$this->input->post('profession')
  );
  if($user_login['role']=="student"){
 
 // passing arguments to login_user method of user_model
    $data=$this->user_model->login_user($user_login['email'],$user_login['password'],'students');
      
    //if $data exist setting into session
      if($data)
      {
        $this->session->set_userdata('user_id',$data['sid']);
        $this->session->set_userdata('user_type',$data['type']);
        $this->session->set_userdata('user_email',$data['email']);
        $this->session->set_userdata('user_fname',$data['first_name']);
         $this->session->set_userdata('user_lname',$data['last_name']);
 
         redirect('main');
 
      }

      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        redirect('main');
 
      }
 }
else{
 
    $data=$this->user_model->login_user($user_login['email'],$user_login['password'],'teachers');
    if($data)
      {   
       $folder_name=$data['tid'];
       $structure="./uploads/$folder_name";
       $thumb_folder=$structure."/thumbnails";
    if(!is_dir($structure) && !is_dir($thumb_folder)){
       mkdir($structure, 0777, true);
       mkdir($thumb_folder, 0777, true);

   } 
   
        $this->session->set_userdata('user_id',$data['tid']);
         $this->session->set_userdata('user_type',$data['type']);
        $this->session->set_userdata('user_email',$data['email']);
        $this->session->set_userdata('user_fname',$data['first_name']);
         $this->session->set_userdata('user_lname',$data['last_name']);
 
         redirect('main');
 
      }

      else{
        $this->session->set_flashdata('error_msg', 'You Entered Wrong Email or Password!.');
        redirect('main');
 
      }
 }


 
}
 
// after login view 
function user_profile($type){
  if($type==0){
  $this->loadviewstudent->load_view('StudentPanel/views/courses.php');

 }
 else{
 $this->loadviewteacher->load_view('TeacherPanel/views/courses.php');
 }
}



public function user_logout(){
 
  $this->session->sess_destroy();
  redirect('main');
}



 
}
    

        ?>