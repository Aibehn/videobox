<?php
class Videos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Video_model');
        $this->load->helper('url_helper');
        $this->load->library('parser');

    }

    public function index()
    {
        $data['videos'] = $this->Video_model->get_videos();
        $data['title'] = 'Archivo de Videos';

        $this->load->view('templates/header', $data);
        $this->parser->parse('videos/video_archives_template', $data);
        //$this->load->view('videos/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($videoid = NULL)
    {
        $data['videos_item'] = $this->news_model->get_videos($videoid);

        if (empty($data['videos_item']))
        {
            show_404();
        }

        $data['title'] = $data['videos_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }


    public function upload()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Upload a video item';

        $this->form_validation->set_rules('title', 'Titulo', 'required');
        $this->form_validation->set_rules('text', 'Descripcion', 'required');
        $this->form_validation->set_rules('name', 'Nombre Archivo', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('videos/upload');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->Video_model->set_videos();
            $this->load->view('videos/sucess');
        }
    }
}