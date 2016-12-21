<?php 
/**
* 
*/
class Prize_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	function create_prize()
	{
		$this->load->helper('url');
		$data = array(
			'prize_name' => $this->input->post('prize')
			);

		return $this->db->insert('prize', $data);
	}
	function get_prize($filter = False)
	{
		if (!$filter) {
			$this->db->select('*');
			$this->db->from('prize');
			$this->db->join('participant', 'part_id=prize_winner','left');
			$query = $this->db->get();
			return $query->result_array();
		}
	}
}
?>