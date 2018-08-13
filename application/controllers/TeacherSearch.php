<?php

class TeacherSearch extends CI_Controller{

public function __construct(){
 
        parent::__construct();
    $this->load->helper('url');
   $this->load->model("TeacherSearch_model");
        $this->load->library('session');

 
}

        public function index($id)
        {
        	 $teachers=$this->TeacherSearch_model->getTeachers($id);
         $data['teacher']=$teachers;
         
         
                $this->load->view('search.php',$data);
        }

        public function getTeachers(){

                  $subject=$_POST['subj_search'];
                  $subjectname=strtoupper($subject);
                  
                  if(isset($_POST['current-location'])){
                        $location=$_POST['current-location'];  
                        $teachers=$this->TeacherSearch_model->getTeachersByLocation($subjectname,$location);
                        $data['teacher']=$teachers;
                
                        $this->load->view('search.php',$data);
                  }
                else if($_POST['searchby']=="rating"){
                $teachers = $this->TeacherSearch_model->getTeachersByRating($subject);
                $data['teacher']=$teachers;
                
                $this->load->view('search.php',$data);
            }      

             else{
                  $teachers=$this->TeacherSearch_model->getTeachersBySubject($subjectname);
                 $data['teacher']=$teachers;
         
                 $this->load->view('search.php',$data);
             }
                
        }

        public function viewProfile($id){
 
               $teacher=$this->TeacherSearch_model->getTeacherProfile($id);
               $data['fname']=$teacher['first_name'];
               $data['lname'] =$teacher['last_name'];
               $data['email'] =$teacher['email'];
               $data['address']=$teacher['address'];
               $data['mob_numb']=$teacher['mobile_no']; 
               $data['prof_pic']=$teacher['t_pic'];  
 

               $this->load->view('tutor.php',$data);  
        }


    }
        ?>