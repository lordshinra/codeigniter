<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
				"contents" => "konten"
			);
			$this->load->view("dashboard",$data);
        }
    }

	public function logout(){
        // menghapus session dan mengembalikan ke login_form
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
