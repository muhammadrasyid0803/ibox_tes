<?php
class Login_m extends CI_Model{
  public function cek_login($data){
        $this->db->from('users');
        $this->db->where('username', $data['username']);
        $this->db->where('password',  $data['password']);
        $query = $this->db->get();

        return $query->row_array();
  }

}