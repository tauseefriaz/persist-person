<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persons extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('persons_model');
	}

	function index(){
		$data['personsList'] = $this->persons_model->getPersonsList();
		$this->load->view('index',$data);
	}

	function save(){
		$pData['firstname'] = $this->input->post('firstname', TRUE);
		$pData['lastname'] 	= $this->input->post('lastname', TRUE);
		$pData['dob'] 		= strtotime($this->input->post('dob', TRUE));
		$pData['zip'] 		= $this->input->post('zip', TRUE);
		$result 			= $this->persons_model->savePerson($pData);
	}
}
?>