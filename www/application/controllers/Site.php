<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->language('general');
	}

	public function index() {
		$this->view('pages/home');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */