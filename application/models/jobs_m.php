<?php
class Jobs_m extends CI_Model{
      
      public function list_job($users_id){
        // $this->db->select('name');
        $this->db->from('jobs');
        $this->db->where('users_id', $users_id);
        $this->db->order_by('status', 'asc');
        $query = $this->db->get();
        // return $query->row()->name;

        // $this->db->order_by('status', 'asc');
        // $query = $this->db->get('jobs');
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