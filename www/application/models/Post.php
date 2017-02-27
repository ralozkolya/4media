<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Model {

	protected $upload_path = 'static/uploads/posts/';
	protected $thumbs_path = 'static/uploads/posts/thumbs/';

	protected $table = 'posts';
	protected $slug = 'en_title';
	protected $with_image = TRUE;

	public function get_localized($id) {

		$this->select_localized();
		return parent::get($id);
	}

	public function get_localized_list($limit = NULL, $offset = NULL) {

		$this->db->select('SQL_CALC_FOUND_ROWS null as rows', FALSE);
		$this->select_localized();

		$this->db->order_by('id DESC');

		$response['data'] = parent::get_localized_list($limit, $offset);
		$response['rows'] = $this->db->query('SELECT FOUND_ROWS() count')->row()->count;

		return $response;
	}

	private function select_localized() {

		$lang = get_lang_code(get_lang());

		$this->db->select([
			"{$lang}_title as title",
			"{$lang}_body as body",
			'id', 'image', 'slug', 'modified',
		]);
	}

}

/* End of file Post.php */
/* Location: ./application/models/Post.php */