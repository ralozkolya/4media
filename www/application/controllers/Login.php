<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $data = array(
		'title' => 'Green Climat',
	);

	public function __construct() {

		parent::__construct();

		$this->load->language('admin', GE);

		$this->load->model('User');
		$this->load->library(array('Auth'));

		$this->data['user'] = $this->auth->get_current_user();
	}

	public function index() {

		$user = $this->data['user'];
		
		if($user) {
			redirect(base_url('admin'));
		}

		else {
			$this->login();
		}
	}

	public function login() {

		$post = $this->input->post();

		if($post) {

			$username = $post['username'];
			$password = $post['password'];

			$user = $this->auth->login($username, $password);

			if($user) {
				redirect(base_url('admin'));
			}

			$this->session->set_flashdata(ERROR, lang('incorrect_credentials'));
			redirect(current_url());
		}

		$this->data['title'] = lang('login').' | '.$this->data['title'];

		$this->load->view('pages/admin/login', $this->data);
	}

	public function logout() {

		$this->auth->logout();

		redirect(base_url('login'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
