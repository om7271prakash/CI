<?php

class Admin extends MY_Controller{

	public function index(){
		echo "admin working";
	}
	function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
}
?>
