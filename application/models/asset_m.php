<?php
class Asset_m extends CI_Model{    
  
  public function get_pop(){
    $query = $this->db->get('pops');
    return $query->result();
  }
}