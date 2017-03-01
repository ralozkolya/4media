<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_post extends MY_Model {

	protected $upload_path = 'static/uploads/news/';
	protected $thumbs_path = 'static/uploads/news/thumbs/';

	protected $table = 'news';
	protected $with_image = TRUE;

	public function add($data) {

		$last = $this->db->get($this->table)->row();

		if($last) {
			if(parent::add($data)) return $this->delete($last->id);
		} else {
			return parent::add($data);
		}

		return FALSE;
	}

	public function get_localized() {

		$this->select_localized();
		return $this->db->get($this->table)->row();
	}

	public function get_localized_list($limit = NULL, $offset = NULL) {

		$this->select_localized();
		return parent::get_list($limit, $offset);
	}

	private function select_localized() {

		$lang = get_lang_code(get_lang());

		$this->db->select([
			"{$lang}_desc as desc",
			'id', 'image', 'link', 'modified',
		]);
	}

}

/* End of file News_post.php */
/* Location: ./application/models/News_post.php */