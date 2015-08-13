<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masterkelas extends CI_Controller {

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

	    $data = array(
	        "contents" => "datakelas",
			"kelas" => $this->master_model->GetUser('kelas'),
			//"modal" => $this->load->view("inputkelas")
	    );
	    $this->load->view("dashboard",$data);
        }
    }

	public function insert_kelas(){
        $kelas = $_POST['kelas'];
        $data_insert = array(
            'id_kelas' => '',
            'nama_kelas' => $kelas,
        );
        $where = array('nama_kelas' => $kelas);
        $CekData = $this->master_model->CekData('kelas', $where);
        if($CekData == 0){
            $InsData = $this->master_model->InsertData('kelas',$data_insert);
            if($InsData >= 1){
                $pesan = "<div class='alert alert-success' role='alert'>Insert data sukses !</div>";
                $this->session->set_flashdata('pesan', $pesan);
                redirect("masterkelas");
            } else {
                $pesan = "<div class='alert alert-danger' role='alert'>Insert data gagal !</div>";
                $this->session->set_flashdata('pesan', $pesan);
            }
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Duplikasi Data, Gagal di Simpan !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("masterkelas");
        }
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
