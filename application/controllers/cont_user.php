<?php 

class Cont_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('_file');
	}

	public function viewDaftar(){
		$this->session->set_userdata('page','daftar_akun');
		$this->load->view('index.php');
	}

	public function viewChange(){
		$this->session->set_userdata('page','change_pass');
		$this->load->view('index.php');
	}

	public function viewChangePass($uid){

		$pass1 = $this->input->post('pass1');
		$pass2 = $this->input->post('pass2');
		if($pass1 != $pass2){
			echo "<script>alert('Password Tidak Sama');history.go(-1);</script>";
		}
		else{
			$user = new user();
			$user->updatePass($uid,md5($pass1));
			redirect('Home/index');
		}
	}

	/*public function change(){
		$password = md5($this->input->post('password'));

			$nama = $this->input->post('nama');
			$email= $this->input->post('email');
			$password = $this->input->post('password');

			$this->klien->change($nama,$email,$password,$this->klien->getNama());
			$this->klien->setAttr($this->klien->getKlien($this->klien->getNama()));
			$this->session->set_userdata($this->klien->getAttr());
			echo '<script type="text/javascript">alert("Password Berhasil Diubah ! ") 
			window.location = "'.base_url().'Home/index/" </script>';
	}*/

	public function daftar($level){
		$password = md5($this->input->post('password'));
		$password2 = md5($this->input->post('password2'));
		

		if ($password == $password2){
			if ($level == 1) {
				$konsultan = new konsultan();
				$konsultan->setNama($this->input->post('nama'));
				$konsultan->setAlamat($this->input->post('alamat'));
				$konsultan->setNotelp($this->input->post('notelp'));
				$konsultan->setEmail($this->input->post('email'));
				$konsultan->setPass($password);
				$konsultan->setLine($this->input->post('line'));
				$konsultan->setUmur($this->input->post('umur'));
				$konsultan->setJk($this->input->post('jk'));
				$uid = $konsultan->saveKonsultan($konsultan->getNama(),$konsultan->getAlamat(),$konsultan->getNotelp(),$konsultan->getEmail(),$konsultan->getPass(),$konsultan->getLine(),$konsultan->getUmur(),$konsultan->getJk(),$level);
				$konsultan->setUid($uid);
				$this->session->set_userdata('obj',serialize($konsultan));
				$this->session->set_userdata('statusLogin',1);
				$this->session->set_userdata('level',1);
				redirect('Home/index');
			}
			elseif ($level == 2){
				$klien = new klien();
				$klien->setNama($this->input->post('nama'));
				$klien->setAlamat($this->input->post('alamat'));
				$klien->setNotelp($this->input->post('notelp'));
				$klien->setEmail($this->input->post('email'));
				$klien->setPass($password);
				$klien->setLine($this->input->post('line'));
				$klien->setUmur($this->input->post('umur'));
				$klien->setJk($this->input->post('jk'));
				$uid = $klien->saveKlien($klien->getNama(),$klien->getAlamat(),$klien->getNotelp(),$klien->getEmail(),$klien->getPass(),$klien->getLine(),$klien->getUmur(),$klien->getJk(),$level);
				$klien->setUid($uid);
				$this->session->set_userdata('obj',serialize($klien));
				if ($this->session->userdata('page') == "daftar_akun"){
					$this->session->set_userdata('statusLogin',1);
					$this->session->set_userdata('level',2);
					redirect('Home/index');
				}
				elseif ($this->session->userdata('page') == "pesan_akun"){
					$data['user'] = $klien;
					$this->session->set_userdata('statusLogin',1);
					$this->session->set_userdata('page','pesan_req');
					$this->session->set_userdata('level',2);
					$this->load->view('index.php',$data);
					}
				}
		}
		else {
			echo "<script>alert('Password Tidak Sama');history.go(-1);</script>";;
		}

	}

	public function masuk(){
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$user = new user();
		$data = $user->getLevelUser($email,$password);
		foreach($data->result_array() as $c){
			$user->setLevel($c['level']);
			$user->setUid($c['uid']);
		}
		if ($user->getLevel() != null){
			if ($user->getLevel() == 1){
				$kl = new konsultan();
				$konsultan = $kl->getKonsultan($email);
				$konsultan->setUid($user->getUid());
				$this->session->set_userdata('obj',serialize($konsultan));
				$this->session->set_userdata('statusLogin',1);
				$this->session->set_userdata('level',$user->getLevel());
				redirect('Home/index');
			}
			elseif ($user->getLevel() == 2){
				$kl = new klien();
				$klien = $kl->getKlien($email);
				$klien->setUid($user->getUid());
				$this->session->set_userdata('obj',serialize($klien));
				$this->session->set_userdata('statusLogin',1);
				$this->session->set_userdata('level',$user->getLevel());
				redirect('Home/index');
			}
		}
		else {
			echo "<script>alert('Gagal login : Username/Password anda salah');history.go(-1);</script>"; ;
		}
	}

	public function keluar(){
		session_destroy();
		redirect('Home/index');
	}

	/*public function download($id){
		$file = new _file();
		$file = $file->getDetailFile($id);
		$name = $file->getFile_nama();  
	    $data = file_get_contents('uploads/file/'.$file->getFile_nama());  
	    force_download($name,$data);  	
	}*/

}
?>