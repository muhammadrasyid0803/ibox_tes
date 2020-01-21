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
    $this->db->insert('pm_ac_kwh_datakwhmeter', $data);   
    return $this->db->insert_id();
  }

  public function tambah_inspeksi($data){
    $this->db->insert('pm_ac_kwh_inspeksi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_pengukuran_tegangan($data){
    $this->db->insert('pm_ac_kwh_pengukuran_tegangan', $data);   
    return $this->db->insert_id();
  }

  public function tambah_lain_lain($data){
    $this->db->insert('pm_ac_kwh_lain_lain', $data);   
    return $this->db->insert_id();
  }

  public function tambah_temuan($data){
    $this->db->insert('pm_ac_kwh_temuan', $data);   
    return $this->db->insert_id();
  }

  public function tambah_dokumentasi($data){
    $this->db->insert('pm_ac_kwh_dokumentasi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_acpdb($data){
    $this->db->insert('pm_ac_acpdb_dataacpdb', $data);   
    return $this->db->insert_id();
  }

  public function tambah_inspeksi_acpdb($data){
    $this->db->insert('pm_ac_acpdb_inspeksi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_pengukuran_tegangan_acpdb($data){
    $this->db->insert('pm_ac_acpdb_pengukuran_tegangan', $data);   
    return $this->db->insert_id();
  }

  public function tambah_lain_lain_acpdb($data){
    $this->db->insert('pm_ac_acpdb_lain_lain', $data);   
    return $this->db->insert_id();
  }

  public function tambah_temuan_acpdb($data){
    $this->db->insert('pm_ac_acpdb_temuan', $data);   
    return $this->db->insert_id();
  }

  public function tambah_dokumentasi_acpdb($data){
    $this->db->insert('pm_ac_acpdb_dokumentasi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_foto_single_acpdb($data){
    $this->db->insert('pm_ac_acpdb_foto_single', $data);   
    return $this->db->insert_id();
  }

  public function get_name_pop_by_id1($id_pop){
    $this->db->select('name');
    $this->db->from('pops');
    $this->db->where('id', $id_pop);
    $query = $this->db->get();
    return $query->row()->name;
  }
}