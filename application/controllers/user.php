<?php

class User extends MY_Controller{

	public function index(){
		if(!$this->session->userdata('id')){
			$this->load->view('public/articles_list');
		}else{
			return redirect('admin/dashboard');
		}
	}
}
?>
