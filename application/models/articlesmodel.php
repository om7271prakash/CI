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

  function find_article( $article_id )
  {
    $query = $this->db->select('id, title, body')
                      ->where('id', $article_id)
                      ->get('articles');

    return $query->row();
  }

  function update_article($article_id, $article){
    $query = $this->db->set($article)
                      ->where('id', $article_id)
                      ->update('articles');

    return $query;
  }


}


?>
