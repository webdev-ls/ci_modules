<?php
class User_model extends CI_Model {
    
    public function register_user($data) {
        return $this->db->insert('users', $data);
    }

    public function auth_user($email) {
        $this->db->where('email', $email);
        $user = $this->db->get('users')->row();
        return $user;
        // var_dump($user);
        // exit;
    }
}
?>
