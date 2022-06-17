<?php  
class show_data_doctor extends CI_Model
{
	
	function getDataDoctor()
	{
		$query = $this->db->get('master_dokter');
		return $query->result();
	}

	function getDataPoli(){
		$queryPoli = $this->db->get('master_unit');
		return $queryPoli->result();
	}
}

?>