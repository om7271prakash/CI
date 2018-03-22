<?php
/**
 *
 */
class Articlesmodel extends CI_Model
{
  function articles_list()
  {
    $user_id = $this->session->get_userdata('user_id');

    $query = $this->db
                        ->select('id, title')
                        ->from('articles')
                        ->where('user_id', $user_id['id'])
                        ->get();

    return $query->result_array();
  }

  function add_article($array)
  {
    return $this->db->insert('articles', $array);
  }
}


?>
