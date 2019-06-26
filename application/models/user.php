<?php

class User extends CI_Model {
	private $nama;
	private $alamat;
	private $notelp;
	private $email;
	private $password;
	private $line;
	private $umur;
	private $jk;
	private $level;
	private $uid;


	function getNama(){
		return $this->nama;
	}

	function setNama($nama){
		$this->nama = $nama;
	}

	function getAlamat(){
		return $this->alamat;
	}

	function setAlamat($alamat){
		$this->alamat = $alamat;
	}

	function getNotelp(){
		return $this->notelp;
	}

	function setNotelp($notelp){
		$this->notelp = $notelp;
	}

	function getEmail(){
		return $this->email;
	}

	function setEmail($email){
		$this->email = $email;
	}
	function getPass(){
		return $this->password;
	}

	function setPass($password){
		$this->password = $password;
	}
	function getLine(){
		return $this->line;
	}

	function setLine($line){
		$this->line = $line;
	}
	function getJk(){
		return $this->jk;
	}

	function setJk($jk){
		$this->jk = $jk;
	}

	function getUmur(){
		return $this->umur;
	}

	function setUmur($umur){
		$this->umur = $umur;
	}

	function getLevel(){
		return $this->level;
	}

	function setLevel($level){
		$this->level = $level;
	}

	function getUid(){
		return $this->uid;
	}

	function setUid($uid){
		$this->uid = $uid;
	}

	function getLevelUser($email,$password){
		$data = $this->db->query('select level,uid from user where email="'.$email.'" and password = "'.$password.'"');
		return $data;
	}

	function getEmailbyUid($uid){
		$data = $this->db->query('select email from user where uid="'.$uid.'"');
		foreach ($data->result_array() as $c) {
			$data = $c['email'];
		}
		return $data;
	}

	function getJumlahUser($level){
		$data = $this->db->query('select count(uid) as jum from user where level="'.$level.'"');
		foreach($data->result_array() as $c){
			return $c['jum'];
		}
	}

	function getUserByEmail($email){
		$data = $this->db->query('select * from user where email = "'.$email.'"');
		return $data->result();
	}

	function updatePass($uid,$pass){
		$data = $this->db->query('update user set password="'.$pass.'" where uid="'.$uid.'"');
	}



}
?>