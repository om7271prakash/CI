<?php
/**
 *
 */
class LoginModel extends CI_Model
{
  function login_valid($username, $password)
  {
    $q = $this->db->where(['uname' => $username, 'pword' => $password])
                  ->get('users');
    if( $q->num_rows() ){
      return true;
    }else{
      return false;
    }
  }
}


?>
