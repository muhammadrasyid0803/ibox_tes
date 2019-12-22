<?php
class Jobs_m extends CI_Model{
      
      public function list_job(){
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get('jobs');
        if($query->num_rows() > 0){
          return $query->result();
        }else{
          return false;
        }
      }

      public function detail_job(){
        $id = $this->input->get('id');
        $this->db->where('id', $id);
        $query = $this->db->get('jobs');
        if($query->num_rows() > 0){
          return $query->row();
        }else{
          return false;
        }
      }

      public function update_status_belum($id){
        $data = array(
          'status' => 'on progress', 
        );

        $this->db->where('id', $id);
        $this->db->update('jobs', $data);
      }

      public function update_status_on_progress($id){
        $data = array(
          'status' => 'selesai', 
        );

        $this->db->where('id', $id);
        $this->db->update('jobs', $data);
      }
}