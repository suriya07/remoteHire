<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Company extends CI_Controller {
	public function __construct(){
		parent::__construct();	
		//$this->load->model('User_model','', TRUE);  
        $this->load->model('Company_model','', TRUE); 
	}
	
	public function checkUsersSession(){
		//Function to check user sesison data;
	}
	
	public function signup(){		
		$this->load->view('company/signup');
	}

	public function ValidateAndCreateAccount(){
        $this->form_validation->set_rules('inputFirstname', 'First name', 'required');
        $this->form_validation->set_rules('inputCompanyname', 'Company name', 'required');
        $this->form_validation->set_rules('inputCompanyURL', 'Company website', 'required');
        $this->form_validation->set_rules('inputSignupRole', 'Your role', 'required');
        $this->form_validation->set_rules('inputCompanyEmail', 'Email', 'required');
        $this->form_validation->set_rules('inputCompanypwd', 'Password', 'required');
        $this->form_validation->set_rules('inputContactPhone', 'Phone number', 'required|min_length[10]|max_length[10]');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('company/signup'); //Redirect to signup
        }else{
            //CALL MODEL TO INSERT OR UPDATE DATA                        
            if($this->Company_model->CompanySignup()==true){
                $data['name'] = $this->input->post('inptUserFName');
                $data['email'] = $this->input->post('inptEmail');
                $this->load->view('users/thanksMessage',$data);
            }else{
                $this->load->view('users/failure');
            }
        }
    }
    
    public function signin(){
        $this->load->view('company/signin');
    }

    public function ValidateAndSignin(){
        $this->form_validation->set_rules('inputCompanyEmail', 'Email', 'required');
        $this->form_validation->set_rules('inputCompanypwd', 'Password', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('company/signin'); //Redirect to signup
        }else{            
            $returnData=$this->Company_model->CompanySignin();
            if(!empty($returnData)){
                $cmpIDArr = explode('_', $returnData['compID']);
                $this->session->set_userdata($returnData);
                if($returnData['status']==0){
                    redirect('company/about');                    
                }else{
                    redirect('app/company/'.$returnData['compName'].'_'.$cmpIDArr[1]);
                }
            }else{
                $this->load->view('users/failure');
            }
        }
    }


    public function AboutCompany(){
        $this->load->library('session');
        $this->company_id = $this->session->userdata('compID');
        $companyProfile = $this->Company_model->GetCompanyInfoFromDB($this->company_id);
        $this->load->view('company/AboutCompany', $companyProfile);
    }

    public function getCompanyInfo(){
        $this->load->view('company/GetCompanyInfo');
    }

    public function UpdateCompanyInfo(){
        $this->form_validation->set_rules('inputCompanyLocation', 'Company location', 'required');
        $this->form_validation->set_rules('inputCompanyType', 'Company Type', 'required');
        $this->form_validation->set_rules('inputCompanySize', 'Company Size', 'required');
        $this->form_validation->set_rules('inputCompanyDescription', 'Company Description', 'required');
        $this->form_validation->set_rules('inputTwitterPage', 'Twitter URL', 'required');
        $this->form_validation->set_rules('inputFacebookPage', 'Facebook Page', 'required');
        $this->form_validation->set_rules('inputLinkedInPage', 'Linkedin URL', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('company/getCompanyInfo'); //Redirect to signup
        }else{
            if($this->Company_model->AddCompanyInfo()==3){
                $this->load->view('company/AboutCompany');
            }else{
                $this->load->view('company/GetCompanyInfo');
            }
        }
    }

    public function postJob(){
        $this->load->view('company/postJob');
    }

    public function ValidateandSaveJob(){
        $this->form_validation->set_rules('inputJobRole', 'Job title', 'required');
        $this->form_validation->set_rules('inputJobDescription', 'Job Description', 'required');
        $this->form_validation->set_rules('inputJobType', 'Job type', 'required');
        $this->form_validation->set_rules('inputJobPrimaryRole', 'Role', 'required');
        $this->form_validation->set_rules('inputJobExperience', 'Experience', 'required');
        $this->form_validation->set_rules('inputJobSkills', 'Skills', 'required');
        $this->form_validation->set_rules('inputJobLocation', 'Work Location', 'required');
        $this->form_validation->set_rules('inputJobMinSal', 'Minimum Salary', 'required');
        $this->form_validation->set_rules('inputJobMaxSal', 'Maximum Salary', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('company/postJob'); //Redirect to signup
        }else{
            if($this->Company_model->PostAJOB()==3){
                $this->load->view('company/AboutCompany');
            }else{
                $this->load->view('company/GetCompanyInfo');
            }
        }
    }

    public function viewAllJobs(){
        $this->load->library('session');
        $this->company_id = $this->session->userdata('compID');
        $jobStatus=0;
        $jobInfo = $this->Company_model->GetAllJobs($this->company_id, $jobStatus);
        $this->load->view('company/viewAllJobs', $jobInfo);
    }

    public function viewJob(){
        $this->load->view('company/viewJob');
    }
}