<?php
class Asset_m extends CI_Model{    
  
  public function get_pop(){
    $query = $this->db->get('pops');
    return $query->result();
  }

  public function get_no_rack(){
    $query = $this->db->get('rackpops');
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

  public function tampil_detail_building(){
    $id = $this->input->get('id');
    $this->db->select('a_build_infs.*, rackpops.aset_id');
    $this->db->from('a_build_infs');
    $this->db->join('rackpops', 'rackpops.id = a_build_infs.no_rack');
    $this->db->where('a_build_infs.id', $id);

    $hasil = $this->db->get();

    return $hasil->row();
  }

  public function tampil_detail_ac(){
    $id = $this->input->get('id');
    $this->db->select('*');
    $this->db->from('a_ac_electricity');
    $this->db->where('id', $id);

    $hasil = $this->db->get();

    return $hasil->row();
  }

  public function tampil_detail_dc(){
    $id = $this->input->get('id');
    $this->db->select('*');
    $this->db->from('a_dc_electricity');
    $this->db->where('id', $id);

    $hasil = $this->db->get();

    return $hasil->row();
  }

  public function tampil_detail_power(){
    $id = $this->input->get('id');
    $this->db->select('*');
    $this->db->from('a_pwr_supply');
    $this->db->where('id', $id);

    $hasil = $this->db->get();

    return $hasil->row();
  }

  public function tampil_detail_alarm(){
    $id = $this->input->get('id');
    $this->db->select('*');
    $this->db->from('a_monitoring_sistem');
    $this->db->where('id', $id);

    $hasil = $this->db->get();

    return $hasil->row();
  }

  public function tampil_detail_odf(){
    $id = $this->input->get('id');
    $this->db->select('*');
    $this->db->from('a_odf');
    $this->db->where('id', $id);

    $hasil = $this->db->get();

    return $hasil->row();
  }

  public function hapus_data_building($id){
    $hasil=$this->db->query("DELETE FROM a_build_infs WHERE id='$id'");
    return $hasil;
  }

  public function hapus_data_ac($id){
    $hasil=$this->db->query("DELETE FROM a_ac_electricity WHERE id='$id'");
    return $hasil;
  }

  public function hapus_data_dc($id){
    $hasil=$this->db->query("DELETE FROM a_dc_electricity WHERE id='$id'");
    return $hasil;
  }

  public function hapus_data_power($id){
    $hasil=$this->db->query("DELETE FROM a_pwr_supply WHERE id='$id'");
    return $hasil;
  }

  public function hapus_data_alarm($id){
    $hasil=$this->db->query("DELETE FROM a_monitoring_sistem WHERE id='$id'");
    return $hasil;
  }

  public function hapus_data_odf($id){
    $hasil=$this->db->query("DELETE FROM a_odf WHERE id='$id'");
    return $hasil;
  }

  public function get_building_by_id($id){
    $this->db->select('a_build_infs.*, rackpops.aset_id');
    $this->db->from('a_build_infs');
    $this->db->join('rackpops', 'rackpops.id = a_build_infs.no_rack');
    $this->db->where('a_build_infs.id', $id);

    $hasil = $this->db->get();

    return $hasil->row();
  }

  public function update_building($where, $data){
    $this->db->update('a_build_infs', $data, $where);
    return $this->db->affected_rows();
  }

  public function get_ac_by_id($id){
    $this->db->from('a_ac_electricity');
    $this->db->where('id', $id);

    $hasil = $this->db->get();

    return $hasil->row();
  }

  public function update_ac($where, $data){
    $this->db->update('a_ac_electricity', $data, $where);
    return $this->db->affected_rows();
  }
}