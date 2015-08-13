<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {
	public function ambilUser($username, $password){
		//$data = $this->db->query('select * from user where username = '.$username.' and password = '.$password.' and email = '.$email);
		//return $data->num_rows();
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->num_rows();
	}

	public function dataUser($username){
		$data = $this->db->query("select * from user where username = '$username'");
		return $data->row();
	}

	public function CekRegister($username, $email){
		//$data = $this->db->query('select * from user where username = '.$username.' and email = '.$email);
		//return $data->num_rows();
		$this->db->select('*');
        $this->db->from('user');
        $this->db->or_where('username', $username);
        $this->db->or_where('email', $email);
        $query = $this->db->get();
        return $query->num_rows();
	}

	public function Register($tableName,$data){
		$Register = $this->db->insert($tableName,$data);
		return $Register;
	}

}
