<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->language('general');
	}

	public function index() {

		$this->data['project_types'] = $this->get_project_types();
		$this->data['projects'] = $this->get_projects();

		$this->view('pages/home', $this->data);
	}


	/*	PULLERS	*/

	private function get_project_types() {
		
		$this->load->model('Project');
		return $this->Project->get_types();
	}

	private function get_projects($type = NULL) {

		$this->load->model('Project');
		return $this->Project->get_filtered($type);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */