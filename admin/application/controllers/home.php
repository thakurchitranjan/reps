<?php

class Home extends CI_controller
{
    function __construct()
    {
        parent::__construct();

//        $this->load->helper('url');
        $this->load->library('tank_auth');
    }

    function index()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        } else {
            $data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $this->load->view('template/common/header', $data);
            $this->load->view('template/pages/dashboard');
            $this->load->view('template/common/footer');
        }
    }
    Public function billing()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
        else {
            $data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $this->load->view('template/common/header', $data);
            $this->load->view('template/pages/invoices');
            $this->load->view('template/common/footer');
        }
    }

    Public function request()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
        else {
            $data['user_id']	= $this->tank_auth->get_user_id();
            $data['username']	= $this->tank_auth->get_username();
            $this->load->view('template/common/header', $data);
            $this->load->view('template/pages/new_request');
            $this->load->view('template/common/footer');
        }
    }
    Public function change_plan ()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
        else {
        $data['user_id']	= $this->tank_auth->get_user_id();
        $data['username']	= $this->tank_auth->get_username();
        $this->load->view('template/common/header', $data);
        $this->load->view('template/pages/plan');
        $this->load->view('template/common/footer');
        }
    }

    Public function my_account()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
        else {
        $data['user_id']	= $this->tank_auth->get_user_id();
        $data['username']	= $this->tank_auth->get_username();
        $this->load->view('template/common/header', $data);
        $this->load->view('template/pages/myaccount/myprofile');
        $this->load->view('template/common/footer');

        }
    }
    Public function contact()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
        else {
        $data['user_id']	= $this->tank_auth->get_user_id();
        $data['username']	= $this->tank_auth->get_username();
        $this->load->view('template/common/header', $data);
        $this->load->view('template/pages/contact');
        $this->load->view('template/common/footer');

        }
    }
}