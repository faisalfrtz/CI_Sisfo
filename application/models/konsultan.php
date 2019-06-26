<?php
require_once(APPPATH.'models\user.php');

class Konsultan extends User {

	public function saveKonsultan($nama,$alamat,$notelp,$email,$password,$line,$umur,$jk,$level){
		$this->db->query('insert into konsultan(email, nama, jk, umur, alamat, notelp, line) VALUES ("'.$email.'","'.$nama.'","'.$jk.'","'.$umur.'","'.$alamat.'","'.$notelp.'","'.$line.'")');
		$this->db->query('insert into user (email, password, level) VALUES ("'.$email.'","'.$password.'","'.$level.'")');
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function getKonsultan($email){
		$data = $this->db->query('select email, nama, jk, umur, alamat, notelp, line from konsultan where email = "'.$email.'"');
		$konsultan = new konsultan();
		foreach($data->result_array() as $c){
			$konsultan->setEmail($c['email']);
			$konsultan->setNama($c['nama']);
			$konsultan->setJk($c['jk']);
			$konsultan->setUmur($c['umur']);
			$konsultan->setAlamat($c['alamat']);
			$konsultan->setNotelp($c['notelp']);
			$konsultan->setLine($c['line']);
		}
		return $konsultan;
	}

	public function getKonsultanById($uid){
		$data =  $this->db->query('select konsultan.email, nama, jk, umur, alamat, notelp, line from konsultan inner join user on user.email = konsultan.email where user.uid="'.$uid.'"');
		$konsultan = new konsultan();
		foreach($data->result_array() as $c){
			$konsultan->setEmail($c['email']);
			$konsultan->setNama($c['nama']);
			$konsultan->setJk($c['jk']);
			$konsultan->setUmur($c['umur']);
			$konsultan->setAlamat($c['alamat']);
			$konsultan->setNotelp($c['notelp']);
			$konsultan->setLine($c['line']);
		}
		return $konsultan;
	}


}

?>