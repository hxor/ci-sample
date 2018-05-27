<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function pagination($table, $page = null, $perPage = null)
	{
		if ($page == null) $page = 0;
		if ($perPage == null) $perPage = 10;

		$offset = $this->calculateOffset($page, $perPage);

		return $this->db->limit($perPage, $offset)
						->get($table)
						->result();
	}

	/**
	 * Calculate Offset Data Pagination
	 * @param  [type] $page    	number of page
	 * @param  int $perPage 	showing data per page 		
	 * @return [type]          [description]
	 */
	protected function calculateOffset($page, $perPage)
	{
		if ($page == 0) {
			$offset = 0;
		} else {
			$offset = ($page * $perPage) - $perPage;
		}
		return $offset;
	}

	public function createPagination($baseUrl, $total, $perPage = null)
	{
		$this->load->library('pagination');
		$this->load->helper('url');
		if ($perPage == null) $perPage = 10;

		$config['base_url'] = site_url($baseUrl);
		$config['total_rows'] = $total;
		$config['per_page'] = $perPage;
		$config['use_page_numbers'] = true;
		$config['first_link'] = '|< First';
		$config['last_link'] = 'Last >|';
		$config['next_link'] = 'Next >';
		$config['prev_link'] = '< Prev';

		$this->pagination->initialize($config);

		return $this->pagination->create_links();
	}

}

/* End of file Model_General.php */
/* Location: ./application/models/Model_General.php */
