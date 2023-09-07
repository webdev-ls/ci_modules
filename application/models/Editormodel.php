<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editormodel extends CI_Model{



    public function save($content){

        $data = array(
            'content' => $content
        );

        $this->db->insert('html', $data);
    }

    
}
?>