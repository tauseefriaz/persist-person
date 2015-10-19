<?php

class Persons_model extends CI_Model {

	function __construct(){

		parent::__construct();
		//$this->load->database("ci_test");
	}

	public function getPersonsList(){
		$query = $this->db->get('persons');
		return $query->result();
	}

	public function savePerson($data){
		return $this->db->insert('persons', $data);
	}

}

?>
