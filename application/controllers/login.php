<?php
/**
 *
 */


class Login extends MY_Controller
{

  function index()
  {
    if ( $this->session->userdata('id'))

      return redirect('admin/dashboard');

    $this->load->helper('form');

    $this->load->view('public/admin_login');
  }

  function admin_login()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_error_delimiters('<div class="text-danger" style = "margin-top:10px;">', '</div>');

    if ( $this->form_validation->run('admin_login') ) {

      $username = $this->input->post('username');

      $password = $this->input->post('password');

      $this->load->model('loginmodel');

      $login_id = $this->loginmodel->login_valid($username, $password);

      if($login_id){

        $this->session->set_userdata('id', $login_id);

        return redirect('admin/dashboard');

      }else {
        $this->session->set_flashdata('login_failed', 'Invalid Usernam/Password.');

        return redirect('login');
      }


    }else{
      $this->load->view('public/admin_login');
    }
  }

  function logout(){

    $this->session->unset_userdata('id');

    return redirect('login');
  }

}



?>
