<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masterisikelas extends CI_Controller {

	public function __construct(){
            parent::__construct();
            $this->load->library('encrypt');
            $this->load->model('master_model');
	        $this->load->database();
    }

	public function index(){
		if($this->session->userdata('isLogin') == FALSE){
	    	redirect('login');
	    } else {
		$this->db->select("siswa.id AS id_siswa, nama_siswa, kelas.id AS id_kelas, nama_kelas, isikelas.id AS id_isikelas");
		$this->db->from("siswa");
		$this->db->join("isikelas","siswa.id = isikelas.id_siswa");
		$this->db->join("kelas","kelas.id = isikelas.id_kelas");
		$this->db->where("id_kelas",'1');
		$jadwal = $this->db->get()->result_array();
	    $data = array(
	        "contents" => "dataisikelas",
			"siswa" => $this->master_model->GetUser('siswa','nama_siswa'),
			"kelas" => $this->master_model->GetUser('kelas'),
			"isikelas" => $jadwal
	    );
	    $this->load->view("dashboard",$data);
        }
    }

	public function load_siswa()
    {
		$id=$_POST['id'];
		$this->db->select("siswa.id as id_siswa, nama_siswa");
		$this->db->from("siswa");
		$this->db->join("isikelas","siswa.id = isikelas.id_siswa");
		$this->db->where("id_kelas",$id);
		//$this->db->order_by("tahun_ajaran","DESC");
		$isikelas = $this->db->get()->result_array();

		foreach ($isikelas as $key => $value) {
			echo "<option value=".$value['id_siswa'].">". $value['nama_siswa']."</option>";
		}
    }

	public function insert_isikelas(){
        $kelas = $_POST['kelas'];
		$isikelas = $_POST['isikelas'];
		foreach($isikelas as $isi){
        $data_insert = array(
            'id' => '',
            'id_kelas' => $kelas,
			'id_siswa' => $isi
        );
            $InsData = $this->master_model->InsertData('isikelas',$data_insert);
		}
		redirect("masterisikelas");
    }

    public function update_kelas(){
        $id_kelas = array('id_kelas' => $_POST['mid']);
        $kelas = $_POST['mkelas'];
        $data_update = array(
            'nama_kelas' => $kelas,
        );
        $CekData = $this->master_model->CekData('kelas', $data_update);
        if($CekData == 0){
            $UpdData = $this->master_model->UpdateData('kelas', $data_update, $id_kelas);
            if($UpdData >= 1){
                $pesan = "<div class='alert alert-success' role='alert'>Update data sukses !</div>";
                $this->session->set_flashdata('pesan', $pesan);
                redirect("masterkelas");
            } else {
                $pesan = "<div class='alert alert-danger' role='alert'>Update data gagal !</div>";
                $this->session->set_flashdata('pesan', $pesan);
            }
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Duplikasi Data, Gagal di Simpan !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("masterkelas");
        }
    }

    public function delete_kelas($id_kelas){
        $del = array('id_kelas' => $id_kelas);
        $DelData = $this->master_model->DeleteData('kelas',$del);
        if($DelData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Data Berhasil di Hapus !</div>";
            $this->session->set_flashdata('pesan', 'Delete data sukses !');
            redirect("masterkelas");
        }
    }
}
