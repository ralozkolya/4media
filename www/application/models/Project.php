<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Model {

	protected $upload_path = 'static/uploads/projects/';
	protected $thumbs_path = 'static/uploads/projects/thumbs/';

	protected $table = 'projects';
	protected $with_image = TRUE;

	public function get_types() {

		$this->db->select('type');
		$this->db->distinct();
		return parent::get_list();
	}

	public function get_localized_list($limit = NULL, $offset = NULL) {

		$this->db->select('SQL_CALC_FOUND_ROWS null as rows', FALSE);
		$this->select_localized();

		$response['data'] = parent::get_localized_list($limit, $offset);
		$response['rows'] = $this->db->query('SELECT FOUND_ROWS() count')->row()->count;

		return $response;
	}

	public function get_filtered($type = NULL) {

		$this->select_localized();

		if($type) {
			$this->db->where('type', $type);
		}

		$this->db->order_by('priority');

		return parent::get_list();
	}

	private function select_localized() {

		$lang = get_lang_code(get_lang());

		$this->db->select([
			"{$lang}_name as name",
			'id', 'image', 'type', 'link'
		]);
	}

}

/* End of file Project.php */
/* Location: ./application/models/Project.php */