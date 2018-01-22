<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_validation extends CI_Controller {
    public function __construct(){
        parent::__construct();   
        //$this->load->helper('form');     
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('User_model','', TRUE);     
    }
    
    function ValidateSignup(){        
        $this->form_validation->set_rules('inptUserFName', 'Full Name', 'required');
        $this->form_validation->set_rules('inptUserLName', 'Full Name', 'required');
        $this->form_validation->set_rules('inptEmail', 'Email', 'required');
        $this->form_validation->set_rules('inptPassword', 'Password', 'required');
        $this->form_validation->set_rules('inptPhoneNo', 'Phone Number', 'required|min_length[10]|max_length[10]');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('users/signup'); //Redirect to signup
        }else{
            //CALL MODEL TO INSERT OR UPDATE DATA                        
            if($this->User_model->UserSignup()==true){
                $data['name'] = $this->input->post('inptUserFName');
                $data['email'] = $this->input->post('inptEmail');
                $this->load->view('users/thanksMessage',$data);
            }else{
                $this->load->view('users/failure');
            }
        }
    }

    function ValidateSignin(){
        $this->form_validation->set_rules('inputEmail', 'Email', 'required');
        $this->form_validation->set_rules('inputPassword', 'Password', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('users/signin'); //Redirect to signup
        }else{
            $returnData = $this->User_model->UserSignin();
            if(!empty($returnData)){
                $this->session->set_userdata($returnData);
                if($returnData['status']==0){
                    redirect('app/profile-basicInfo');
                }else{
                    redirect('app/profile');
                }
            }else{
                $this->load->view('users/failure');
            }
        }
    }

    function ValidateandSaveBasicInfo(){
        $this->form_validation->set_rules('inputMostRecentRole', 'Recent Designation', 'required');
        $this->form_validation->set_rules('inputMostRecentCompany', 'Recent Company', 'required');
        $this->form_validation->set_rules('inputCompanyLocation', 'Company Location', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('users/basic_config');            
        }else{
            if($this->User_model->UpdateBasicInfo() ==  2){
                redirect('app/profile'); 
            }else if($this->User_model->UpdatebasicInfo() ==  1){
                //ID INCREMNETOR UPDATE FAILED
            }else{
                //DB INSERT FAILED
            }
        }
    }

    function ValidateandSaveProfessionalInfo(){
        if($this->User_model->InsertUserCompanyDetails()==2){
            echo json_encode(array('status'=>0, 'code'=>200));
        }
    }

    function ValidateandSaveExperienceInfo(){
        if($this->User_model->InsertUserExperienceDetails()==2){
            echo json_encode(array('status'=>0, 'code'=>200));
        }
    }

    function ValidateandSaveEducationInfo(){
        if($this->User_model->InsertUserEducationDetails()==2){
            echo json_encode(array('status'=>0, 'code'=>200));
        }
    }

    function GetCompanyInfo($id){
        $returnData = $this->User_model->GetCandidateCompanyForID($id);
        echo json_encode($returnData);
    }

    function GetEducationInfo($id){
        $returnData = $this->User_model->GetCandidateEducationInfoForID($id);
        echo json_encode($returnData);
    }

    function GetSkillList(){
        $returnData = array();
        $returnData =$this->User_model->GetSkillDetails();
        echo json_encode( $returnData);
    }

    function UpdateSkillSet(){
        $returnData = array();
        $returnData = $this->User_model->UpdateSkillSet();
        if($returnData['status']==2){
            $returnData = array('status'=>0, 'code'=>200, 'skillName' =>$returnData['skillName']);
        }
        echo json_encode( $returnData);
    }

    function GetAllUsersSkills(){
        $returnData = array();
        $returnData = $this->User_model->GetAllUsersSkillSet(0);
        echo json_encode($returnData);
    }

    function GetFirst5UsersSkills(){
        $returnData = $this->User_model->GetAllUsersSkillSet(1);
        echo json_encode($returnData);
    }

    function GetUserProfileInfo($candidateID){
        $returnData = $this->User_model->GetUserProfileDetails($candidateID);
        echo json_encode($returnData);
    }

    function ValidateandUpdateProfileInfo(){
        if($this->User_model->UpdateProfileDetails()==2){
            echo json_encode(array('status'=>0, 'code'=>200));
        }
    }

    function GetSkillSetInfo(){
        $returnData = array();
        $returnData = $this->User_model->GetSkillSet();       
        echo json_encode( $returnData);
    }

    /*
    function ValidateandSavePersonalInfo(){
        $this->form_validation->set_rules('inputdateofBirth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('inputGender', 'Gender', 'required');
        $this->form_validation->set_rules('inputMaritalStatus', 'Marital Status', 'required');
        $this->form_validation->set_rules('inputCity', 'Recent City', 'required');
        $this->form_validation->set_rules('inputState', 'Recent State', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('users/personalInfo');
        }else{
            if($this->User_model->InsertUserPersonalDetails()){
                redirect('info/professional');
            }else{
                $this->load->view('users/failure');
            }            
        }
    }

    function ValidateandSaveCompanyInfo(){
        $this->form_validation->set_rules('inputCompanyName', 'Recent Company Name', 'required');
        $this->form_validation->set_rules('inptPreferLocation', 'Preffered Location', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('users/companyInfo');
        }else{
            if($this->User_model->InsertUserCompanyDetails()){
                redirect('info/other');
            }else{
                $this->load->view('users/failure');
            }
        }

    }

    function ValidateandSaveOtherInfo(){
        $this->form_validation->set_rules('inptLinkedInProfile', 'Recent Company Name', 'required');
        $this->form_validation->set_rules('inptGithubProfile', 'Preffered Location', 'required');
        if ($this->form_validation->run() == FALSE){
            //$this->load->view('users/extraInfo');
            redirect('app/dashboard');
        }else{
            if($this->User_model->InsertUserExtraDetails()){
                redirect('app/dashboard');
            }else{
                $this->load->view('users/failure');
            }
        }
    }
    */
}
?>