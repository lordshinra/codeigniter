<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct(){
            parent::__construct();
            $this->load->library('encrypt');
            $this->load->model('master_model');
    }

	public function index(){
		if($this->session->userdata('isLogin') == FALSE){
	    	redirect('login');
	    } else {
	    	$user = $this->session->userdata('username');
	    	$datauser = $this->m_login->dataUser($user);
	    	$level = $datauser->level;
	    	$email = $datauser->email;
	        $data = array(
	        		"level" => $this->session->set_userdata('level',$level),
	        		"email" => $this->session->set_userdata('email',$email)
	        	);      	
			$data = array(
				"contents" => "konten",
				"sidebar" => $this->sidebar(),
			);
			$this->load->view("home",$data);
        }
    }

	public function Menu($type){
		$dataguru = $this->master_model->GetUser('guru');
		$datasiswa = $this->master_model->GetUser('siswa');
        $datakelas = $this->master_model->GetUser('kelas');
        $datamapel = $this->master_model->GetUser('mapel');
        $waktu_ajar = $this->master_model->GetUser('waktu_ajar');
		$jadwal_guru = $this->master_model->GetUser('waktu_ajar');
		
	    $admin = array(
	        'guru'=> 'dataguru',
	        'siswa'=> 'datasiswa',
            'kelas' => 'datakelas',
            'mapel' => 'datamapel',
            'waktu_ajar' => 'waktu_ajar',
			'jadwal_guru' => 'jadwal_guru',
	    );
		
	    $menu = $admin[$type];

	    $content = array();
		if($type == 'guru'){
            $content['data'] = $dataguru;
            $content['modal'] = $this->load->view("inputguru",array(),true);
        } elseif ($type == 'siswa') {
            $content['data'] = $datasiswa;
            $content['modal'] = $this->load->view("inputsiswa",array(),true);
        } elseif ($type == 'kelas') {
            $content['data'] = $datakelas;
        } elseif ($type == 'mapel') {
            $content['data'] = $datamapel;
        } elseif ($type == 'waktu_ajar') {
            $content['data'] = $waktu_ajar;
        } elseif ($type == 'jadwal_guru') {
            $content['data'] = $jadwal_guru;
			$content['guru'] = $dataguru;
			$content['mapel'] = $datamapel;
			$content['kelas'] = $datakelas;
        }

	    $data = array(
	        "contents" => $this->load->view($menu,$content,true),
	        "sidebar" => $this->sidebar(),
	    );
	    $this->load->view("home",$data);      
	}

	public function Sidebar(){
	    $data = array();
		return $this->load->view("sidebar",array(),true);     
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
	 		redirect("project/Menu/guru");
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
            redirect("project/Menu/guru");
        }
    }

    public function delete_guru($id_user){
        $del = array('id_guru' => $id_user);
        $DelData = $this->master_model->DeleteData('guru',$del);
        if($DelData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Data Berhasil di Hapus !</div>";
            $this->session->set_flashdata('pesan', 'Delete data sukses !');
            redirect("project/Menu/guru");
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
            redirect("project/Menu/siswa");
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
            redirect("project/Menu/siswa");
        }
    }  

    public function delete_siswa($id_user){
        $del = array('id_siswa' => $id_user);
        $DelData = $this->master_model->DeleteData('siswa',$del);
        if($DelData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Data Berhasil di Hapus !</div>";
            $this->session->set_flashdata('pesan', 'Delete data sukses !');
            redirect("project/Menu/siswa");
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
                redirect("project/Menu/kelas");
            } else {
                $pesan = "<div class='alert alert-danger' role='alert'>Insert data gagal !</div>";
                $this->session->set_flashdata('pesan', $pesan);
            }
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Duplikasi Data, Gagal di Simpan !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("project/Menu/kelas");
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
                redirect("project/Menu/kelas");
            } else {
                $pesan = "<div class='alert alert-danger' role='alert'>Update data gagal !</div>";
                $this->session->set_flashdata('pesan', $pesan);
            }
        } else {
            $pesan = "<div class='alert alert-danger' role='alert'>Duplikasi Data, Gagal di Simpan !</div>";
            $this->session->set_flashdata('pesan', $pesan);
            redirect("project/Menu/kelas");
        }
    }

    public function delete_kelas($id_kelas){
        $del = array('id_kelas' => $id_kelas);
        $DelData = $this->master_model->DeleteData('kelas',$del);
        if($DelData >= 1){
            $pesan = "<div class='alert alert-success' role='alert'>Data Berhasil di Hapus !</div>";
            $this->session->set_flashdata('pesan', 'Delete data sukses !');
            redirect("project/Menu/kelas");
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
    
    public function insert_jadwal(){
    	$id_jadwal = $_POST['id_jadwal'];
    	$tahun_ajaran = $_POST['thn_ajaran'];
        $guru = $_POST['guru'];
        $mapel = $_POST['mapel'];
        $kelas = $_POST['kelas'];
        $data_insert = array(
            'id_jadwal' => '',
            'tahun_ajaran' => $tahun_ajaran,
            'id_guru' => $guru,
            'id_mapel' => $mapel,
            'id_kelas' => $kelas,
            'hari' => $hari,
        );
        $where = array('id_jadwal' => $id_jadwal);
        $CekData = $this->master_model->CekData('jadwal', $where);
        if($CekData == 0){
            $InsData = $this->master_model->InsertData('jadwal',$data_insert);
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
