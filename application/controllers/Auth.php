<?php
defined('BASEPATH') OR exit('No direct access script is allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function index(){
        $this->load->view('signup');
    }
    private function hashed_pass($password){
        $hash = md5($password);                   
        $hash2 = md5($hash);
        $hash3 = password_hash($hash2,PASSWORD_DEFAULT);
        return $hash3;
    }

    private function verify($password, $storedhash){
        $md = md5($password);
        $md2 =md5($md);
        $verify = password_verify($md2, $storedhash);
        return $verify;
    }

    



    public function signup(){

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $this->form_validation->set_rules('name','Name', 'required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            
            
            if($this->form_validation->run() == false){
                $this->load->view('signup');
            }
            else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => $this->hashed_pass($this->input->post('password'))
                );
                
                
                $this->user_model->register_user($data);

                redirect('auth/login');

            }
        }
        $this->load->view('signup');

    }

    public function login(){
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() == false){
            $this->load->view('login');
        }
        else{

            $data = array(
                'email' =>$this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            $user = $this->user_model->auth_user($data['email']);
            // var_dump($user);
            // exit;

            if($user && $this->verify($data['password'],$user->password) ){
                //  echo "djnfnvievn"; exit;
                $this->session->set_userdata('user_id', $user->id); 
                redirect('auth/dashboard');
            }
            else{
                $data['error'] ='Invalid information, Enter the correct data';
                $this->load->view('login',$data);
                echo "Email: " . $data['email'] . "<br>";
                echo "Password: " . $data['password'] . "<br>";
                echo "Hashed Password from Database: " . $user->password . "<br>"; // Display the hashed password from the database
            }
        }
    }
    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('auth/login');
    }
    public function dashboard(){
        $this->load->view('dashboard');
    }

}