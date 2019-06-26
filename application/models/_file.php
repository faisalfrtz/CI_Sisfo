<?php
	class _file extends CI_Model {
		public $tabel="file";
		public $id='file_id';
		private $file_id;
		private $file_nama;
		private $file_file;

		function getall(){
			$this->db->where('is_delete',false);
			return $this->db->get($this->tabel);
		}
		
		function getby($query,$limit=10,$start=0){
			$query['is_delete']=false;
			return $this->db->get_where($this->tabel,$query);
		}
		function get_all()
   		{
        	$query = $this->db->query('select * from file');
        	return $query->result();
        
   		}

		
		function insertnew($query){
			return $this->db->insert($this->tabel,$query);
		}

		function saveUpdate($file_file,$query){
			$this->db->where('file_id',$file_file);
			return $this->db->update($this->tabel,$query);
		}
		
		function delete($id){
			$this->db->where('file_id',$id);
			return $this->db->delete($this->tabel);
		}

		
		function deleteall(){
			$this->db->where('is_delete',true);
			return $this->db->delete($this->tabel);
		}
		
		function getrow(){
			$this->db->where('is_delete',false);
			return $this->db->get($this->tabel)->num_rows();
		}

		function getFilebyId($file_id){
			$query = $this->db->query('select * from file where file_id = "'.$file_id.'"');
        	return $query->result();
		}

		function setFile_id($file_id) {
			$this->file_id = $file_id;
		}

		function getFile_id() {
			return $this->file_id;
		}

		function setFile_nama($file_nama){
			$this->file_nama = $file_nama;
		}

		function getFile_nama(){
			return $this->file_nama;
		}

		function setFile_file($file_file){
			$this->file_file = $file_file;
		}

		function getFile_file(){
			return $this->file_file;
		}

		public function getDetailFile($file_id){
		$data = $this->db->query('select file_id,file_nama,file_file from file where file_id="'.$file_id.'"');
		$file = new _file();
		foreach($data->result_array() as $c){
				$file->setFile_id($c['file_id']);
				$file->setFile_nama($c['file_nama']);
				$file->setFile_file($c['file_file']);			
			}
		return $file;
	}
	}
?>			