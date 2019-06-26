<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public $page = 'file';
	public function __construct(){
		parent::__construct();
		$this->load->model('_file');
	}

	public function index()
	{
		if ($this->session->userdata('statusLogin') == null){
			$this->session->set_userdata('statusLogin',0);
			$this->session->set_userdata('page','home');
			$user = new user();
			$user->setNama('Anonymous');
			$data['user'] = $user;
			$this->load->view('index.php',$data);
		}
		elseif ($this->session->userdata('statusLogin') == 1){
			$user = unserialize($this->session->userdata('obj'));
			$data['user'] = $user;
			if($this->session->userdata('level') == 1){
				$chatStatus = '2 klien Online, Chat';
				redirect('Home/homeHrd');
			}
			else {
				$chatStatus = 'Kami Sedang Online, Chat';
				redirect('Home/homeUser');
			}
		}
	}

	

	public function HomeHrd(){
		$user = unserialize($this->session->userdata('obj'));
		$this->session->set_userdata('page','home1');
		$data['user'] = $user;
		$file = $this->_file->get_all();
		$data['file_data'] = $file;
		$this->load->view('index.php',$data);
	}

	public function homeUser(){
		$user = unserialize($this->session->userdata('obj'));
		$this->session->set_userdata('page','home2');
		$data['user'] = $user;
		$file = $this->_file->get_all();
		$data['file_data'] = $file;
		$this->load->view('index.php',$data);
	}


	public function daftarKonsultan(){
		if ($this->session->userdata('statusLogin') == null){
			$this->session->set_userdata('statusLogin',0);
			$this->session->set_userdata('page','daftar_akun_konsultan');
			$this->load->view('index.php');
		}
		elseif ($this->session->userdata('statusLogin') == 1){
			redirect('Home/index');
		}
	}
}
