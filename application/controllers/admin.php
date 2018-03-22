<?php

class Admin extends MY_Controller{

	function __construct()
	{
		parent::__construct();

		if ( ! $this->session->userdata('id') )

			return redirect('login');
	}

	function dashboard()
	{
		$this->load->model('articlesmodel', 'articles');

		$articles = $this->articles->articles_list();

		$this->load->view('admin/dashboard', ['articles' => $articles]);
	}

	function add_article(){

		if ( $this->input->post() ) {

			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<div class="text-danger" style = "margin-top:10px;">', '</div>');

			if( $this->form_validation->run('add_article_rules') ){

				$post = $this->input->post();

				$this->load->model('articlesmodel', 'articles');

				if( $this->articles->add_article( $post ) ){
					$this->session->set_flashdata('feedback', 'Article Added Successfully.');
					$this->session->set_flashdata('feedback_class', 'alert-success');
				}else {
					$this->session->set_flashdata('feedback', 'Article Failed To Add, Please Try Again.');
					$this->session->set_flashdata('feedback_class', 'alert-danger');
				}

				return redirect('admin/dashboard');

			}else {
				return $this->load->view('admin/add_article');
			}

		}else {

			$this->load->helper('form');

			$this->load->view('admin/add_article');
		}

	}

	function edit_article($id){

	}

	function delete_article($id){

	}

}
?>
