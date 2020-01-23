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

  public function tambah_building($data){
     $this->db->insert('pm_build_building', $data);   
    return $this->db->insert_id();
  }

  public function tambah_rack($data){
    $this->db->insert('pm_build_rack',$data);
    return $this->db->insert_id();
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

  public function tambah_data_dcpbd($data){
    $this->db->insert('pm_dc_data_dcpdb',$data);
    return $this->insert_id();
  }


  public function tambah_lain_lain_dc($data){
    $this->db->insert('pm_dc_dcpdb_lain', $data);
    return $this->db->insert_id();
  }

  public function tambah_temuan_dcpdb($data){
    $this->db->insert('pm_dc_dcpdb_temuan', $data);
    return $this->db->insert_id();
  }

  public function tambah_foto_single_dcpdb($data){
    $this->db->insert('pm_dc_dcpdb_foto_single', $data);
    return $this->db->insert_id();
  }


  public function tambah_dokumentasi_dcpdb($data){
    $this->db->insert('pm_dc_dcpdb_dokumentasi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_rectifier($data){
     $this->db->insert('pm_dcpbd_rectifier_data', $data);   
    return $this->db->insert_id();
  }

  public function tambah_rectifier_lain_lain($data){
    $this->db->insert('pm_dcpbd_rectifier_lain', $data);   
    return $this->db->insert_id();
  }

  public function tambah_rectifier_temuan($data){
    $this->db->insert('pm_dcpbd_rectifier_temuan', $data);   
    return $this->db->insert_id();
  }

  public function tambah_rectifier_foto_single($data){
    $this->db->insert('pm_dcpbd_rectifier_foto_single', $data);   
    return $this->db->insert_id();
  }

  public function tambah_rectifier_dokumentasi($data){
    $this->db->insert('pm_dcpbd_rectifier_dokumentasi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_battery($data){
    $this->db->insert('pm_dcpdb_baterai_data', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_battery_lain($data){
    $this->db->insert('pm_dcpdb_baterai_lain_lain', $data);   
    return $this->db->insert_id();
  }

   public function tambah_data_battery_temuan($data){
    $this->db->insert('pm_dcpdb_baterai_temuan', $data);   
    return $this->db->insert_id();
  }

   public function tambah_data_battery_dokumentasi($data){
    $this->db->insert('pm_dcpdb_baterai_dokumentasi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_fisik_genset($data){
     $this->db->insert('pm_ps_genset_data_fisik', $data);   
    return $this->db->insert_id();
  }


  public function tambah_data_genset_inspeksi($data){
     $this->db->insert('pm_ps_genset_inspeksi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_beban_nol($data){
     $this->db->insert('pm_ps_genset_kondisi_nol', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_beban_penuh($data){
     $this->db->insert('pm_ps_genset_kondisi_penuh', $data);   
    return $this->db->insert_id();
  }


  public function tambah_genset_lain_lain($data){
      $this->db->insert('pm_ps_genset_lain_lain', $data);   
    return $this->db->insert_id();
  }


  public function tambah_genset_temuan($data){
      $this->db->insert('pm_ps_genset_temuan', $data);   
    return $this->db->insert_id();
  }


  public function tambah_genset_dokumentasi($data){
      $this->db->insert('pm_ps_genset_dokumentasi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ats_foto_single($data){
      $this->db->insert('pm_ps_ats_foto_single', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_ats_ats($data){
     $this->db->insert('pm_ps_ats_ats', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_ats_inspeksi($data){
      $this->db->insert('pm_ps_ats_inspeksi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ats_panel_sebelum_pm($data){
     $this->db->insert('pm_ps_ats_status_sebelum_pm', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ats_panel_sesudah_pm($data){
     $this->db->insert('pm_ps_ats_status_sesudah_pm', $data);   
    return $this->db->insert_id();
  }


  public function tambah_ats_kontrol_before($data){
       $this->db->insert('pm_ps_ats_panel_kontrol_before', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ats_kontrol_after($data){
     $this->db->insert('pm_ps_ats_panel_kontrol_after', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ats_lain_lain($data){
     $this->db->insert('pm_ps_ats_lain_lain', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ats_temuan($data){
      $this->db->insert('pm_ps_ats_temuan', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ats_dokumentasi($data){
     $this->db->insert('pm_ps_ats_dokumentasi', $data);   
    return $this->db->insert_id();
  }


  public function tambah_data_inverter($data){
      $this->db->insert('pm_ps_inverter_data', $data);   
    return $this->db->insert_id();
  }

  public function tambah_inverter_lain_lain($data){
      $this->db->insert('pm_ps_inverter_lain_lain', $data);   
    return $this->db->insert_id();
  }


  public function tambah_inverter_temuan($data){
      $this->db->insert('pm_ps_inverter_temuan', $data);   
    return $this->db->insert_id();
  }


  public function tambah_inverter_dokumentasi($data){
      $this->db->insert('pm_ps_inverter_dokumentasi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_ups($data){
     $this->db->insert('pm_ps_ups_data', $data);   
    return $this->db->insert_id();
  }


  public function tambah_ups_lain_lain($data){
       $this->db->insert('pm_ps_ups_lain_lain', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ups_temuan($data){
     $this->db->insert('pm_ps_ups_temuan', $data);   
    return $this->db->insert_id();
  }

  public function tambah_ups_dokumentasi($data){
     $this->db->insert('pm_ps_ups_dokumentasi', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_environment($data){
     $this->db->insert('pm_eksternal_env_data', $data);   
    return $this->db->insert_id();
  }

  public function tambah_data_eksternal_alarm($data){
     $this->db->insert('pm_eksternal_env_eksternal_alarm', $data);   
    return $this->db->insert_id();
  }

  public function tambah_env_dokumentasi($data){
      $this->db->insert('pm_eksternal_env_dokumentasi', $data);   
    return $this->db->insert_id();
  }

   public function tambah_data_odf($data){
    $this->db->insert('pm_odf_data_odf', $data);   
    return $this->db->insert_id();
  }
  public function tambah_inputan_lain($data){
    $this->db->insert('pm_odf_inputan_lain', $data);   
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