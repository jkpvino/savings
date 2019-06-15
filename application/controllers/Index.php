<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
    }

	public function index()
	{
			$data = array(
                'title' => 'Bluefills Homepage',
                'subtitle' => '',
                'body_content' => 'home.php', 
            );
            $this->load->view('index',$data);
	}
	public function test()
	{
			$data = array(
                'title' => 'Bluefills Homepage',
                'subtitle' => '',
                'body_content' => 'home.php', 
            );
            $this->load->view('test',$data);
	}
}
