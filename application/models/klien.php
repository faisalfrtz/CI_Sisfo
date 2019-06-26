<?php
require_once(APPPATH.'models\user.php');

class Klien extends User {

	public function saveKlien($nama,$alamat,$notelp,$email,$password,$line,$umur,$jk,$level){
		$this->db->query('insert into klien(email, nama, jk, umur, alamat, notelp, line) VALUES ("'.$email.'","'.$nama.'","'.$jk.'","'.$umur.'","'.$alamat.'","'.$notelp.'","'.$line.'")');
		$this->db->query('insert into user (email, password, level) VALUES ("'.$email.'","'.$password.'","'.$level.'")');
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function getKlien($email){
		$data = $this->db->query('select email, nama, jk, umur, alamat, notelp, line from klien where email = "'.$email.'"');
		$klien = new klien();
		foreach($data->result_array() as $c){
			$klien->setEmail($c['email']);
			$klien->setNama($c['nama']);
			$klien->setJk($c['jk']);
			$klien->setUmur($c['umur']);
			$klien->setAlamat($c['alamat']);
			$klien->setNotelp($c['notelp']);
			$klien->setLine($c['line']);
		}
		return $klien;
	}

}

?>