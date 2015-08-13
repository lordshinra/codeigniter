<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mastermapel extends CI_Controller {

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
	        "contents" => "datamapel",
			"mapel" => $this->master_model->GetUser('mapel'),
			//"modal" => $this->load->view("inputkelas")
	    );
	    $this->load->view("dashboard",$data);
        }
    }

	public function insert_mapel(){
        $mapel = $_POST['mapel'];
        $data_insert = array(
            'id_mapel' => '',
            'nama_mapel' => $mapel,
        );
        $where = array('nama_mapel' => $mapel);
        $CekData = $this->master_model->CekData('mapel', $where);
        if($CekData == 0){
            $InsData = $this->master_model->InsertData('mapel',$data_insert);
            if($InsData >= 1){
                $pesan = "<div class='alert alert-success' role='alert'>Insert data sukses !</div>";
                $this->session->set_flashdata('pesan', $pesan);
                redirect("project/Menu/mapel");
            } else {
                $pesan = "<div class='alert alert-danger' role='alert'>Insert data gagal !</div>";
                $this->session->set_flashdata('pesan', $pesan);
            }
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Duplikasi Data, Gagal di Simpan !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("project/Menu/mapel");
        }
    }

    public function update_mapel(){
        $id_mapel = array('id_mapel' => $_POST['mid']);
        $mapel = $_POST['mmapel'];
        $data_update = array(
            'nama_mapel' => $mapel,
        );
        $CekData = $this->master_model->CekData('mapel', $data_update);
        if($CekData == 0){
            $UpdData = $this->master_model->UpdateData('mapel', $data_update, $id_mapel);
            if($UpdData >= 1){
                $pesan = "<div class='alert alert-success' role='alert'>Update data sukses !</div>";
                $this->session->set_flashdata('pesan', $pesan);
                redirect("project/Menu/mapel");
            } else {
                $pesan = "<div class='alert alert-danger' role='alert'>Update data gagal !</div>";
                $this->session->set_flashdata('pesan', $pesan);
            }
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Duplikasi Data, Gagal di Simpan !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("project/Menu/mapel");
        }
    }

    public function delete_mapel($id_mapel){
        $del = array('id_mapel' => $id_mapel);
        $DelData = $this->master_model->DeleteData('mapel',$del);
        if($DelData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Data Berhasil di Hapus !</div>";
            $this->session->set_flashdata('pesan', 'Delete data sukses !');
            redirect("project/Menu/mapel");
        }
    }
}
