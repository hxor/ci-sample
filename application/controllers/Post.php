<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	public $layout = 'layouts/app';

	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = null)
	{
		$this->load->database();

		$heading =  'Posts List';
		$main_view = 'pages/post/index';
		$per_page = 10;

		// Count offset
		if ($page == null) {
			$offset = 0;
		} else {
			$offset = ($page * $per_page) - $per_page;
		}


		// Data
 		$content = $this->db->limit($per_page, $offset)->get('posts')->result();
		$total = $this->db->get('posts')->num_rows();

		// Pagination links
		$this->load->library('pagination');
		$config['base_url'] 		= base_url('post');
		$config['total_rows'] 		= $total;
		$config['per_page'] 		= $per_page;
		$config['use_page_numbers'] = true;
		$this->pagination->initialize($config);
		$pagination = $this->pagination->create_links();
		
		$this->load->view($this->layout, compact('heading', 'main_view', 'content', 'total', 'pagination'));
	}

	public function show($id)
	{
		$this->load->database();

		$heading = 'Detail Post';
		$main_view = 'pages/post/show';

		$content = $this->db->where('id', $id)->get('posts')->row();

		$this->load->view($this->layout, compact('heading', 'main_view', 'content'));
	}

	public function create()
	{
		$heading = 'Create Post';
		$main_view = 'pages/post/create';

		if (!$_POST) {
			$this->load->view($this->layout, compact('heading', 'main_view'));
		} else {
			$input = $this->input->post();
			echo "<pre>";
			var_dump($input);
			echo "</pre>";
			exit;
		}

		
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/Post.php */
