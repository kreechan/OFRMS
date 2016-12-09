<?php
Class Model_users extends CI_Model
{
	
	
	public function register_insert($data){

		$condition = "email =" . "'" . $data['email'] . "'";
		$this->db->select('email');
		$this->db->from('test');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this-> db ->get();
			if($query->num_rows() == 0){

				$this-> db ->insert('test', $data);
				if($this->db->affected_rows() > 0){
					return true;
				}

				}else{
					return false;
				}

				$this->db->insert('test', $data);
			}

			//$this->load->database();
			//$this->db->insert('test', $data);


	//}


	function can_log_in()
	{
		$this -> db -> where('email', $this->input->post('email'));
		$this -> db -> where('password', ($this->input->post('password')));
		$query = $this -> db -> get('users');

		if($query -> num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
}
?>