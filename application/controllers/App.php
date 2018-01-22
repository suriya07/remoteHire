<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class App extends CI_Controller {
	public function __construct(){
		parent::__construct();	
		$this->checkUsersSession();
		$this->load->model('User_model','', TRUE); 
	}
	
	public function checkUsersSession(){
		//Function to check user sesison data;
		$this->load->library('session');
		$sess_id = $this->session->userdata('usrID');
		if(empty($sess_id)){
			redirect('/');
		}
	}
	public function home(){
		echo "page develoment is in progress";
	}

	public function showProfile(){
		$usrProfileData = $this->User_model->GetuserInfo(0, array());
		$this->load->view('users/profileAddEdit', $usrProfileData);
	}

	public function viewPublicProfile($profileID){
		$userDetailsArr = explode("-",$profileID);
		$usrProfileData = $this->User_model->GetuserInfo(1,$userDetailsArr);
		$this->load->view('users/profileAddEdit', $usrProfileData);
	}
	public function findJobs(){
		/*$email ='suriya227@gmail.com';
		$config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.infoship.in',
            'smtp_port' => 25,
            'smtp_user' => 'websolutions@infoship.in', // change it to yours
            'smtp_pass' => '#webSol@123!', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $this->email->set_newline("\r\n");
        //80/3535 addition port also
        $this->load->library('email', $config);
        $this->email->from('websolutions@infoship.in', "infoship.in");
        $this->email->to($email);
        //$this->email->cc("ifoshipteam@gmail.com");
        $this->email->subject($subject);
        $this->email->message($strEmai);
        $this->email->set_mailtype("html");
        if ($this->email->send()) {
        //$this->email->print_debugger();
             // echo "successfulllll";
        } else {
            return show_error($this->email->print_debugger());
		}*/
		$jobInfo = $this->User_model->GetAllMatchingJobs();
		
		$this->load->view('users/findjobs', $jobInfo);
	}

	public function clearUserSession(){
		$this->load->library('session');
		$clientSessionArray = array('usrFName', 'usrLName', 'status', 'usrID');
		$this->session->unset_userdata($clientSessionArray);
		redirect('/');
	}
}