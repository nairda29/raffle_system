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


	function postWinner(){
$data = array(
	'table_name' => 'prize',
'part_id' => $this->input->post('part_id'),
'prize_id'=>$this->input->post('prize_id')
);
			$this->participant_model->updateWinner();
			$this->prize_model->updatePrize();
			redirect('raffle/index');
			



	
	}
	function index()
	{
		// $data['page_title']= 'Raffle System';
		// $data['participant_list'] = $this->participant_model->get_participant();
		// $data['prize_list'] = $this->prize_model->get_prize();
		// // $data['title'] = $data['news_item']['title'];

		// $this->load->view('templates/header',$data);
		// $this->load->view('pages/home', $data);
		// $this->load->view('templates/footer');

		$is_logged_in = $this->session->userdata('is_logged_in');
		if ($is_logged_in){
			$priv =  $this->session->userdata('priv');
			if ($priv == 'admin') {
				redirect('raffle/view');
			}
			elseif($priv == 'user') {
				redirect('raffle/encode');
			}
		}
		else{
			redirect('raffle/login_page');
		}
	}
	function encode()
	{
		$data['page_title']= 'Raffle System';
		$this->load->view('templates/header',$data);
		$this->load->view('pages/data_input', $data);
		$this->load->view('templates/footer');
	}
	function log_me_in()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
     //Field validation failed.  User redirected to login page
			$this->login_page();
		}
		else
		{
     //Go to private area
			redirect('raffle/index', 'refresh');
		}
	}
	function login_page()
	{
		$data['page_title'] = 'Login';
		$this->load->view('templates/header',$data);
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
	}
	function view()
	{
		// $is_logged_in = $this->session->userdata('is_logged_in');
		// if ($is_logged_in){
		// 	$priv =  $this->session->userdata('priv');
		// 	if ($priv == 'admin') {
		// 		redirect('raffle/raffle');
		// 	}
		// 	elseif($priv == 'user') {
		// 		redirect('raffle/encode');
		// 	}
		// }
		// else{
		// 	redirect('raffle/login_page');
		// }
		$data['page_title']= 'Raffle System';
		$data['participant_list'] = $this->participant_model->get_participant();
		$data['prize_list'] = $this->prize_model->get_prize();
		// $data['title'] = $data['news_item']['title'];

		$this->load->view('templates/header',$data);
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
	function remove_prize($id)
	{
		if ($this->prize_model->remove_prize($prize_id)) {
			redirect('raffle/index');
		}
	}

	function check_database($password)
	{
   //Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

   //query the database
		$result = $this->participant_model->login($username, $password);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'uid' => $row->id,
					'username' => $row->username
					);
				$this->session->set_userdata('is_logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('home', 'refresh');
	}
}
?>