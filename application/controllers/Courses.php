
<?php
class Courses extends CI_Controller{




   public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                  $this->load->model('course_model');
                    $this->load->model('rating_model');
                    $this->load->model('Comment_Model');
                    $this->load->database();
        }

        public function index()
        {
                $this->load->view('view_courses', array('error' => ' ' ));
        }

     public function show_dirmaker(){
        $this->load->view('coursedir_maker');
     }

  


//load view of courses page
public function courses(){
  $this->load->view('courses.php');
}

//load view of courses details page
//public function course_details(){
  //$this->load->view('course_details.php');
//}


public function details($id){
 
   $content = $this->course_model->getcoursedetails($id);
   $course_content=$this->course_model->getcourse($id);
   $data['course_id']=$content['id'];
   $data['course_thumb']=$content['course_thumb'];
   $data['first_name']=$content['first_name'];
   $data['last_name']=$content['last_name'];
   $data['price']=$content['price'];
   $data['course_desc']=$content['course_desc'];
   $data['course_content']=$course_content;
   $data['course_comments']=$this->Comment_Model->showComments($data['course_id']);

  $vote_results = $this->rating_model->get_course_rating($id);
  $data['course_vote_overall_rows'] = $vote_results['vote_rows'];
  $data['course_vote_overall_rate'] = $vote_results['vote_rate'];
  $data['course_vote_overall_dec_rate'] = $vote_results['vote_dec_rate'];
  $vote_results = $this->rating_model->get_course_rating_from_ip($id);
  $data['course_vote_ip_rate'] = $vote_results['vote_rate'];


  $feedbacks=$this->rating_model->getRatingandFeedBack($id);
  $data['course_feedback']=$feedbacks;
      
    $this->load->view('course_details',$data);

}




public function rate_course(){
 if (isset($_POST['user_email'])) {
            $course_id = $_POST['course_id'];
            $rating = $_POST['rating'];
            $user_email=$_POST['user_email'];
            $feedback=$_POST['feedback'];
           
           
            $vote_results = $this->rating_model->rate_course($course_id, $rating,$user_email);
            
          

          
           
}

}

public function course_feedback(){
  if(isset($_POST['feedback'],$_POST['user_email'])){
    $feedback=$_POST['feedback'];
   $sql="SELECT MAX(vote_id) last_id From course_rating";
   $query=$this->db->query($sql);
   $vote_id=$query->row()->last_id;

   $course_feedback = $this->rating_model->course_feedback($feedback,$vote_id);
  }
}

}
        ?>