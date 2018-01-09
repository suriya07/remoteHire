<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();	
	}
	
	public function signup(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('users/signup');
	}

	public function signin(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('users/signin');
	}

	public function personalInfo(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->view('users/personalInfo', $this->session->userdata());
	}

	public function professionalInfo(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('users/professionalInfo');
	}

	public function companyInfo(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('users/companyInfo');
	}

	public function extraInfo(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('users/extraInfo');
	}

	public function basicProfileInfo(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('users/basic_config');
	}
}
?>