<?php

class M_pagination extends CI_Model {

	// Model users
	function ambildata($perPage, $uri, $searched) {
		$this->db->select('*');
		$this->db->from('song');
		if (!empty($searched)) {
			$this->db->like('title', $searched);
		}
		$this->db->order_by('title','asc');
		$getData = $this->db->get('', $perPage, $uri);

		if ($getData->num_rows() > 0)
			return $getData->result_array();
		else
			return null;
	}

}

?>