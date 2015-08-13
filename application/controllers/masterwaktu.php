<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masterwaktu extends CI_Controller {

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
	        "contents" => "waktu_ajar",
			"waktu" => $this->master_model->GetUser('waktu_ajar'),
			"modal" => "inputwaktu"
	    );
	    $this->load->view("dashboard",$data);
        }
    }

    public function insert_waktu(){
        $keterangan = $_POST['keterangan'];
        $waktu_mulai = $_POST['mulai'];
        $waktu_selesai = $_POST['selesai'];
        $data_insert = array(
            'id_waktu' => '',
            'keterangan' => $keterangan,
            'mulai' => $waktu_mulai,
            'selesai' => $waktu_selesai,
        );
        $where = array('keterangan' => $keterangan);
        $CekData = $this->master_model->CekData('waktu_ajar', $where);
        if($CekData == 0){
            $InsData = $this->master_model->InsertData('waktu_ajar',$data_insert);
            if($InsData >= 1){
                $pesan = "<div class='alert alert-success' role='alert'>Insert data sukses !</div>";
                $this->session->set_flashdata('pesan', $pesan);
                redirect("project/Menu/waktu_ajar");
            } else {
                $pesan = "<div class='alert alert-danger' role='alert'>Insert data gagal !</div>";
                $this->session->set_flashdata('pesan', $pesan);
            }
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Duplikasi Data, Gagal di Simpan !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("project/Menu/waktu_ajar");
        }
    }
}
