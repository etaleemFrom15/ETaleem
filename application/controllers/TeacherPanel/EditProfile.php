<?php
class EditProfile extends CI_Controller{

public function __construct(){
 
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model("User_model");
        $this->load->model("Request_Model");
        $this->load->model("Payment_Model");
        $this->load->model("Live_Class_Model");



        //Library to Load Header+Content+Footer Dynamically, So Use this
        $this->load->library('loadviewteacher');

}
public function EditProfile(){


	if(isset($_POST['save_prof'])) {
  $user_id=$this->session->userdata('user_id');
  
 


   //file upload destination
            $upload_path = './uploads/'.$user_id.'/';
            
           
            $config['upload_path'] = $upload_path;
            //allowed file types. * means all types
            $config['allowed_types'] = 'png|jpeg|jpg';
            //allowed max file size. 0 means unlimited file size
            $config['max_size'] = 0;
            //max file name size
            $config['max_filename'] = '255';
            //whether file name should be encrypted or not
            $config['encrypt_name'] = FALSE;

            $config['overwrite']  = TRUE;
            $config['max_width']  = 0;
            $config['max_height'] = 0;
            //store video info once uploaded
            $thumb_data = array();
            //check for errors
            $is_file_error = FALSE;
            //check if file was selected for upload
            if (!$_FILES) {
                $is_file_error = TRUE;
                $this->handle_error('Select a thumbnail file.');
            }
            //if file was selected then proceed to upload
            if (!$is_file_error) {
                //load the preferences
                $this->load->library('upload', $config);
                //check file successfully uploaded. 'thumb_name' is the name of the input
                if (!$this->upload->do_upload('prof-pic')) {
                    //if file upload failed then catch the errors
                    $error=$this->upload->display_errors();
                    echo $error;
                    $this->handle_error($this->upload->display_errors());

                    $is_file_error = TRUE;
                } else {
                    //store the video file info
                    $profilepic_data = $this->upload->data();
                }
            }
            // There were errors, we have to delete the uploaded video
            if ($is_file_error) {
                if ($profilepic_data) {
                    $file = $upload_path . $profilepic_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            } 

else{
 $path= 'uploads/'.$user_id.'/'.$profilepic_data['file_name'];

 $this->db->set('t_pic', $path);
 $this->db->where('tid', $user_id);
 $this->db->update('teachers'); 

                redirect('TeacherPanel/main/courses');
	
}
}

$result = $this->User_model->EditProfile($_POST);
if($result){
echo 1;
}
else{
echo 0;
}
exit;
}




}