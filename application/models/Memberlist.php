<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memberlist extends CI_Model {


	public function bacaData(){
		$data = $this->db->get('users');
		return $data->result_array();
	}
}

?>