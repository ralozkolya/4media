<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MY_Controller {

	public function __construct() {

		parent::__construct();

		$this->load->language('general');
		$this->load->helper('no_image');
		
		$this->data['navigation'] = $this->get_navigation();
		$this->data['news'] = $this->get_news();
	}

	public function index() {

		$this->data['project_types'] = $this->get_project_types();
		$this->data['projects'] = $this->get_projects();
		$this->data['menu'] = 'relative';
		$this->data['our_team'] = $this->get_page('our-team');
		$this->data['sites'] = $this->get_page('website-development');
		$this->data['social_media'] = $this->get_page('social-media');
		$this->data['other'] = $this->get_page('looking-for-other');
		$this->data['more'] = $this->get_page('more-about-us');
		$this->data['sense'] = $this->get_page('sense');

		$this->view('pages/home');
	}

	public function blog($page = 1) {

		$posts = $this->get_posts($page);

		$this->data['posts'] = $posts['data'];

		$this->config->load('pagination');
		$config = $this->config->item('pagination');
		$config['base_url'] = locale_url('blog');
		$config['per_page'] = POSTS_PER_PAGE;
		$config['total_rows'] = $posts['rows'];
		$this->load->library('pagination', $config);
		
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
		$limit = POSTS_PER_PAGE;
		$offset = $page * $limit;

		$this->load->model('Post');
		return $this->Post->get_localized_list($limit, $offset);
	}

	private function get_post($id) {

		$this->load->model('Post');
		$post = $this->Post->get_localized($id);

		if(!$post) {
			show_404();
			return;
		}

		return $post;
	}

	private function get_page($slug) {
		$this->load->model('Page');
		$page = $this->Page->get_localized($slug);

		if(!$page) {
			show_404();
			return;
		}

		return $page;
	}

	private function get_navigation() {
		$this->load->model('Page');
		return $this->Page->get_navigation();
	}

	private function get_news() {
		$this->load->model('News_post');
		return $this->News_post->get_localized(2);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */