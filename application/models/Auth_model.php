<?php
class Auth_model extends CI_Model {
    public function login($username, $password) {
        
        $this->db->where('username', $username);
        $query = $this->db->get('petugas');
        $user = $query->row();

        if ($user) {
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }
}