<?php
/**
 *
 */
class Articlesmodel extends CI_Model
{
  function articles_list( $limit, $offset )
  {
    $user_id = $this->session->get_userdata('user_id');

    $query = $this->db
                        ->select('id, title')
                        ->from('articles')
                        ->where('user_id', $user_id['id'])
                        ->limit($limit, $offset)
                        ->order_by('created_at', 'DESC')
                        ->get();

    return $query->result_array();
  }

  function all_articles_list( $limit, $offset )
  {
    $query = $this->db
                        ->select()
                        ->from('articles')
                        ->limit($limit, $offset)
                        ->order_by('created_at', 'DESC')
                        ->get();

    return $query->result_array();
  }


  public function count_all_articles(){

    $query = $this->db
                        ->select()
                        ->from('articles')
                        ->get();

    return $query->num_rows();
  }

  public function num_rows(){
    $user_id = $this->session->get_userdata('user_id');

    $query = $this->db
                        ->select('id, title')
                        ->from('articles')
                        ->where('user_id', $user_id['id'])
                        ->get();

    return $query->num_rows();
  }

  public function count_search_results( $q ){

    $query = $this->db->from('articles')
                      ->like('title', $q)
                      ->get();
    return $query->num_rows();
  }

  function add_article($array)
  {
    return $this->db->insert('articles', $array);
  }

  function find_article( $article_id, $user_id )
  {
    $query = $this->db->select('id, title, body')
                      ->where(['id' => $article_id, 'user_id' => $user_id])
                      ->get('articles');

    return $query->row();
  }

  function update_article($article_id, $article, $user_id)
  {
    $query = $this->db->set($article)
                      ->where(['id' => $article_id, 'user_id' => $user_id])
                      ->update('articles');

    return $query;
  }

  function delete_article($article_id, $user_id)
  {
    return $this->db->delete('articles', ['id' => $article_id, 'user_id' => $user_id]);
  }

  public function search( $q, $limit, $offset ){

    $query = $this->db->from( 'articles' )
             ->like( 'title', $q )
             ->limit($limit, $offset)
             ->order_by('created_at', 'DESC')
             ->get();

    return $query->result_array();
  }

  public function find( $id ){

    $query = $this->db->from('articles')
                      ->where(['id' => $id ])
                      ->get();
    if ( $query->num_rows() ) {
      return $query->row();
    }else {
      return false;
    }

  }

}


?>
