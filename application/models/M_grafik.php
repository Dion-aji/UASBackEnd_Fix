<?php
class M_grafik extends CI_Model{
	function get_data_popular(){
        $query = $this->db->query("SELECT bulan,SUM(total_pendapatan) AS total_pendapatan FROM tb_pendapatan GROUP BY bulan");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
            $hasil[] = $data;
            }
            return $hasil;
        }
    }

}
