<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page_title']= 'Raffle System';
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}
}
