<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper(array('frontend_helper'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
    }

	public function index()
	{
			$data = array(
                'title' => 'Bluefills Homepage',
                'subtitle' => '',
                'body_content' => 'home', 
            );
            $this->load->view('index',$data);
	}
    public function login()
    {
        $data = array(
            'title' => 'Bluefills Homepage',
            'subtitle' => '',
            'body_content' => 'login', 
        );
        $this->load->view('index',$data);
    }
    public function register()
    {
        $data = array(
            'title' => 'Bluefills Homepage',
            'subtitle' => '',
            'body_content' => 'register', 
        );
        $this->load->view('index',$data);
    }

    public function aboutus()
    {
        $data = array(
            'title' => 'Bluefills :: About-us',
            'subtitle' => '',
            'body_content' => 'about-us', 
        );
        $this->load->view('index',$data);
    }

    public function schemes()
    {
        $data = array(
            'title' => 'Bluefills :: Schemes',
            'subtitle' => '',
            'body_content' => 'schemes', 
        );
        $this->load->view('index',$data);
    }

    public function contactus()
    {
        $data = array(
            'title' => 'Bluefills :: Contact-us',
            'subtitle' => '',
            'body_content' => 'contact-us', 
        );
        $this->load->view('index',$data);
    }

}
