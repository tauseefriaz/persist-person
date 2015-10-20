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
		$this->db->insert('persons', $data);
		return $this->db->insert_id();
	}


	public function getPerson($id){
		$this->db->where('id', $id);
		$query = $this->db->get('persons');
		return $query->result();
	}

	public function updatePerson($data, $id){
		$this->db->where('id', $id);
		return $this->db->update('persons', $data);
	}

	public function deletePerson($id){
		$this->db->where('id', $id);
		return $this->db->delete('persons');
	}

}

?>
