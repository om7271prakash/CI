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

    return redirect('/');
  }

  public function register_form(){

    if ( $this->session->userdata('id'))

      return redirect('admin/dashboard');

    $this->load->helper('form');

    $this->load->view('public/admin_register');
  }

  public function register_user(){

    if ( $this->session->userdata('id'))

      return redirect('admin/dashboard');

    $this->load->library('form_validation');

    $post = $this->input->post();

    $this->load->model('loginmodel');

    if( $this->loginmodel->check_user_exist( $post['uname'] ) ){

      $this->session->set_flashdata('register_failed', 'Username Exist Already, Please Choose Another Username');

      return redirect('login/register_form');
    }

    $this->form_validation->set_error_delimiters('<div class="text-danger" style = "margin-top:10px;">', '</div>');

    if ( $this->form_validation->run('admin_register') ) {

      unset($post['pword1']);

      if( $this->loginmodel->user_registration( $post ) ){

        $this->session->set_flashdata('registration_success', 'You Register Successfully, Please Login Here...');

        return redirect('login');

      }else {

        $this->session->set_flashdata('register_failed', 'Invalid Data');

        return redirect('login/register_form');
      }

    }else{
      $this->load->view('public/admin_register');
    }
  }

}



?>
