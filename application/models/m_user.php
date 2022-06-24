<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	public function getUsers() 
	{
		$this->db->where('role !=', 1);
		return $this->db->get('users')->result_array();
	}

	public function deleteUser($id) 
	{
		$this->db->delete('users', ['id' => $id]);
	}

}


