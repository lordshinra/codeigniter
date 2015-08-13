<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetUser($where=""){
		$data = $this->db->query('select * from user '.$where);
		return $data->result_array();
	}

	public function GetKategori($where=""){
		$data = $this->db->query('select * from kategori '.$where);
		return $data;
	}
	
	public function GetKonten($where=""){
		$data = $this->db->query('select * from konten '.$where);
		return $data;
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
