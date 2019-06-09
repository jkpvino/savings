<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper(array('admin_helper'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->model('admin_model');
    }

	public function index()
	{
        if(isAdminLogged()){
            $session_data = $this->session->userdata('adminlogged');
            redirect('admin/dashboard', 'refresh');
        }else{
        	//redirect('admin/login', 'refresh');
            $data = array(
                'title' => 'Login',
                'body_content' => 'login.php', 
            );
            $this->load->view('admin/login',$data);
        }
	}
    public function login(){
    	if(isAdminLogged()){
            $session_data = $this->session->userdata('adminlogged');
            redirect('admin/dashboard', 'refresh');
        }else{
	        $this->form_validation->set_rules('username', 'Username', 'trim|required');
	        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
	        if($this->form_validation->run() == FALSE)
	        {
	            $data = array(
	                'title' => 'Login',
	                'body_content' => 'login.php'
	            );
	            $this->load->view('admin/login',$data);
	        }else{      
	            redirect('admin/dashboard', 'refresh');
	        }
	    }
    }
    public function check_database($password){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->admin_model->isexists($username, $password);

        if($result){
            $sess_array = array();
            foreach($result as $row){
                $sess_array = array(
                 'id' => $row->id,
                 'username' => $row->username,
                 'roles'=> $row->roles
                );
                $this->session->set_userdata('adminlogged', $sess_array);
            }
            return TRUE;
        }else{
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    public function logout(){
        if(isAdminLogged()){
            $this->session->unset_userdata('adminlogged');
            $this->session->sess_destroy();
            redirect('admin', 'refresh');
        }else{
            redirect('admin', 'refresh');
        }
    }

    public function pageContent(){
        if(isAdminLogged()){
            $session_data = $this->session->userdata('adminlogged');        
            $_method = $this->router->fetch_method();   
            $pagecontent = array(
                'username' => $session_data['username'], 
                'logid' => $session_data['id'],
                'roles' => $session_data['roles'],
            );
        }else{
            $pagecontent = '';
        }
        return $pagecontent;
    }

    public function dashboard(){
        if(isAdminLogged()){
            $session_data = $this->session->userdata('adminlogged');        
            $_method = $this->router->fetch_method();   
            $data = array(
                'title' => 'Dashboard',
                'subtitle' => '',
                'body_content' => 'dashboard.php', 
                'pagecontent' => $this->pageContent(),
                'method' => $_method,
            );
            $this->load->view('admin/index',$data);
        }else{
            redirect('admin', 'refresh');
        }
    } 

    public function isAdminExists($password){
        $username = $this->input->post('username');
        $result = $this->admin_model->isadminuserexists($username);
        if($result){
            $this->form_validation->set_message('isAdminExists', 'Admin Username Already Exists');
            return false;
        }else{
            return true;
        }
    }
    public function addadmin(){
        if(isAdminLogged()){
            $session_data = $this->session->userdata('adminlogged');        
            $_method = $this->router->fetch_method();              
            $this->form_validation->set_rules('fullname', 'Name', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_isAdminExists');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');                
            if($this->form_validation->run() == TRUE){
                $records = array( 
                    'fullname' => trim($this->input->post('fullname')), 
                    'email' => trim($this->input->post('email')), 
                    'username' => trim($this->input->post('username')), 
                    'password' => trim($this->input->post('password')), 
                    'status' => trim($this->input->post('status'))
                );
                $results = $this->admin_model->saveAdmin($recordsy);
                $message = 'New Admin Account Created Successfully';
                $this->session->set_flashdata('flash_message',$message); 
                redirect('admin/manageadmin', 'refresh');
            }else{
                $data = array(
                    'title' => 'Admin',
                    'subtitle' => '',
                    'body_content' => 'shopadmin/add.php', 
                    'pagecontent' => $this->pageContent(),
                    'method' => $_method,
                );
                $this->load->view('admin/index',$data);
            }            
        }else{
            $message = 'You Dont have rights to access this page';
            $this->session->set_flashdata('flash_message',$message);  
            redirect('admin/manageadmin', 'refresh');
        }
    
    }
    public function manageadmin(){
        if(isAdminLogged()){
            $session_data = $this->session->userdata('adminlogged');        
            $_method = $this->router->fetch_method();  
            $data = array(
                'title' => 'Manage Admin',
                'subtitle' => '',
                'body_content' => 'shopadmin/manageadmin.php', 
                'pagecontent' => $this->pageContent(),
                'method' => $_method,
            );
            $this->load->view('admin/index',$data);
        }else{
            redirect('admin', 'refresh');
        }
    }
    public function adminlist() {
        $results = $this->admin_model->getadminlist();
        echo json_encode($results);
    }


}
