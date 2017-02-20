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
		$this->data['menu'] = 'relative';

		$this->view('pages/home', $this->data);
	}

	public function blog($page = 1) {

		$this->data['posts'] = $this->get_posts();
		$this->data['title'] = lang('blog') . ' | ' . $this->data['title'];

		$this->view('pages/blog', $this->data);
	}

	public function post($id, $slug) {

		$this->data['post'] = $this->get_post($id);
		$this->data['title'] = $this->data['post']->title . ' | ' . $this->data['title'];

		$this->view('pages/post', $this->data);
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

	private function get_posts($page = 1) {

		$page = abs($page - 1);
		$limit = 20;
		$offset = $page * $limit;

		$this->load->model('Post');
		return $this->Post->get_localized_list($limit, $offset);
	}

	private function get_post($id) {

		$this->load->model('Post');
		return $this->Post->get_localized($id);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */