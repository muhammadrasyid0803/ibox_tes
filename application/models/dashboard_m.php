<?php
class Dashboard_m extends CI_Model{
  function get_job_stts_selesai(){
        $query = $this->db->query("SELECT COUNT(status) as selesai FROM jobs WHERE status = 'selesai'");
        return $query->row()->selesai;
  }

  function get_job_stts_belum(){
        $query = $this->db->query("SELECT COUNT(status) as belum FROM jobs WHERE status = 'belum'");
        return $query->row()->belum;
  }

  function get_job_stts_on_progress(){
        $query = $this->db->query("SELECT COUNT(status) as on_progress FROM jobs WHERE status = 'on progress'");
        return $query->row()->on_progress;
  }

   public function list_schedule(){
        $this->db->from('schedule');
        return $this->db->get();
    }
}