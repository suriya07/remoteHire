<?php
class Home extends CI_Controller {
	public function index(){
		$this->load->library('session');
		$this->load->view('home_landing');
	}
}
?>