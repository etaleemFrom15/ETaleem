<?php
class Subject_model extends CI_Model {



    function __construct() {
        
    }


    public function getProgrammingSubjects(){

        $query=$this->db->get_where('subjects', array('cat_id' => 1));

        return $query->result();
    }
}

    ?>