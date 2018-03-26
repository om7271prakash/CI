<?php

class Admin extends MY_Controller{

	function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('id') )

			return redirect('login');

		$this->load->model('articlesmodel', 'articles');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	function dashboard()
	{

		$this->load->library('pagination');

		$config = [
								"base_url" => base_url('admin/dashboard'),
								"per_page" => 5,
								"total_rows" => $this->articles->num_rows()
		];

		$this->pagination->initialize($config);

		$articles = $this->articles->articles_list( $config['per_page'], $this->uri->segment(3) );

		$this->load->view('admin/dashboard', ['articles' => $articles]);
	}

	function add_article(){

		if ( $this->input->post() ) {

			$this->form_validation->set_error_delimiters('<div class="text-danger" style = "margin-top:10px;">', '</div>');

			if( $this->form_validation->run('add_article_rules') ){

				$post = $this->input->post();

				return $this->_flashAndRedirect(

					$this->articles->add_article( $post ),

					'Article Added Successfully.',

					'Article Failed To Add, Please Try Again.'
				);

			}else {
				return $this->load->view('admin/add_article');
			}

		}else {

			$this->load->view('admin/add_article');
		}

	}

	function edit_article($id){

		if ( $this->input->post() ) {

			$this->form_validation->set_error_delimiters('<div class="text-danger" style = "margin-top:10px;">', '</div>');

			if( $this->form_validation->run('add_article_rules') ){

				$post = $this->input->post();

				return $this->_flashAndRedirect(

					$this->articles->update_article( $id, $post, $this->session->userdata('id')),

					'Article Updated Successfully.',

					'Article Failed To Update, Please Try Again.'
				);

			}else {
				return $this->load->view('admin/add_article');
			}
		}else {

			if($article = $this->articles->find_article( $id, $this->session->userdata('id') )){

				$this->load->view('admin/edit_article', ['article' => $article]);

			}else{

				$this->session->set_flashdata('feedback', 'Wrong Article, Please Try Again.');

				$this->session->set_flashdata('feedback_class', 'alert-danger');

				return redirect('admin/dashboard');
			}
		}
	}

	function delete_article(){

		if ( $article_id = $this->input->post('article_id') ) {

			return $this->_flashAndRedirect(

				$this->articles->delete_article( $article_id, $this->session->userdata('id')),

				'Article Deleted Successfully.',

				'Article Failed To Delete, Please Try Again.'
			);

		}else{
			return redirect('admin/dashboard');
		}
	}

	private function _flashAndRedirect($successful, $successMessage, $failureMessage){

		if($successful){

			$this->session->set_flashdata('feedback', $successMessage);

			$this->session->set_flashdata('feedback_class', 'alert-success');
		} else {

			$this->session->set_flashdata('feedback', $failureMessage);

			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}

		return redirect('admin/dashboard');
	}

}
?>
