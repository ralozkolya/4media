<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Model {

	protected $table = 'projects';

	public function get_types() {

		$this->db->select('type');
		$this->db->distinct();
		return parent::get_list();
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
			'id', 'image',
		]);
	}

}

/* End of file Project.php */
/* Location: ./application/models/Project.php */