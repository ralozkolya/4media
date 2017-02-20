<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Model {

	protected $table = 'posts';

	public function get_localized($id) {

		$this->select_localized();
		return parent::get($id);
	}

	public function get_localized_list($limit = NULL, $offset = NULL) {
		$this->select_localized();
		return parent::get_list($limit, $offset);
	}

	private function select_localized() {

		$lang = get_lang_code(get_lang());

		$this->db->select([
			'*',
			"{$lang}_title as title",
			"{$lang}_body as body",
		]);
	}

}

/* End of file Post.php */
/* Location: ./application/models/Post.php */