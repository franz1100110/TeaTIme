<?php
 
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    } 

    /*
     * Listing of admin
     */
    function index()
    {
        $data['admin'] = $this->Admin_model->get_all_admin();
        
        $data['_view'] = 'Admin/index';

	    $this->load->view('templates/headeradmin');
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new admin
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
            );
            
            $admin_id = $this->Admin_model->add_admin($params);
            redirect(base_url().'index.php/Admin/index');
        }
        else
        {            
            $data['_view'] = 'Admin/add';
            $this->load->view('templates/header');
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a admin
     */
    function edit($id)
    {   
        // check if the admin exists before trying to edit it
        $data['admin'] = $this->Admin_model->get_admin($id);
        
        if(isset($data['admin']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
                );

                $this->Admin_model->update_admin($id,$params);            
                redirect(base_url().'index.php/Admin/index');
            }
            else
            {
                $data['_view'] = 'Admin/edit';
                $this->load->view('templates/header');
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Admin yang ingin diedit tidak ada!');
    } 

    /*
     * Deleting admin
     */
    function remove($id)
    {
        $admin = $this->Admin_model->get_admin($id);

        // check if the admin exists before trying to delete it
        if(isset($admin['id']))
        {
            $this->Admin_model->delete_admin($id);
            redirect(base_url().'index.php/Admin/index');
        }
        else
            show_error('Admin yang ingin dihapus tidak ada!');
    }
    
}
