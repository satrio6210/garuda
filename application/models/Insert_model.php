<?php
class insert_model extends CI_Model{
	
	function __construct() {

		parent::__construct();

	}
	function form_insert($data){

		// Inserting in Table of Database
		$this->db->insert('users', $data);
		
	}
}
?>