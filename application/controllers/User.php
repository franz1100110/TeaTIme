<?php
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
        
        $data['_view'] = 'User/index';
        $this->load->view('templates/headeradmin');
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->view('templates/headeradmin');
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect(base_url().'index.php/User/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id)
    {   
        $this->load->view('templates/headeradmin');
        $data['user'] = $this->User_model->get_user($id);
        
        if(isset($data['user']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
                );

                $this->User_model->update_user($id,$params);            
                redirect(base_url().'index.php/User/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($id)
    {
        $user = $this->User_model->get_user($id);

        // check if the user exists before trying to delete it
        if(isset($user['id']))
        {
            $this->User_model->delete_user($id);
            redirect(base_url().'index.php/User/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
