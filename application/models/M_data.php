<?php
class M_data extends CI_Model{
	function get_data($table){				// fungsi untuk mengambil data dari database
		return $this->db->get($table);
	}
	function insert_data($data,$table){		// fungsi untuk menginput data ke database
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){		// fungsi untuk mengedit data
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){	// fungsi untuk mengupdate data di database
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function delete_data($where,$table){			// fungsi untuk menghapus data dari database
		$this->db->delete($table,$where);
	}
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}
?>