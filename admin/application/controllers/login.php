<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
//class Login extends CI_Controller{

    function index() {
        if( $this->session->userdata('isLoggedIn') ) {
            redirect('/main/show_main');
        } else {
            $this->show_login(false);
        }
    }

function show_login( $show_error = false ) {

    $data['error'] = $show_error;
    $this->load->helper('form');
    $this->load->view('template/pages/myaccount/login_view',$data);

}
?>