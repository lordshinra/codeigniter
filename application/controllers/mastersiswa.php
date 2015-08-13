<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mastersiswa extends CI_Controller {

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
	        "contents" => "datasiswa",
			"siswa" => $this->master_model->GetUser('siswa'),
			"modal" => "inputsiswa"
	    );
	    $this->load->view("dashboard",$data);
        }
    }

    public function insert_siswa(){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $tgl_lahir = date("Y/m/d", strtotime($this->input->post('tgl_lahir')));
        $jenkel = $_POST['jenkel'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $wali = $_POST['wali'];
        $telepon = $_POST['telepon'];

        $data_insert = array(
            'id_siswa' => '',
            'nis' => $nis,
            'nama_siswa' => $nama,
            'tanggal_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenkel,
            'alamat' => $alamat,
            'agama' => $agama,
            'nama_wali' => $wali,
            'telepon' => $telepon
        );
        $InsData = $this->master_model->InsertData('siswa',$data_insert);
        if($InsData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Insert data sukses !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("mastersiswa");
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Insert data gagal !</div>";
            $this->session->set_flashdata('pesan', $pesan);
        }
    }

    public function update_siswa(){
        $id_user = array('id_siswa' => $_POST['id_user']);
        $nis = $_POST['mnis'];
        $nama = $_POST['mnama'];
        $alamat = $_POST['malamat'];
        $tgl_lahir = date("Y/m/d", strtotime($this->input->post('mtgl_lahir')));
        $jenkel = $_POST['mjenkel'];
        $alamat = $_POST['malamat'];
        $agama = $_POST['magama'];
        $wali = $_POST['mwali'];
        $telepon = $_POST['mtelepon'];
        $data_update = array(
            'nis' => $nis,
            'nama_siswa' => $nama,
            'tanggal_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenkel,
            'alamat' => $alamat,
            'agama' => $agama,
            'nama_wali' => $wali,
            'telepon' => $telepon
        );
        $UpdData = $this->master_model->UpdateData('siswa', $data_update, $id_user);
        if($UpdData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Update data sukses !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("mastersiswa");
        }
    }

    public function delete_siswa($id_user){
        $del = array('id_siswa' => $id_user);
        $DelData = $this->master_model->DeleteData('siswa',$del);
        if($DelData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Data Berhasil di Hapus !</div>";
            $this->session->set_flashdata('pesan', 'Delete data sukses !');
            redirect("mastersiswa");
        }
    }
}
