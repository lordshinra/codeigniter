<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masterjadwal extends CI_Controller {

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

		$this->db->select("id_jadwal,nama_guru,nama_mapel,nama_kelas,hari,keterangan,tahun_ajaran,guru.id_guru AS id_guru,mapel.id_mapel AS id_mapel,kelas.id_kelas AS id_kelas,waktu_ajar.id_waktu AS id_waktu");
		$this->db->from("jadwal");
		$this->db->join("guru","guru.id_guru = jadwal.id_guru");
		$this->db->join("mapel","mapel.id_mapel = jadwal.id_mapel");
		$this->db->join("kelas","kelas.id_kelas = jadwal.id_kelas");
		$this->db->join("waktu_ajar","waktu_ajar.id_waktu= jadwal.id_waktu");
		$this->db->order_by("tahun_ajaran","DESC");
		$jadwal = $this->db->get()->result_array();
	    $data = array(
	        "contents" => "jadwal_guru",
			"data_jadwal" => $jadwal,
			"jadwal" => $this->master_model->GetUser('jadwal'),
			"guru" => $this->master_model->GetUser('guru'),
			"kelas" => $this->master_model->GetUser('kelas'),
			"mapel" => $this->master_model->GetUser('mapel'),
			"waktu" => $this->master_model->GetUser('waktu_ajar'),
			//"modal" => $this->load->view("inputkelas")
	    );
	    $this->load->view("dashboard",$data);
        }
    }

		public function insert_jadwal(){
	    	$id_jadwal = $_POST['id_jadwal'];
	    	$tahun_ajaran = $_POST['thn_ajaran'];
        $guru = $_POST['guru'];
        $mapel = $_POST['mapel'];
        $kelas = $_POST['kelas'];
				$waktu = $_POST['waktu'];
				$hari = $_POST['hari'];
        $data_insert = array(
            'id_jadwal' => '',
            'tahun_ajaran' => $tahun_ajaran,
            'id_guru' => $guru,
            'id_mapel' => $mapel,
            'id_kelas' => $kelas,
						'id_waktu' => $waktu,
            'hari' => $hari,
        );
        $where = array('id_jadwal' => $id_jadwal);
        $CekData = $this->master_model->CekData('jadwal', $where);
        if($CekData == 0){
            $InsData = $this->master_model->InsertData('jadwal',$data_insert);
            if($InsData >= 1){
                $pesan = "<div class='alert alert-success' role='alert'>Insert data sukses !</div>";
                $this->session->set_flashdata('pesan', $pesan);
                redirect("masterjadwal");
            } else {
                $pesan = "<div class='alert alert-danger' role='alert'>Insert data gagal !</div>";
                $this->session->set_flashdata('pesan', $pesan);
            }
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Duplikasi Data, Gagal di Simpan !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("masterjadwal");
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

		public function delete_jadwal($id_user){
        $del = array('id_jadwal' => $id_user);
        $DelData = $this->master_model->DeleteData('jadwal',$del);
        if($DelData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Data Berhasil di Hapus !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("masterjadwal");
        }
    }
}
