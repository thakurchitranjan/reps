<?php
/**
* 
*/
class Pagination extends User_Controller
{

    function Pagination()
    {
        parent::User_Controller();
    }
    
    function index()
    {
        $data ['title'] = 'Dashboard';
        $data ['main_content'] = 'template/user_account/dashboard';
        $this->load->view('template/user_account/include/template', $data);
    }
}