<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Editormodel');
        $this->load->helper('url');
        $this->load->database();
    }



    public function index(){
        $this->load->view('texteditor');
    }

    // public function save(){
    //     // if(isset){
    //         $content = $this->input->post('content');

    //         $saved = $this->Editormodel->save($content);
    //         var_dump($saved);
    //         exit();
    //         if($saved){
    //             echo "Save Successfully";
    //         } else{
    //             echo "Failed to save content.";
    //         }
    //     // }
    //     }

    public function save() {
        if ($this->input->post('submit')) {
            $content = $this->input->post('editor');
            $saved = $this->Editormodel->save($content);
            if ($saved) {
                echo "Save Successfully";
            } else {
                echo "Failed to save content.";
            }
        }
    }


    // public function 
}
?>