<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homemodel extends CI_Model{
	public $user_tz;
	public $today;
	public function __construct(){
		parent::__construct();
		$this->load->database();
        $this->user_tz = new DateTimeZone('Asia/Kolkata');
		$this->today = new DateTime(null, $this->user_tz);
	}

	public function setDisplayMessage($message){
		$this->session->set_userdata('userDisplayMessage',$message);
	}

	public function getDisplayMessage(){
        $displayMessage = $this->session->userDisplayMessage;
        $this->session->unset_userdata('userDisplayMessage');
        return $displayMessage;
	}
}
