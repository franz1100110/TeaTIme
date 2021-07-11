<?php
 
class Article extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
    } 

    /*
     * Listing of article
     */
    function index()
    {
        $data['article'] = $this->Article_model->get_all_article();
        $data['_view'] = 'article/index';
        $this->load->view('templates/headeradmin');
        $this->load->view('layouts/main',$data);
    }

    function home()
    {
        $data['article'] = $this->Article_model->get_all_article();
        $data['_view'] = 'article/home';
        $this->load->view('templates/header');
        $this->load->view('layouts/main',$data);
    }

    function specific($id)
    {
        $data['article'] = $this->Article_model->get_article($id);
        $data['_view'] = 'article/specific';
        $this->load->view('templates/header');
        $this->load->view('layouts/main',$data);
    }

    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'judul' => $this->input->post('judul'),
				'paragraph1' => $this->input->post('paragraph1'),
				'paragraph2' => $this->input->post('paragraph2'),
				'photo' => $this->input->post('photo'),
				'tanggal' => $this->input->post('tanggal'),
            );
            
            $article_id = $this->Article_model->add_article($params);
            redirect(base_url().'index.php/Article/index');
        }
        else
        {            
            $data['_view'] = 'article/add';
            $this->load->view('templates/header');
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id)
    {   
        $data['article'] = $this->Article_model->get_article($id);
        
        if(isset($data['article']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'judul' => $this->input->post('judul'),
					'paragraph1' => $this->input->post('paragraph1'),
					'paragraph2' => $this->input->post('paragraph2'),
					'photo' => $this->input->post('photo'),
					'tanggal' => $this->input->post('tanggal'),
                );

                $this->Article_model->update_article($id,$params);            
                redirect(base_url().'index.php/Article/index');
            }
            else
            {
                $data['_view'] = 'article/edit';
                $this->load->view('templates/header');
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The article you are trying to edit does not exist.');
    } 

    function remove($id)
    {
        $article = $this->Article_model->get_article($id);
        if(isset($article['id']))
        {
            $this->Article_model->delete_article($id);
            redirect(base_url().'index.php/Article/index');
        }
        else
            show_error('The article you are trying to delete does not exist.');
    }
    
}
