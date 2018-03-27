<?php

class User extends MY_Controller{

	public function index(){

		$this->load->helper('form');

		$this->load->model('articlesmodel', 'articles');

		$this->load->library('pagination');

		$config = [
								"base_url" 				=> base_url('user/index'),
								"per_page" 				=> 5,
								"total_rows" 			=> $this->articles->count_all_articles(),
								"full_tag_open" 	=> "<ul class = 'pagination'>",
								"full_tag_close" 	=> "</ul>",
								"first_tag_open" 	=> "<li  class='page-item page-link'>",
								"first_tag_close" => "</li>",
								"last_tag_open" 	=> "<li  class='page-item page-link'>",
								"last_tag_close" 	=> "</li>",
								"first_link"			=> "<<",
								"last_link"			=> ">>",
								"next_tag_open"	  => "<li  class='page-item page-link'>",
								"next_tag_close" 	=> "</li>",
								"prev_tag_open" 	=> "<li  class='page-item page-link'>",
								"prev_tag_close" 	=> "</li>",
								"num_tag_open" 		=> "<li  class='page-item page-link'>",
								"num_tag_close" 	=> "</li>",
								"cur_tag_open" 		=> "<li class='page-item active'><a class = 'page-link'>",
								"cur_tag_close" 	=> "</a></li>"
		];

		$this->pagination->initialize($config);

		$articles = $this->articles->all_articles_list( $config['per_page'], $this->uri->segment(3, 0) );

		$this->load->view('public/articles_list', compact( 'articles' ) );
	}

	public function search(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('query', 'Query', 'required');

		if ( !$this->form_validation->run() ) {

			$this->index();

		}else{

			$query = $this->input->post('query');

			return redirect("user/search_results/$query");

			// $this->load->model('articlesmodel', 'articles');
			//
			// $articles = $this->articles->search( $query );
			//
			// $this->load->view('public/search_results', compact( 'articles' ) );
		}
	}

	public function search_results( $query ){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('query', 'Query', 'required');

		$this->load->model('articlesmodel', 'articles');

		$this->load->library('pagination');

		$config = [
								"base_url" 				=> base_url("user/search_results/$query"),
								"per_page" 				=> 5,
								"total_rows" 			=> $this->articles->count_search_results( $query ),
								"full_tag_open" 	=> "<ul class = 'pagination'>",
								"full_tag_close" 	=> "</ul>",
								"first_tag_open" 	=> "<li  class='page-item page-link'>",
								"first_tag_close" => "</li>",
								"uri_segment"			=> 4,
								"last_tag_open" 	=> "<li  class='page-item page-link'>",
								"last_tag_close" 	=> "</li>",
								"first_link"			=> "<<",
								"last_link"			=> ">>",
								"next_tag_open"	  => "<li  class='page-item page-link'>",
								"next_tag_close" 	=> "</li>",
								"prev_tag_open" 	=> "<li  class='page-item page-link'>",
								"prev_tag_close" 	=> "</li>",
								"num_tag_open" 		=> "<li  class='page-item page-link'>",
								"num_tag_close" 	=> "</li>",
								"cur_tag_open" 		=> "<li class='page-item active'><a class = 'page-link'>",
								"cur_tag_close" 	=> "</a></li>"
		];

		$this->pagination->initialize($config);

		$articles = $this->articles->search( $query, $config['per_page'], $this->uri->segment(4, 0));

		$this->load->view('public/search_results', compact( 'articles' ) );
	}

	public function article( $id ){

		$this->load->helper('form');

		$this->load->model('articlesmodel', 'articles');

		$article = $this->articles->find( $id );

		$this->load->view( 'public/article_detail', compact('article') );

	}

}
?>
