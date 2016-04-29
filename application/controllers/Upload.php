<?php

class Upload extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->load->helper(array('form', 'url'));
	    $this->load->model('Video_model');
		$this->load->library('parser');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Upload a video item';
		$this->parser->parse('templates/header', $data);
		req_logged_in();        
		$this->load->view('upload/upload_form', array('error' => ' ' ));
		$this->load->view('templates/footer');
	}

	public function do_upload()
	{
	        
		$config['upload_path']          = '/var/www/videobox/content/videos_upload_tmp';
		$config['allowed_types']        = 'mp4|webm|avi';
		$config['max_size']             = 150000;
		$config['encrypt_name']			= TRUE;

		$this->load->library('upload', $config);
		$data['title'] = 'Upload a video item';

		$this->form_validation->set_rules('title', 'Titulo', 'required');
	    $this->form_validation->set_rules('text', 'Descripcion', 'required');


	    if ($this->form_validation->run()) {
			if ($this->upload->do_upload('userfile')){
		        
		        	$data2 = array('upload_data' => $this->upload->data());


				$this->parser->parse('templates/header', $data);
	            		$this->load->view('videos/sucess', $data2);
				$this->load->view('templates/footer');

				$name      = ($this->upload->data('file_name'));
				$videoid   = ($this->upload->data('raw_name'));
				$mpeg_dash = ($this->input->post('mpeg-dash'))?1:0;
				
				$ruta_upload=$config['upload_path'];
				$this->Video_model->set_videos($videoid, $name);

				$wowza_dir = exec('/var/www/videobox/content/trabajoWeb.sh ' .$ruta_upload.'/'.$name);
				
				if ($mpeg_dash == 1)
				{	
					$script2 = exec('/var/www/videobox/content/trabajoDash.sh ' .$wowza_dir."/".$name);
					
				}
				
		               $this->db->reconnect();

			}
			else{
				
				$error = array('error' => $this->upload->display_errors('<div class="alert alert-danger" role="alert">','</div>'));

				$this->parser->parse('templates/header', $data);
	            $this->load->view('upload/upload_form', $error);
				$this->load->view('templates/footer');
			}
		}
		else{
			
			$error = array('error' => $this->upload->display_errors('<div class="alert alert-danger" role="alert">','</div>'));

			$this->parser->parse('templates/header', $data);
	        $this->load->view('upload/upload_form', $error);
			$this->load->view('templates/footer');
		}

	}
}

