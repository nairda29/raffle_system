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
			'name' => $this->input->post('name')
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
	function updateWinner(){
		$part_id = $this->input->post('part_id');

		$this->db->where('part_id', $part_id);
    $this->db->update('participant', array('selected' => 1));
    return true;
	}
}
?>