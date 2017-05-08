<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	private $types = [
		WEBSITES, APPS, LOGOS, OTHER,
	];

	public function __construct() {
		parent::__construct();

		set_language(GE);

		$this->load->language('admin');
		$this->load->library(['Auth', 'form_validation']);
		$this->load->helper(['view', 'no_image']);
		$this->load->model([
			'Page', 'Post', 'Project', 'News_post',
		]);

		$this->data['user'] = $this->auth->get_current_user();

		if(!$this->data['user']) {
			$this->auth->logout();
			$this->message(lang('unauthorized'), ERROR, FALSE);
			$this->redirect('login');
		}
	}

	public function index() {
		$this->pages();
	}

	public function pages() {

		$this->data['type'] = $type = 'Page';

		$this->data['items'] = $this->get_items($type);
		$this->data['highlighted'] = 'pages';

		$this->view('pages/admin/pages');
	}

	public function Page($id) {

		$this->data['type'] = $type = 'Page';

		$this->modify($type);
		
		$this->data['item'] = $this->get_item($type, $id);
		$this->data['highlighted'] = 'pages';

		$this->view('pages/admin/page');
	}

	public function blog($page = 1) {

		$this->data['type'] = $type = 'Post';

		$this->modify($type);

		$posts = $this->get_items($type, $page);

		$this->data['items'] = $posts['data'];

		$this->config->load('pagination');
		$config = $this->config->item('pagination');
		$config['base_url'] = base_url('admin/blog');
		$config['per_page'] = ITEMS_PER_PAGE_ADMIN;
		$config['total_rows'] = $posts['rows'];
		$this->load->library('pagination', $config);

		$this->data['highlighted'] = 'blog';

		$this->load->view('pages/admin/blog', $this->data);
	}

	public function Post($id) {

		$this->data['type'] = $type = 'Post';

		$this->modify($type);

		$this->data['item'] = $this->get_item($type, $id);
		$this->data['highlighted'] = 'blog';

		$this->load->view('pages/admin/post', $this->data);
	}

	public function projects($page = 1) {

		$this->data['type'] = $type = 'Project';
		$this->data['types'] = $this->types;

		$this->modify($type);

		$projects = $this->get_items($type, $page);

		$this->data['items'] = $projects['data'];

		$this->config->load('pagination');
		$config = $this->config->item('pagination');
		$config['base_url'] = base_url('admin/projects');
		$config['per_page'] = ITEMS_PER_PAGE_ADMIN;
		$config['total_rows'] = $projects['rows'];
		$this->load->library('pagination', $config);

		$this->data['highlighted'] = 'projects';

		$this->view('pages/admin/projects');
	}

	public function Project($id) {

		$this->data['type'] = $type = 'Project';
		$this->data['types'] = $this->types;

		$this->modify($type);

		$this->data['item'] = $this->get_item($type, $id);
		$this->data['highlighted'] = 'projects';

		$this->view('pages/admin/project');
	}

	public function news() {

		$this->data['type'] = $type = 'News_post';

		$this->modify($type);

		$this->data['items'] = $this->get_items('News_post');
		$this->data['highlighted'] = 'news';

		$this->view('pages/admin/news');
	}

	public function News_post($id) {

		$this->data['type'] = $type = 'News_post';

		$this->modify($type);

		$this->data['item'] = $this->get_item($type, $id);
		$this->data['highlighted'] = 'news';

		$this->view('pages/admin/news_post');
	}

	public function user() {

		$type = 'User';

		$this->modify($type, [
			'password' => $this->input->post('password'),
			'id' => $this->data['user']->id,
		]);

		$this->data['highlighted'] = 'user';
		$this->view('pages/admin/user');
	}


	/*	MODIFIERS	*/

	public function modify($type, $data = NULL) {

		if(!$this->input->post()) {
			return;
		}

		if(empty($data)) {
			$data = $this->input->post();
		}

		if(empty($data['id'])) {
			$this->add($type, $data);
		}

		else {
			$this->edit($type, $data);
		}
	}

	public function add($type, $data) {

		$allowed = [
			'Post', 'Project', 'News_post',
		];

		if(!$this->is_allowed($allowed, $type)) {
			$this->message(lang('not_allowed'), ERROR);
		}

		if($this->form_validation->run("add_{$type}")) {

			try {
				$this->$type->add($data);
				$this->message(lang('added_successfully'));
			}

			catch(Exception $e) {
				$this->message($e->getMessage(), ERROR, FALSE);
			}
		}

		else {
			$this->validation_errors();
		}
	}

	public function edit($type, $data) {

		$allowed = [
			'Page', 'Post', 'User', 'Project', 'News_post',
		];

		if(!$this->is_allowed($allowed, $type)) {
			$this->message(lang('not_allowed'), ERROR);
		}

		if($this->form_validation->run("edit_{$type}")) {

			try {
				$this->$type->edit($data);
				$this->message(lang('changed_successfully'));
			}

			catch(Exception $e) {
				$this->message($e->getMessage(), ERROR, FALSE);
			}
		}

		else {
			$this->validation_errors();
		}
	}

	public function delete($type, $id) {

		$allowed = [
			'Post', 'Post_image', 'Project', 'Project_image', 'News_post',
		];

		if(!$this->is_allowed($allowed, $type)) {
			$this->message(lang('not_allowed'), ERROR);
		}

		if($this->$type->delete($id)) {
			$this->message(lang('deleted_successfully'));
		}

		else {
			$this->message(lang('unexpected_error'), ERROR);
		}
	}

	public function add_images($type) {

		$allowed = [];

		if(!$this->is_allowed($allowed, $type)) {
			$this->message(lang('not_allowed'), ERROR);
		}

		if($this->form_validation->run("add_{$type}")) {

			$item = $this->input->post('item');

			try {
				$this->$type->add_images($item);
				$this->message(lang('added_successfully'));
			}

			catch(Exception $e) {
				$this->message($e->getMessage(), ERROR);
			}
		}

		else {
			$this->validation_errors();
			$this->redirect();
		}
	}


	/*	HELPERS	*/

	private function is_allowed($array, $type) {

		foreach($array as $a) {
			if($type === $a) {
				return TRUE;
			}
		}

		return FALSE;
	}

	private function validation_errors() {
		$message = validation_errors('<div>', '</div>');
		$message = $message ? $message : lang('no_validation_rules');
		$this->message($message, ERROR, FALSE);
	}

	private function get_items($type, $page = NULL) {

		$items;

		if($page) {
			$offset = abs($page - 1) * ITEMS_PER_PAGE_ADMIN;
			$items = $this->$type->get_localized_list(ITEMS_PER_PAGE_ADMIN, $offset);
		}

		else {
			$items = $this->$type->get_localized_list();
		}

		return $items;
	}

	private function get_item($type, $id) {

		$item = $this->$type->get($id);

		if(empty($item)) {
			show_404();
			exit;
		}

		return $item;
	}

	private function get_gallery($type, $id) {

		return $this->$type->get_gallery($id);
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */