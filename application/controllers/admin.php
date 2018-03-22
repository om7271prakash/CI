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
}
?>
