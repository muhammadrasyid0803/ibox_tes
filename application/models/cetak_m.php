<?php
class Cetak_m extends CI_Model{


    public function cetak($id){

        $this->db->where('id', $id);
		$data = $this->db->get('jobs');
		$output = '<table width="100%" cellspacing="5" cellpadding="5">';
		foreach($data->result() as $row)
		{
			$output .= '
			<tr>
				
				<td>
					<p><b>Job Number : </b>'.$row->job_number.'</p>
					<p><b>Job Kategori : </b>'.$row->category.'</p>
					<p><b>Job SubKategori : </b>'.$row->subcategory.'</p>
					<p><b>Job Description : </b>'.$row->description.'</p>
                    <p><b>Lattitude : </b> '.$row->lat.' </p>
                    <p><b>Longitude : </b> '.$row->lng.' </p>
                    <p><b>Saverity : </b> '.$row->severity.' </p>
                    <p><b>Priority : </b> '.$row->priority.' </p>
                    <p><b>Date : </b> '.$row->date.' </p>
                    <p><b>Impact (Berdampak) : </b> '.$row->impact.' </p>
				</td>
			</tr>
			';
		}
		$output .= '
		';
		$output .= '</table>';
		return $output;
    } 


}