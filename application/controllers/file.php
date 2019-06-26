<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class file extends CI_Controller {

	public $page = 'file';
	public function __construct(){
		parent::__construct();
		$this->load->model('_file');
		$this->load->helper('download');
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
	}
	/*public function index()
	{
		$data['value']=$this->_file->getall();
		if(($data['value']->num_rows()==0)and($this->session->userdata('role')=='admin')) echo "<script>document.location.href='".base_url('file/first')."'</script>";
		else{
		$data['title'] = ucfirst($this->page);
		$this->load->view('default/head_1',$data);
		$this->load->view('pages/file/v_'.$this->page,$data);
		$this->load->view('default/foot');
		}
	}*/

	function tampil(){
		redirect('Home/homehrd');
	}

	/*public function first()
	{
		if($this->session->userdata('role')!='admin')
		{	
			echo "<script>document.location.href='".base_url('notfound')."'</script>";
			return;
		}
		$data['title'] = ucfirst($this->page);
		$this->load->view('default/head_1',$data);
		$this->load->view('pages/file/e_'.$this->page,$data);
		$this->load->view('default/foot');	
	}*/
	public function addnew(){
		if(!empty($_FILES['file'])){
			$nama = $this->input->post('file').substr($_FILES['file']['name'], strlen($_FILES['file']['name']) - (substr($_FILES['file']['name'], -1) == 'x') ? 5 : 4);
			$data=array(
					'file_nama'=>$this->input->post('file'),
					'file_file'=>$nama
				);
			$config['upload_path'] = './uploads/file';
			$config['allowed_types'] = 'zip|xlsx|rar|docx';
			$config['file_name']= $nama;
			$config['max_size']='2048';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload("file")){
				if(!$this->_file->insertnew($data)){  
					echo "gagal insert";
				}
				else 
					if ($this->session->userdata("level")==1)
						redirect(base_url('file/tampil'),'refresh');
					else 
						redirect(base_url('Home/homeUser'),'refresh');
			}
			else {
				if ($this->session->userdata("level")==1)
					echo "
				<script>
					alert('".strip_tags($this->upload->display_errors())."');
					document.location.href='".base_url('Home/Homehrd')."';
				</script>";
				else 
					echo "
				<script>
					alert('".strip_tags($this->upload->display_errors())."');
					document.location.href='".base_url('Home/homeUser')."';
				</script>";
			}	

		}

	}
	public function delete($id){
		if ($this->_file->delete($id)){
			
			redirect(base_url('Home/Homehrd'));
		}
	}
	/*public function deleteperma(){
		$data=$this->_file->getby(array('is_delete'=>true));
		if($data->num_rows()>0){
			foreach ($data->result() as $m) {
				unlink('./uploads/file/'.$m->file_file);
			}
			$this->_file->deleteall();
		}
		redirect(base_url('file'));
	}*/
	/*public function showedit(){
		$id=$this->input->post('data');
		$data=$this->_file->getby(array('file_id'=>$id))->result_array();
		echo json_encode($data[0]);
	}*/
	public function saveedit($id){
		$datas=$this->_materi->getby(array('file_id'=>$id));
		$nama=$this->input->post('file').substr($_FILES['file']['name'], strlen($_FILES['file']['name'])-4);
		$data=array(
				'file_nama'=>$this->input->post('file')
			);
		if(!empty($_FILES['file']['name'])){
			$data['file_file']=$nama;
			$config['upload_path'] = './uploads/file';
			$config['allowed_types'] = 'zip|xlsx|rar|docx';
			$config['file_name']=$nama;
			$config['overwrite']=TRUE;
			$config['max_size']=102400;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload("file"))
			{
				if($this->_file->saveUpdate($id,$data))
					echo "<script>alert('Data berhasil di update');</script>";
				else echo "<script>alert('Terjadi kesalahan pada saat update')</script>";
			}else{
				echo "<script>alert('".strip_tags($this->upload->display_errors())."');
				document.location.href='".redirect('Home/Homehrd')."'
				</script>";
			}
		}else{
			if($this->_file->saveUpdate($id,$data))
				echo "<script>alert('Data berhasil di update');</script>";
			else echo "<script>alert('Terjadi kesalahan pada saat update')</script>";
		}
		echo "<script>document.location.href='".base_url('file')."'</script>";
	}

	public function download($id){
		$file = new _file();
		$file = $file->getDetailFile($id);
		$nama = $file->getFile_file();  
	    $data = file_get_contents('uploads/file/'.$nama);  
	    force_download($nama,$data);  	
	}

	/*function download() {
    $this->db->select('file_id, file_name, file_file');
    $this->db->from('file');
    $query = $this->db->get();
    return $query;
    }*/

}