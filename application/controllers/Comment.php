<?php
 
class Comment extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Comment_model');
    } 

    /*
     * Listing of comment
     */
    function index()
    {
        $data['comment'] = $this->Comment_model->get_all_comment();
        
        $data['_view'] = 'comment/index';
        $this->load->view('templates/headeradmin');
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new comment
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'articleid' => $this->input->post('articleid'),
				'userid' => $this->input->post('userid'),
				'comment' => $this->input->post('comment'),
            );
            
            $comment_id = $this->Comment_model->add_comment($params);
            redirect(base_url().'index.php/Comment/index');
        }
        else
        {            
            $data['_view'] = 'comment/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a comment
     */
    function edit($commentid)
    {   
        // check if the comment exists before trying to edit it
        $data['comment'] = $this->Comment_model->get_comment($commentid);
        
        if(isset($data['comment']['commentid']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'articleid' => $this->input->post('articleid'),
					'userid' => $this->input->post('userid'),
					'comment' => $this->input->post('comment'),
					'date' => $this->input->post('date'),
                );

                $this->Comment_model->update_comment($commentid,$params);            
                redirect(base_url().'index.php/Comment/index');
            }
            else
            {
                $data['_view'] = 'comment/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The comment you are trying to edit does not exist.');
    } 

    /*
     * Deleting comment
     */
    function remove($commentid)
    {
        $comment = $this->Comment_model->get_comment($commentid);

        // check if the comment exists before trying to delete it
        if(isset($comment['commentid']))
        {
            $this->Comment_model->delete_comment($commentid);
            redirect(base_url().'index.php/Comment/index');
        }
        else
            show_error('The comment you are trying to delete does not exist.');
    }
    
}
