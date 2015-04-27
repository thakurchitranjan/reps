<?php

class Home extends CI_controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('tank_auth');
    }

    public function index()
    {

        $this->load->view('template/common/header');
        $this->load->view('template/module/carousel');
        $this->load->view('template/module/content1');
         $this->load->view('template/module/whatwedo');
        $this->load->view('template/pages/website_maintenance');
        $this->load->view('template/common/footer');

    }

    function register()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/register/');
        } else {
            $data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $this->load->view('welcome', $data);
        }
    }

    Public function pages($cms = 'aboutus')
    {
        $this->load->model('data_model');
        $data['rows'] = $this->data_model->getAll1($cms);
        $this->load->view('template/common/header');
        $this->load->view('template/pages/aboutus', $data);

        $this->load->view('template/common/footer');
    }
    Public function view($cms='portfolio')
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/portfolio');
        $this->load->view('template/common/footer');
    }
    Public function services($cms = 'aboutus')
    {
        $this->load->model('data_model');
        $data['rows'] = $this->data_model->getAll1($cms);
        $this->load->view('template/common/header');
        $this->load->view('template/pages/services', $data);
        $this->load->view('template/common/footer');
    }

    Public function clients($cms = 'aboutus')
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/list');
        $this->load->view('template/common/footer');
    }
    Public function contactus($cms = 'aboutus')
    {
        $this->load->model('data_model');
        $data['rows'] = $this->data_model->getAll1($cms);
        $this->load->view('template/common/header');
        $this->load->view('template/pages/address', $data);
        $this->load->view('template/common/footer');
    }
    Public function web()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/website_maintenance_services');
        $this->load->view('template/common/footer');
    }




}