<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntrl_tugas extends CI_Controller {

	public function index($value='home')
	{
		// $this->load->view('main/header');
		// $this->load->view('main/footer');
		$this->load->view('pages/'.$value);
	}
	 public function komen()
	{
		# code...
		$data['komen']=$this->input->post('message');
		$this->load->view('pages/home', $data,);
	}


}

/* End of file cntrl.tugas.php */
/* Location: ./application/controllers/cntrl.tugas.php */
?>