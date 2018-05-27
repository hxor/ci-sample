<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $layout = 'layouts/blog/app';

	public function __construct()
	{
		parent::__construct();
		$login = $this->session->userdata('login');
		if (!$login) {
			redirect('welcome');
		}

	}

	public function index()
	{
		$name = $this->session->userdata('name');

		$main_view = 'pages/admin';

		$this->load->view($this->layout, compact('main_view', 'name'));
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
