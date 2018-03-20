<?php
/**
 *
 */


class Login extends MY_Controller
{

  function index()
  {
    $this->load->helper('form');
    $this->load->view('public/admin_login');
  }

  function admin_login()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'User Name', 'required|alpha|trim');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_error_delimiters('<div class="text-danger" style = "margin-top:10px;">', '</div>');

    if ( $this->form_validation->run() ) {
      echo 'success';
    }else{
      $this->load->view('public/admin_login');
    }
  }

}



?>
