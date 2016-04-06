<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 4/2/16
 * Time: 3:48 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('parser');
    }

    public function index()
    {
        //TODO: Mostrar el perfil de usuario
    }

    public function login()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Login';

        $this->form_validation->set_rules('inputEmail', 'Email', 'required');
        $this->form_validation->set_rules('inputPassword', 'Password', 'required');


        //TODO: mejorar la validacion en el sistema mostrando errores si se introduce mal la contraseña

        if ($this->form_validation->run() === FALSE)
        {
            $this->parser->parse('templates/header', $data);
            $this->load->view('user/login');
            $this->load->view('templates/footer');
        
        }
        else
        {
            if($this->login_model->login())
            {
                redirect('home');
            }
            else
            {
                redirect('user/login');
            }
        }

    }

    public function logout()
    {
        $this->login_model->logout();
        redirect('home');
    }

    public function profile($user_id)
    {
        $profile=$this->login_model->profile($user_id);

        $data=array(
            'title' => "Perfil"
        );

        //Load View
        $this->parser->parse('templates/header', $data);
        $this->parser->parse('user/profile',$profile);
        $this->load->view('templates/footer');
    }

    public function logged_in()
    {
        return $this->login_model->logged_in();
    }
}
