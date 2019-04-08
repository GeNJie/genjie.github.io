<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Resto Application';
		$this->load->view('templates/navbar.php', $data);
		$this->load->view('templates/welcome.php');
		$this->load->view('templates/footer.php');
	}

	public function about()
	{
		$data['title'] = 'Tentang kami';
		$this->load->view('templates/navbar.php', $data);
		$this->load->view('templates/footer.php');
	}
}
