<?php 
/**
* 
*/
class Raffle extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->database();
		$this->load->model('participant_model');
		$this->load->model('prize_model');
	}
	function index()
	{
		$data['page_title']= 'Raffle System';
		$data['participant_list'] = $this->participant_model->get_participant();
		$data['prize_list'] = $this->prize_model->get_prize();
		// $data['title'] = $data['news_item']['title'];

		$this->load->view('templates/header',$data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}
	function view()
	{
		$data['participant_list'] = $this->news_model->get_participant();
		// $data['title'] = $data['news_item']['title'];

		$this->load->view('templates/header');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}
	function add_participant()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->index();

		}
		else
		{
			$this->participant_model->create_participant();
			// $this->index();
			redirect('raffle/index');
		}
	}
	function add_prize()
	{
		$this->form_validation->set_rules('prize', 'Prize Name', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$this->index();

		}
		else
		{
			$this->prize_model->create_prize();
			// $this->index();
			redirect('raffle/index');
		}
	}
}
?>