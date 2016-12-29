<?php 
/**
* 
*/
class Participant_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function create_participant()
	{
		$this->load->helper('url');

		// $slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'reg_code' => $this->input->post('reg_code'),
			'name' => $this->input->post('name'),
			'maiden_name' => $this->input->post('maiden_name'),
			'batch' => $this->input->post('batch'),
			'bday' => $this->input->post('bday'),
			'contact_number' => $this->input->post('contact_number'),
			'annual_fee' => $this->input->post('annual_fee'),
			);

		return $this->db->insert('participant', $data);
	}
	function get_participant($filter = False)
	{
		if (!$filter) {
			$this->db->order_by('rand()');
			$query = $this->db->get('participant');
			return $query->result_array();
		}
	}

	function login($username, $password)
	{
		$this -> db -> select('uid, username, password');
		$this -> db -> from('users');
		$this -> db -> where('username', $username);
		$this -> db -> where('password', MD5($password));
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$r = $query ->row();
			if ($r->priv == "admin") {
				$this->session->set_userdata('priv', 'admin');
			}
			elseif ($r->priv == "user") {
				$this->session->set_userdata('priv', 'admin');
			}
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	function updateWinner(){
		$part_id = $this->input->post('part_id');

		$this->db->where('part_id', $part_id);
		$this->db->update('participant', array('selected' => 1));
		return true;
	}
}
?>