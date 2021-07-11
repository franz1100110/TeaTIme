<?php
class Comment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_comment($commentid)
    {
        return $this->db->get_where('comment',array('commentid'=>$commentid))->row_array();
    }
        
    function get_all_comment()
    {
        $this->db->order_by('commentid', 'desc');
        return $this->db->get('comment')->result_array();
    }
      
    function add_comment($params)
    {
        $this->db->insert('comment',$params);
        return $this->db->insert_id();
    }
    
    function update_comment($commentid,$params)
    {
        $this->db->where('commentid',$commentid);
        return $this->db->update('comment',$params);
    }
    
    function delete_comment($commentid)
    {
        return $this->db->delete('comment',array('commentid'=>$commentid));
    }

    function get_article_comment($articleid)
    {
        return $this->db->get_where('comment',array('articleid'=>$articleid))->row_array();
    }
}
