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

  public function tambah_alarm_db($data){
    $this->db->insert('a_monitoring_sistem', $data);   
    return $this->db->insert_id();
  } 

  public function tambah_odf_db($data){
    $this->db->insert('a_odf', $data);   
    return $this->db->insert_id();
  }

  public function tampil_data_building(){
    $this->db->select('a_build_infs.*, pops.name');
    $this->db->from('a_build_infs');
    $this->db->join ( 'pops', 'pops.id = a_build_infs.id_pop', 'left');
    $hasil = $this->db->get();

    return $hasil->result();
  }

  public function tampil_data_ac(){
    $this->db->select('a_ac_electricity.*, pops.name');
    $this->db->from('a_ac_electricity');
    $this->db->join ( 'pops', 'pops.id = a_ac_electricity.id_pop', 'left');
    $hasil = $this->db->get();

    return $hasil->result();
  }

  public function tampil_data_dc(){
    $this->db->select('a_dc_electricity.*, pops.name');
    $this->db->from('a_dc_electricity');
    $this->db->join ( 'pops', 'pops.id = a_dc_electricity.id_pop', 'left');
    $hasil = $this->db->get();

    return $hasil->result();
  }

  public function tampil_data_power(){
    $this->db->select('a_pwr_supply.*, pops.name');
    $this->db->from('a_pwr_supply');
    $this->db->join ( 'pops', 'pops.id = a_pwr_supply.id_pop', 'left');
    $hasil = $this->db->get();

    return $hasil->result();
  }

  public function tampil_data_alarm(){
    $this->db->select('a_monitoring_sistem.*, pops.name');
    $this->db->from('a_monitoring_sistem');
    $this->db->join ( 'pops', 'pops.id = a_monitoring_sistem.id_pop', 'left');
    $hasil = $this->db->get();

    return $hasil->result();
  }

  public function tampil_data_odf(){
    $this->db->select('a_odf.*, pops.name');
    $this->db->from('a_odf');
    $this->db->join ( 'pops', 'pops.id = a_odf.id_pop', 'left');
    $hasil = $this->db->get();

    return $hasil->result();
  }
}