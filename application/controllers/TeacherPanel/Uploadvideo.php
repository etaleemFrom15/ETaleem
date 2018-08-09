<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Uploadvideo extends CI_Controller{



  //variable for storing error message
    private $error;
    //variable for storing success message
    private $success;
   public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));

        $this->load->library('session');
        }

        public function index($id)
        {          

                $this->load->view('TeacherPanel/views/add-content', array('error' => ' ' ));
        }
           private function handle_success($succ) {
        $this->success .= $succ . "rn";
    }
       private function handle_error($err) {
        $this->error .= $err . "rn";
    }

public function make_upload($id){
      $this->db->select('dir_name');
  $this->db->from('course_dir');
  $this->db->where('id',$id);
  $query = $this->db->get();
  $result = $query->row();
  $result=$result->dir_name;
echo $result;
  $user_id=$this->session->userdata('user_id');
  //$result=$result->name;
  echo $user_id;
 if ($this->input->post('video_upload')) {
            //set preferences
          
            //file upload destination
            $upload_path = './uploads/'.$user_id.'/'.$result.'/';
           
            $config['upload_path'] = $upload_path;
            //allowed file types. * means all types
            $config['allowed_types'] = 'wmv|mp4|avi|mov';
            //allowed max file size. 0 means unlimited file size
            $config['max_size'] = '0';
            //max file name size
            $config['max_filename'] = '255';
            //whether file name should be encrypted or not
            $config['encrypt_name'] = FALSE;
            //store video info once uploaded
            $video_data = array();
            //check for errors
            $is_file_error = FALSE;
            //check if file was selected for upload
            if (!$_FILES) {
                $is_file_error = TRUE;
                $this->handle_error('Select a video file.');
            }
            //if file was selected then proceed to upload
            if (!$is_file_error) {
                //load the preferences
                $this->load->library('upload', $config);
                //check file successfully uploaded. 'video_name' is the name of the input
                if (!$this->upload->do_upload('userfile')) {
                    //if file upload failed then catch the errors
                    $error=$this->upload->display_errors();
                    echo $error;
                    $this->handle_error($this->upload->display_errors());

                    $is_file_error = TRUE;
                } else {
                    //store the video file info
                    $video_data = $this->upload->data();
                }
            }
            // There were errors, we have to delete the uploaded video
            if ($is_file_error) {
                if ($video_data) {
                    $file = $upload_path . $video_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            } else {
                
               echo $this->error;
        echo $this->success;
               $path= base_url().'uploads/'.$user_id.'/'.$result.'/'.$video_data['file_name'];
               $newpath = str_replace(' ', '%20', $path);
               $video_desc=$this->input->post('video_desc');
                   $record=array(
                     'name' => $video_data['file_name'],
                     'description'=>$video_desc,
                    'path' => $newpath,
                     'cdir_id' => $id
                       );

                  $this->db->insert('course_content', $record);
                     
                
                $this->handle_success('Video was successfully uploaded to directory');
                redirect('TeacherPanel/main/courses');

            }
        }
        //load the error and success messages
        
        $data['errors'] = $this->error;
        $data['success'] = $this->success;
        //load the view along with data
       // $this->load->view('TeacherPanel/views/add-content', $data);
    }


  
        
            
    


  

}





?>