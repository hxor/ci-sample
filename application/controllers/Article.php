<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public $layout = 'layouts/blog/app';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Article_model', 'article', true);
	}

	public function index($page = null)
	{
		$articles = $this->article->paginate($page, 2);
		$total = $this->article->countAll();
		$pagination = $this->article->createPagination('article/page', $total, 2);

		$main_view = 'pages/article/index';

		$this->load->view($this->layout, compact('main_view', 'articles', 'total', 'pagination')); 
	}

	public function show($id = null)
	{
		if ($id == null) redirect('article');

		$article = $this->article->find($id);

		if (!$article) redirect('article');

		$main_view = 'pages/article/show';

		$this->load->view($this->layout, compact('main_view', 'article'));
	}

	public function create()
	{
		if (!$_POST) {
			$input = (object) $this->article->getDefaultValues();
		} else {
			$input = (object) $this->input->post();
		}

		if (!$this->article->validate()) {
			$main_view = 'pages/article/form';
			$form_action = 'article/create';

			$this->load->view($this->layout, compact('main_view', 'form_action', 'input'));
			return;
		}

		$this->article->insert($input);
		redirect('article');
	}

	public function edit($id = null)
	{
		$article = $this->article->find($id);

		if (!$article) {
			redirect('article');
		}

		if (!$_POST) {
			$input = (object) $article;
		} else {
			$input = (object) $this->input->post();
		}

		if (!$this->article->validate()) {
			$main_view = 'pages/article/form';
			$form_action = "article/edit/$id";
			$this->load->view($this->layout, compact('main_view', 'form_action', 'input'));
			return;
		}

		$this->article->update($id, $input);
		redirect('article');
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$article = $this->article->find($id);

		if (!$article) redirect('article');

		$this->article->delete($id);
		redirect('article');
	}

}

/* End of file Article.php */
/* Location: ./application/controllers/Article.php */
