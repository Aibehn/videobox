<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Videos extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Video_model');
        $this->load->helper('url_helper');
        $this->load->library('parser');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['videos'] = $this->Video_model->get_videos();
        $data['title'] = 'Videos subidos';
        $this->parser->parse('templates/header', $data);
        $this->parser->parse('videos/video_archives_template', $data);
        //$this->load->view('videos/index', $data);
        $this->load->view('templates/footer');
    }
    public function view($videoid = NULL)
    {
        //$data['videos_item'] = $this->Video_model->get_videos($videoid);
        $data = $this->Video_model->get_videos($videoid);
        if (empty($data))
        {
            show_404();
        }
        //Load View
        $this->parser->parse('templates/header', $data);
        if ($data['mpeg-dash'])
        {
            $this->parser->parse('videos/view-dash', $data);
        }
        else
        {
            $this->parser->parse('videos/view', $data);
        }
        $this->load->view('templates/footer');
    }

}