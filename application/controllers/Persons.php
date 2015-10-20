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
		$id 				= $this->input->post('id', TRUE);
		$pData['firstname'] = $this->input->post('firstname', TRUE);
		$pData['lastname'] 	= $this->input->post('lastname', TRUE);
		$pData['dob'] 		= strtotime($this->input->post('dob', TRUE));
		$pData['zip'] 		= $this->input->post('zip', TRUE);
		if($id>0):
			$result 		= $this->persons_model->updatePerson($pData,$id);
			echo $id;
		else:
			$result 		= $this->persons_model->savePerson($pData);
			echo $result;
		endif;

		
	}

	function get(){
		$id 				= $this->input->post('id', TRUE);
		$result 			= $this->persons_model->getPerson($id);
		echo json_encode($result);
	}

	function delete(){
		$id = $this->input->post('id', TRUE);
		$result 			= $this->persons_model->deletePerson($id);
		
	}

}
?>