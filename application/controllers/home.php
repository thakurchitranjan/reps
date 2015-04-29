<?php

class Home extends CI_controller
{

    public function index()
    {
       $this->load->view('template/common/header');
       $this->load->view('template/pages/home');
       $this->load->view('template/common/footer');
    }


    Public function page()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/about');
        $this->load->view('template/common/footer');
    }

    Public function page_22()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/mission_values');
        $this->load->view('template/common/footer');
    }
    Public function page_33()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/BOD');
        $this->load->view('template/common/footer');
    }

    Public function page_44()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/awards');
        $this->load->view('template/common/footer');
    }

    Public function telecompage11()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/tower');
        $this->load->view('template/common/footer');
    }

    Public function telecompage12()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/Fiber');
        $this->load->view('template/common/footer');
    }

    Public function telecompage13()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/TOC');
        $this->load->view('template/common/footer');
    }

    Public function telecompage14()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/TSP');
        $this->load->view('template/common/footer');
    }
    Public function telecompage15()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/site_acquisition');
        $this->load->view('template/common/footer');
    }

    Public function powerpage11()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/hydro');
        $this->load->view('template/common/footer');
    }

    Public function powerpage12()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/sub_stations');
        $this->load->view('template/common/footer');
    }

    Public function power_yoga()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/py');
        $this->load->view('template/common/footer');
    }
    Public function weight_loss()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/wl');
        $this->load->view('template/common/footer');
    }
    Public function ayurvedapage()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/ayurveda');
        $this->load->view('template/common/footer');
    }
    Public function mediapage()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/media');
        $this->load->view('template/common/footer');
    }

    Public function contactpage()
    {
        $this->load->view('template/common/header');
        $this->load->view('template/pages/contact');
        $this->load->view('template/common/footer');
    }
 Public function email()
    {
$config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'mail.dranjanakalia.com',
    'smtp_port' => 25,
    'smtp_user' => 'ask@dranjanakalia.com',
    'smtp_pass' => 'Nilabh@12',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
	$this->load->library('email');
        $this->load->view('template/common/header');
        $this->load->view('template/pages/send_mail');
        $this->load->view('template/common/footer');
    }



}