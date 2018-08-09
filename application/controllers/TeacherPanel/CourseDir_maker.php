<?php

class CourseDir_maker extends CI_Controller{


		//Constructor For Initializing Helpers, Modals etc.
		public function __construct(){
	        
	        //Important to Call Parent Constructor
	        parent::__construct();

		    //Form Helper Library
		     $this->load->helper(array('form', 'url'));


		    //Calling Session Library
		    $this->load->library("session");
		}


public function SaveDirectory(){


	if(isset($_POST['make_folder'])) {
  $user_id=$this->session->userdata('user_id');
  $folder_name=$this->input->post('folder_name');
  $structure="./uploads/$user_id/$folder_name";
  $course_desc=$this->input->post('course_desc');
  $cat_id = $this->input->post('category');
  $price=$this->input->post('course_price');
  


   if(!mkdir($structure, 0777, true)){

    die('Failed to create folders either Same Name Folder Present already try other Name');
   }



   //file upload destination
            $upload_path = './uploads/'.$user_id.'/thumbnails/';
            
           
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
                if (!$this->upload->do_upload('course_thumb')) {
                    //if file upload failed then catch the errors
                    $error=$this->upload->display_errors();
                    echo $error;
                    $this->handle_error($this->upload->display_errors());

                    $is_file_error = TRUE;
                } else {
                    //store the video file info
                    $thumb_data = $this->upload->data();
                }
            }
            // There were errors, we have to delete the uploaded video
            if ($is_file_error) {
                if ($thumb_data) {
                    $file = $upload_path . $thumb_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            } 

else{
 $path= base_url().'uploads/'.$user_id.'/thumbnails/'.$thumb_data['file_name'];

$record = array(
                  'dir_name' => $folder_name,
                  'dir_path' => $structure,
                  'course_thumb'=>$path,
                  'course_desc'=>$course_desc,
                  'price'=>$price,
                  'cat_id'=>$cat_id,
                  'teacher_id'=>$user_id
     
                                      );   
                $this->db->insert('course_dir', $record);

                redirect('TeacherPanel/main/courses');
	
}
}
}		

}
?>