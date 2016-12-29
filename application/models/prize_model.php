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
	function remove_prize($id)
	{
		return $this->db->delete('prize', array('prize_id' => $id));
	}

	function updatePrize(){

 $data = array(
'part_id' => $this->input->post('part_id'),
'prize_id'=>$this->input->post('prize_id')
);
 extract($data);
    $this->db->where('prize_id', $prize_id);
    $this->db->update('prize', array('prize_winner' => $part_id));
    return true;
		
	}
}
?>