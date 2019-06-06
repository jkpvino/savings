<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getAdminInfobyId($id){
	$CI = get_instance();
	$CI->load->model('admin_model');
	$userinfo = $CI->admin_model->getadmininfobyId($id);
	$result = $userinfo[0];
	return $result;
}

function isAdminLogged(){
	$CI = get_instance();
    $CI->load->library('session');
	if($CI->session->userdata('adminlogged')){
		return true;
	}else{
		return false;
	}
}