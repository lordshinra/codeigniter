<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masterguru extends CI_Controller {

	public function __construct(){
            parent::__construct();
            $this->load->library('encrypt');
            $this->load->model('master_model');
            $this->load->library('Datatables');
	        $this->load->library('table');
	        $this->load->database();
    }

	public function index(){
		if($this->session->userdata('isLogin') == FALSE){
	    	redirect('login');
	    } else {

	    $data = array(
	        "contents" => "dataguru",
			"guru" => $this->master_model->GetUser('guru'),
			"modal" => "inputguru"
	    );
	    $this->load->view("dashboard",$data);
        }
    }

	public function inputsiswa(){
	    $data = array();
		return $this->load->view("inputsiswa",array(),true);
	}

	public function modal(){
	    $data = array();
		return $this->load->view("modal",array(),true);
	}

	public function logout(){
        // menghapus session dan mengembalikan ke login_form
        $this->session->sess_destroy();
        redirect('login/index');
    }

    public function insert_guru(){
    	$nip = $_POST['nip'];
    	$nama = $_POST['nama'];
    	$tgl_lahir = date("Y/m/d", strtotime($this->input->post('tgl_lahir')));
    	$jenkel = $_POST['jenkel'];
    	$alamat = $_POST['alamat'];
    	$agama = $_POST['agama'];
    	$pendidikan = $_POST['pendidikan'];
    	$telepon = $_POST['telepon'];

    	$data_insert = array(
    		'id_guru' => '',
    		'nip' => $nip,
    		'nama_guru' => $nama,
    		'tanggal_lahir' => $tgl_lahir,
    		'jenis_kelamin' => $jenkel,
    		'alamat' => $alamat,
    		'agama' => $agama,
    		'pendidikan' => $pendidikan,
    		'telepon' => $telepon
    	);
    	$InsData = $this->master_model->InsertData('guru',$data_insert);
    	if($InsData >= 1){
    		$pesan = "<div class='alert alert-success' role='alert'>Insert data sukses !</div>";
    		$this->session->set_flashdata('pesan', $pesan);
	 		redirect("masterguru");
	 	} else {
	 		$pesan = "<div class='alert alert-danger' role='alert'>Insert data gagal !</div>";
	 		$this->session->set_flashdata('pesan', $pesan);
	 	}
    }

    public function update_guru(){
        $id_user = array('id_guru' => $_POST['id_user']);
        $nip = $_POST['mnip'];
        $nama = $_POST['mnama'];
        $alamat = $_POST['malamat'];
        $tgl_lahir = date("Y/m/d", strtotime($this->input->post('mtgl_lahir')));
        $jenkel = $_POST['mjenkel'];
        $alamat = $_POST['malamat'];
        $agama = $_POST['magama'];
        $pendidikan = $_POST['mpendidikan'];
        $telepon = $_POST['mtelepon'];
        $data_update = array(
            'nip' => $nip,
            'nama_guru' => $nama,
            'tanggal_lahir' => $tgl_lahir,
            'jenis_kelamin' => $jenkel,
            'alamat' => $alamat,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'telepon' => $telepon
        );
        $UpdData = $this->master_model->UpdateData('guru', $data_update, $id_user);
        if($UpdData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Update data sukses !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("masterguru");
        }
    }

    public function delete_guru($id_user){
        $del = array('id_guru' => $id_user);
        $DelData = $this->master_model->DeleteData('guru',$del);
        if($DelData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Data Berhasil di Hapus !</div>";
            $this->session->set_flashdata('pesan', 'Delete data sukses !');
            redirect("masterguru");
        }
    }
}
