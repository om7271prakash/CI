<?php

class Admin extends MY_Controller{

	public function index(){
		echo "admin working";
	}
	function dashboard()
	{
		$this->load->model('articlesmodel', 'articles');
		$articles = $this->articles->articles_list();
		
		$this->load->view('admin/dashboard', ['articles' => $articles]);
	}
}
?>
