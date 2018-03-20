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
    echo "this is login method";
  }
}



?>
