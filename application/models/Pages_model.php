<?php
 
class Pages_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_all_user()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('user')->result_array();
    }
        
    function signup($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }

    function check_user($table, $where)
    {
        $this->db->order_by('id','desc');
        $check = $this->db->get_where($table,$where);
        return $check->result_array();
    }

    function get_username($mail)
    {
        return $this->db->get_where('user',array('email'=>$mail))->row_array();
    }

    function get_adminusername($mail)
    {
        return $this->db->get_where('admin',array('email'=>$mail))->row_array();
    }


}
