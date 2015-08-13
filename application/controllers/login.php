<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login extends CI_Controller {

    public function __construct(){
            parent::__construct();
            $this->load->library('encrypt');
    }

    public function index(){
    	$session = $this->session->userdata('isLogin');
            if($session == FALSE){
                $this->load->view("index");
            }else{
                redirect('dashboard');
            }
    }

	public function Ceklogin(){
		//memberi validasi pa da username dan password
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        //jika form yang di isi salah , akan kembali lagi ke form_login
        if($this->form_validation->run()==FALSE){
            $this->load->view('index');
        } else {
            $username = $_POST['username'];
            $password = SHA1($_POST['password']);
            $cek = $this->m_login->ambilUser($username, $password);
            if($cek !=  0){
                $this->session->set_userdata('isLogin', TRUE);
                $this->session->set_userdata('username',$username);
            redirect('dashboard');
            } else {
                $this->session->set_flashdata('pesan', 'Login gagal !');
                redirect("login");
            }
        }
	}

	public function Registrasi(){
		$email = $_POST['email'];
    	$username = $_POST['username'];
    	$password = SHA1($_POST['password']);
    	$data_insert = array(
    		'email' => $email,
    		'username' => $username,
    		'password' => $password,
    		'level' => '1'
    	);

    	$CekData = $this->m_login->CekRegister($username, $email);
    	if($CekData == 0){
    		$Register = $this->m_login->Register('user',$data_insert);
    		$this->session->set_flashdata('pesan', 'Registrasi sukses !');
    		redirect("login/hal_registrasi");
	 	} else {
	 		$this->session->set_flashdata('pesan', 'Registrasi gagal !');
	 		redirect("login/hal_registrasi");
	 	}
	}

    public function hal_registrasi(){
        $data = array();
        return $this->load->view("registrasi");
    }
}
