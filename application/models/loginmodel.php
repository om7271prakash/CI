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

      return $q->row()->id;

    }else{

      return false;
    }
  }

  public function user_registration( $user_data ){

    if( $this->db->insert('users', $user_data) ){
      return true;
    }else {
      return false;
    }
  }

  public function check_user_exist( $uname ){

    $query = $this->db->select()
                      ->from('users')
                      ->where(['uname' => $uname])
                      ->get();

    if( $query->num_rows() )
      return true;
    return false;
  }
}


?>
