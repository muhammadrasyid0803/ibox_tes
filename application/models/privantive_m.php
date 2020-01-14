<?php
class Privantive_m extends CI_Model{    
  
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

  public function tambah_data_kwh($data){
    $this->db->insert('pm_ac_datakwhmeter', $data);   
    return $this->db->insert_id();
  }

  public function tambah_inspeksi($data){
    $this->db->insert('pm_ac_inspeksi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_pengukuran_tegangan($data){
    $this->db->insert('pm_ac_pengukuran_tegangan', $data);   
    return $this->db->insert_id();
  }

  public function tambah_lain_lain($data){
    $this->db->insert('pm_ac_lain_lain', $data);   
    return $this->db->insert_id();
  }

  public function tambah_temuan($data){
    $this->db->insert('pm_ac_temuan', $data);   
    return $this->db->insert_id();
  }

// public function tambah_dokumentasi($data){
  //   $this->db->insert('pm_ac_inspeksi', $data);   
  //   return $this->db->insert_id();
  // }
  
}