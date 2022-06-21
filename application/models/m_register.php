<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_register extends CI_Model {

	public function register($data)
	{
		$this->db->insert('users', $data);
	}

}

