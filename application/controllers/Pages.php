<?php
 
class Pages extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pages_model');
    } 

    function index()
    {
        $data['pages'] = $this->Pages_model->get_all_user();
        $data['_view'] = 'Pages/login';
        $this->load->view('layouts/main',$data);
    }

    function login()
    {
        $this->load->view('Pages/login');
    }

    function loginact()
    {
        $mail = $this->input->post('email');
        $pass = $this->input->post('password');
        $data = array(
            'email' => $mail,
            'password' => $pass,
        );
        $check = count($this->Pages_model->check_user("user",$data));
        if($check == 1){
            $username = $this->Pages_model->get_username($mail);
            $name = $username['username'];
            $data_session = array(
                'nama' => $name,
                'status' => "logged in",
            );
            $this->session->set_userdata($data_session);
            redirect(base_url()."index.php/Article/home");
        }
        else{
            redirect('index.php/Pages/login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('index.php/Article/home');
    }

    function signup()
    {
        $this->load->view('Pages/login');
    }

    function signupact()
    { 
            $params = array(
				'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
            );
            $this->Pages_model->signup($params);
            $data_session = array(
                'nama' =>$params['username'],
                'status' =>"logged in",
            );
            $this->session->set_userdata($data_session);
            redirect('index.php/Article/home');
    }

    function loginadmin()
    {
        $this->load->view('Pages/loginadmin');
    }

    function loginadminact()
    {
        $mail = $this->input->post('email');
        $pass = $this->input->post('password');
        $data = array(
            'email' => $mail,
            'password' => $pass,
        );
        $check = count($this->Pages_model->check_user("admin",$data));
        if($check == 1){
            $username = $this->Pages_model->get_adminusername($mail);
            $name = $username['username'];
            $data_session = array(
                'nama' => $name,
                'status' => "logged in",
            );
            $this->session->set_userdata($data_session);
            redirect(base_url()."index.php/Article/index");
        }
        else{
            redirect('index.php/Pages/loginadmin');
        }
    }

    function about()
    {
        $this->load->view('templates/header');
        $this->load->view('Pages/about');
    }

    function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('Pages/contact');
    }
    
}
