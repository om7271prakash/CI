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
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $this->load->model('loginmodel');
      $login_id = $this->loginmodel->login_valid($username, $password);
      if($login_id){

        $this->load->library('session');
        $this->session->set_userdata('id', $login_id);

        $this->load->view('admin/dashboard');

      }else {
        echo 'Username/Password Not Matched';
      }


    }else{
      $this->load->view('public/admin_login');
    }
  }


}



?>
