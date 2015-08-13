<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model {
	public function GetUser($table){
		$this->db->select('*');
        $data = $this->db->get_where($table);      
		return $data->result_array();
	}
	public function CekData($table,$where){
		$this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $data = $this->db->get();
		return $data->num_rows();
	}

	public function InsertData($tableName,$data){
		$InsData = $this->db->insert($tableName,$data);
		return $InsData;
	}

	public function UpdateData($tableName,$data,$where){
		$UpdData = $this->db->update($tableName,$data,$where);
		return $UpdData;
	}

	public function DeleteData($tableName,$where){
		$DelData = $this->db->delete($tableName,$where);
		return $DelData;
	}
}
