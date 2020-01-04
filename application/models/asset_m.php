<?php
class Asset_m extends CI_Model{    
  
  public function get_pop(){
    $query = $this->db->get('pops');
    return $query->result();
  }

  public function get_name_pop_by_id($pop){
    $this->db->select('name');
    $this->db->from('pops');
    $this->db->where('id', $pop);
    $query = $this->db->get();
    return $query->row()->name;
  }

  public function tambah_a_build_infs_db($data){
    $this->db->insert('a_build_infs', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ac_db($data){
    $this->db->insert('a_ac_electricity', $data);   
    return $this->db->insert_id();
  }

  public function tambah_dc_db($data){
    $this->db->insert('a_dc_electricity', $data);   
    return $this->db->insert_id();
  }

  public function tambah_power_db($data){
    $this->db->insert('a_pwr_supply', $data);   
    return $this->db->insert_id();
  }  
}