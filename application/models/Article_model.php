<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require 'Model.php';

class Article_model extends Model {

	public $table = 'posts';

	public function getDefaultValues()
	{
		return [
			'date' => '',
			'title' => '',
			'body' => ''
		];
	}

	public function getValidationRules()
	{
		return [
			[
				'field' => 'date',
				'label' => 'Date',
				'rules' => 'trim|required'
			],
			[
				'field' => 'title',
				'label' => 'Title',
				'rules' => 'trim|required|max_length[20]'
			],
			[
				'field' => 'body',
				'label' => 'Body',
				'rules' => 'trim|required|min_length[4]'
			],
		];
	}

	public function validate()
	{
		$this->load->library('form_validation');
		$rules = $this->getValidationRules();
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<span class="validation-error">', '</span>');
		return $this->form_validation->run();
	}

	public function paginate($page = null, $perPage = null)
	{
		return $this->pagination($this->table, $page, $perPage);
	}

	public function countAll()
	{
		return $this->db->get($this->table)->num_rows();
	}

	public function find($id)
	{
		return $this->db->where('id', $id)
						->get($this->table)
						->row();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($id, $data)
	{
		return $this->db->where('id', $id)
						->update($this->table, $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id)
					->delete($this->table);
	}
}

/* End of file Article_model.php */
/* Location: ./application/models/Article_model.php */
