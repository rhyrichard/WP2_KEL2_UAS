<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function checkEmail($email)
	{
		return $this->db->get_where('users', ['email' => $email])->row_array();
	}

}


