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

		$is_logged_in = $this->session->userdata('is_logged_in');
		if ($is_logged_in){
			$priv = $is_logged_in;
			if ($priv == 'admin') {
				redirect('raffle/view');
			}
			elseif($priv == 'user') {
				redirect('raffle/encode');
			}
		}
		else{
			echo "<script>console.log('not logged in');</script>";
			redirect('raffle/login_page');
		}
	}
	function encode()
	{
		$this->load->library('pagination');
		$config["base_url"] = base_url() . "/raffle_system/raffle/encode";
		$config['total_rows'] = $this->participant_model->get_total_number();
		$config['per_page'] = 10;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$config['use_page_numbers'] = TRUE;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';

		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
		if($this->uri->segment(4)){
			$page = ($this->uri->segment(4)) ;
		}
		else{
			$page = 1;
		}
		$data["participant_list"] = $this->participant_model->fetch_data($config["per_page"], $page);
		$this->pagination->initialize($config);
		$data['page_title']= 'Raffle System';
		// $data['participant_list'] = $this->participant_model->get_participant();
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
			redirect('raffle/');
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
			redirect('raffle/encode');
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
		if ($this->prize_model->remove_prize($id)) {
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
			$r = array();
			foreach($result as $row)
			{
				$r = array(
					'uid' => $row->uid,
					'username' => $row->username,
					'priv' => $row->priv
					);

				$this->session->set_userdata('is_logged_in',$row->priv);
				$this->session->set_userdata('logged_id',$row->uid);
				// echo "<script>console.log('yeah');</script>";
				// if ($r->priv == "admin") {
				// 	$this->session->set_userdata('priv', 'admin');
				// }
				// elseif ($r->priv == "user") {
				// 	$this->session->set_userdata('priv', 'admin');
				// }
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
		$this->session->unset_userdata('is_logged_in');
		session_destroy();
		redirect('raffle');
	}
}
?>