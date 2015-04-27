<?php
/**
* 
*/
if (! defined('BASEPATH')) {exit('No direct script access allow');}

class User_Controller extends Controller 
{
    function User_Controller()
    {
        parent::Controller();
        $this->activeUser();
    }
    
    function activeUser()
    {
        $activeUser = $this->session->userdata('activeUser');
        
        if(!isset($activeUser) || $activeUser !=true) 
        {
            $this->session->flashdata('error', 'You must login before going to this page');
            redirect('template/user_account/login');
        }
    }
}