<?php
class User_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        // Your own constructor code
    }

    public function GetAccountDetails(){
        $query = $this->db->get('profile_id_generator', 1);
        return $query->row();       
        
    }

    public function UserSignup(){
        $qryResult = $this->GetAccountDetails();
        $this->user_fname = $this->input->post('inptUserFName');
        $this->user_lname = $this->input->post('inptUserLName');
        $this->email = $this->input->post('inptEmail');
        $this->phone = $this->input->post('inptPhoneNo');
        $this->password = $this->input->post('inptPassword');
        $this->status = 0;$this->user_id = 'CAN_'.$qryResult->NEXT_USR_ID;
        $this->account_created_time = time();
        $this->last_login_time = time();
        $this->is_email_verfied = 0;
        $this->db->insert('user_login_info', $this);
        if($this->db->affected_rows() != 1){
            return false;    
        }else{
            $NEXT_USR_ID = $qryResult->NEXT_USR_ID+1;
            $updateData = array('LAST_USED_USRID'=>$this->user_id,'NEXT_USR_ID'=>$NEXT_USR_ID);
            $this->db->update('profile_id_generator',$updateData);
            return ($this->db->affected_rows() != 1)?false:true;
        }
    }

    public function UserSignin(){
        $usrdata = array();
        $this->email = $this->input->post('inputEmail');
        $this->password = $this->input->post('inputPassword');
        $query = $this->db->get_where('user_login_info', array('email' => $this->email, 'password'=>$this->password));
        if($query->num_rows()!=0){
            $usrdata['usrFName'] = $query->row('USER_FNAME');
            $usrdata['usrLName'] = $query->row('USER_LNAME');
            $usrdata['usrPasswd'] = $query->row('PASSWORD');
            $usrdata['status'] = $query->row('STATUS');
            $usrdata['usrID'] = $query->row('USER_ID');
        }
        return $usrdata;
    }

    /*
    **************************************************
    Function UpdatebasicInfo()
    Role : To Update candidate's recent company info on firts login
    I/P  : Role, Company Name, Location
    o/P  : Returns True on success, False on Failure
    **************************************************
    */
    public function UpdateBasicInfo(){

        $qryResult = $this->GetAccountDetails();
        
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $userID = $this->session->userdata('usrID');

        $this->user_id = $userID;  
        $this->user_company_id = intval($qryResult->USER_COMPANY_ID)+1;      
        $this->role_h1  = $this->input->post('inputMostRecentRole');
        $this->company_name = $this->input->post('inputMostRecentCompany');
        $this->company_location = $this->input->post('inputCompanyLocation');
        $this->db->insert('user_company_info', $this);
        if($this->db->affected_rows() != 1){
            return 0;    
        }else{
            $this->db->where('user_id',$userID); 
            $this->db->set('status',1);
            $this->db->update('user_login_info');
            
            $updateData = array('USER_COMPANY_ID'=>$this->user_company_id);
            $this->db->update('profile_id_generator',$updateData);
            return ($this->db->affected_rows() != 1)?1:2;
        }

    }

    public function GetuserInfo($publicView=0, $userdetailsArr){
        if($publicView==0){
            $this->load->library('session');
            $userID = $this->session->userdata('usrID');
        }else{
            $userID = 'CAN_'.$userdetailsArr[2];
        }
        
        $this->db->select("*");
        $this->db->from("user_login_info");
        $this->db->where('user_id', $userID);        
        $query = $this->db->get();        
        $usrloginInfo = $query->result_array();
        
        $this->db->select("*");
        $this->db->from("user_company_info");
        $this->db->where('user_id', $userID);
        $this->db->order_by("company_worked_from", "desc");
        $query = $this->db->get();        
        $usrCompanyInfo = $query->result_array();

        $this->db->select("*");
        $this->db->from("user_experience_info");
        $this->db->where('user_id', $userID);
        //$this->db->limit(5);
        $query = $this->db->get();
        $usrExperienceInfo = $query->result_array();

        $this->db->select("*");
        $this->db->from("user_education_info");
        $this->db->where('user_id', $userID);
        $query = $this->db->get();        
        $usrEducationInfo = $query->result_array();

        return array('isPublicView'=>$publicView, 'userInfo'=>$usrloginInfo, 'userCompanyInfo'=>$usrCompanyInfo, 'userExperienceInfo'=>$usrExperienceInfo, 'userEducationInfo'=>$usrEducationInfo);
    }

    public function InsertUserCompanyDetails(){              
       // print_r($this->input->post());        exit;
        $this->load->library('session');
        $userID = $this->session->userdata('usrID');

        $this->user_id = $userID;  
        $this->company_name = $this->input->post('inputCompany');
        $this->company_location = $this->input->post('inputCompanyLocation');
        $this->role_h1  = $this->input->post('inputRoleTitle');
        $this->company_worked_from = $this->input->post('inputCompanyFrmDt')."-01";
        
        if(!$this->input->post('inputIsCurrtCompany')){
            $this->company_worked_till = $this->input->post('inputCompanyToDt')."-01";
            $datetime1 = new DateTime($this->input->post('inputCompanyFrmDt')."-01");
            $datetime2 = new DateTime($this->input->post('inputCompanyToDt')."-01");
            $interval = $datetime1->diff($datetime2);
            $month = $interval->m + $interval->y * 12;
            $years = intval(intval($month)/12);
            $months = intval($month)%12;
            $this->experience_in_yrs = $years;
            $this->experience_in_months = $months;            
            $this->is_current_company = 0;
        }else{
            $this->is_current_company = 1;
            $this->company_worked_till = NULL;
            $this->experience_in_yrs = NULL;
            $this->experience_in_months = NULL;            
        }
        
        if($this->input->post('inputIsInsertorUpdate')==0){
            $qryResult = $this->GetAccountDetails();
            $this->user_company_id = intval($qryResult->USER_COMPANY_ID)+1;
            $this->db->insert('user_company_info', $this);
        }else if($this->input->post('inputIsInsertorUpdate')==1){
            //$this->user_company_id = intval($this->input->post('inputuserCompanyID'));
            $data=array('COMPANY_NAME'=>$this->company_name,
            'COMPANY_LOCATION'=>$this->company_location,'ROLE_H1'=>$this->role_h1,
            'COMPANY_WORKED_FROM'=>$this->company_worked_from,'COMPANY_WORKED_TILL'=>$this->company_worked_till,
            'EXPERIENCE_IN_YRS'=>$this->experience_in_yrs,'EXPERIENCE_IN_MONTHS'=>$this->experience_in_months,
            'IS_CURRENT_COMPANY'=>$this->is_current_company
            );
            $this->db->where('user_id',$this->user_id);
            $this->db->where('user_company_id',intval($this->input->post('inputuserCompanyID')));
            $this->db->update('user_company_info',$data);
        }
        
        if($this->db->affected_rows() != 1){
            return 0;    
        }else{
            if($this->input->post('inputIsInsertorUpdate')==0){
                $updateData = array('USER_COMPANY_ID'=>$this->user_company_id);
                $this->db->update('profile_id_generator',$updateData);
                return ($this->db->affected_rows() != 1)?1:2;
            }else{
                return 2;
            }
        }
        
    }

    public function InsertUserExperienceDetails(){              
        $skillName = $this->input->post('inputSkillTitle');       
        $this->load->library('session');

        $this->user_id = $this->session->userdata('usrID');
        $qryResult = $this->GetAccountDetails();
        $this->user_experience_id = intval($qryResult->USER_EXPERIENCE_ID)+1; 
        $this->skill_name = $skillName;
        $this->db->insert('user_experience_info', $this);
        if($this->db->affected_rows() != 1){
            return 0;    
        }else{
            $updateData = array('USER_EXPERIENCE_ID'=>$this->user_experience_id);
            $this->db->update('profile_id_generator',$updateData);
            return ($this->db->affected_rows() != 1)?1:2;
        }
    }

    public function InsertUserEducationDetails(){
        $this->load->library('session');
        $this->user_id = $this->session->userdata('usrID');
        $this->institution_name = $this->input->post('inputSchoolName');
        $this->institution_title = $this->input->post('inputDegreeTitle');
        $this->education_field  = $this->input->post('inputSpecializedStream');
        $this->studied_from = $this->input->post('inputEducationFrmDt')."-01";

        if($this->input->post('inputIsInsertorUpdate')==0){
            $this->studied_till = $this->input->post('inputEducationToDt')."-01";
            $qryResult = $this->GetAccountDetails();
            $this->user_education_id = intval($qryResult->USER_EDUCATION_ID)+1;
            $this->db->insert('user_education_info', $this);
        }else if($this->input->post('inputIsInsertorUpdate')==1){
            $data=array('INSTITUTION_NAME'=>$this->institution_name,
            'INSTITUTION_TITLE'=>$this->institution_title,
            'EDUCATION_FIELD'=>$this->education_field,'STUDIED_FROM'=>$this->studied_from,
            'STUDIED_TILL'=>$this->input->post('inputEducationToDt')."-01"
            );
            $this->db->where('user_id',$this->user_id);
            $this->db->where('user_education_id',intval($this->input->post('inputuserEducationID')));
            $this->db->update('user_education_info',$data);
        }

        if($this->db->affected_rows() != 1){
            return 0;    
        }else{
            if($this->input->post('inputIsInsertorUpdate')==0){
                $updateData = array('USER_EDUCATION_ID'=>$this->user_education_id);
                $this->db->update('profile_id_generator',$updateData);
                return ($this->db->affected_rows() != 1)?1:2;
            }else{
                return 2;
            }
        }
    }

    public function GetCandidateCompanyForID($id){
        $this->load->library('session');
        $userID = $this->session->userdata('usrID');
        $query = $this->db->get_where('user_company_info', array('user_id' => $userID, 'user_company_id'=>$id));        
        $usrCompanyInfo = $query->result_array();
        return $usrCompanyInfo[0];
    }

    public function GetCandidateEducationInfoForID($id){
        $this->load->library('session');
        $userID = $this->session->userdata('usrID');
        $query = $this->db->get_where('user_education_info', array('user_id' => $userID, 'user_education_id'=>$id));        
        $usrEducationInfo = $query->result_array();
        return $usrEducationInfo[0];
    }

    public function GetSkillDetails(){
        $skillName = $this->input->post('inputSkillTitle');   
        $this->db->select('skill_id');
        $this->db->select('skill_name');
        $this->db->from('predefine_list');
        $this->db->like('skill_name', $skillName, 'both');  
        $query = $this->db->get();
        return $query->result_array();
    }

    public function GetSkillSet(){
        $skillID = $this->input->post('inputSkillTitle');   
        $this->db->select('skill_id');
        $this->db->select('skill_name');
        $this->db->from('predefine_list');
        $this->db->where('skill_id', $skillID);  
        $query = $this->db->get();
        return $query->result_array();
    }
    

    public function UpdateSkillSet(){
        if($this->input->post('isCandidate')==1){
            $this->load->library('session');
            $query = $this->db->get_where('predefine_list', array('skill_id' => $this->input->post('inputSkillID')));  
            $skillSetArray = $query->result_array();  
    
            if(!empty($skillSetArray)&& is_array($skillSetArray)){
                $qryResult = $this->GetAccountDetails();
                $this->user_id = $this->session->userdata('usrID');
                $this->skill_id = $skillSetArray[0]['SKILL_ID'];
                $this->user_experience_id = intval($qryResult->USER_EXPERIENCE_ID)+1; 
                $this->skill_name = $skillSetArray[0]['SKILL_NAME'];
                $this->db->insert('user_experience_info', $this);
                if($this->db->affected_rows() != 1){
                    return array('status'=>0);    
                }else{
                    $updateData = array('USER_EXPERIENCE_ID'=>$this->user_experience_id);
                    $this->db->update('profile_id_generator',$updateData);
                    return ($this->db->affected_rows() != 1)?array('status'=>1):array('status'=>2, 'skillName'=>$skillSetArray[0]['SKILL_NAME']);
                }
            }
        }
    }

    public function GetAllUsersSkillSet($limit){
        $this->load->library('session');
        $userID = $this->session->userdata('usrID');
        $this->db->select("*");
        $this->db->from("user_experience_info");
        $this->db->where('user_id', $userID);
        if($limit){
            $this->db->limit(5);
        }
        $query = $this->db->get();        
        $usersAllSkills = $query->result_array();
        return $usersAllSkills;
    }

    public function GetUserProfileDetails($candidateID){
        $this->db->select("*");
        $this->db->from("user_login_info");
        $this->db->where('user_id', $candidateID);
        $query = $this->db->get();  
        $usersInfoDetails = $query->result_array();

        $this->db->select("*");
        $this->db->from("user_company_info");
        $this->db->where('user_id', $candidateID);
        $this->db->order_by("company_worked_from", "desc");
        $this->db->limit(1);
        $query = $this->db->get();        
        $usrCompanyInfo = $query->result_array();

        return array("usersInfoDetails"=>$usersInfoDetails, "usrCompanyInfo"=>$usrCompanyInfo);
    }

    public function UpdateProfileDetails(){
        $this->load->library('session');
        $this->user_id = $this->session->userdata('usrID');
        $this->USER_FNAME = $this->input->post('inputUserFname');
        $this->USER_LNAME = $this->input->post('inputUserLname');
        $this->PROFILE_SUMMARY = $this->input->post('inputUserSummary');

        //$this->PROFILE_SUMMARY = str_replace("\n", "<br/>", $this->PROFILE_SUMMARY);
        $updateData = array('USER_FNAME'=>$this->USER_FNAME,'USER_LNAME'=>$this->USER_LNAME, 'PROFILE_SUMMARY'=>$this->PROFILE_SUMMARY);
        $this->db->where('user_id', $this->user_id); 
        $this->db->update('user_login_info',$updateData);
        if($this->db->affected_rows() != 1){
            return 0;
        }else{
            $this->COMPANY_NAME  = $this->input->post('inputRecentCompany');        
            //$skillName = $this->input->post('inputIsInsertorUpdate');
            //$skillName = $this->input->post('inputRecentCompany');
            return 2;
        }
    }

    public function GetAllMatchingJobs(){
        $this->load->library('session');
        $user_id = $this->session->userdata('usrID');
        $sql = "SELECT C.JOB_ID, C.JOB_TITLE, C.JOB_DESCRIPTION, C.JOB_TYPE, C.JOB_ROLE, C.JOB_EXPERIENCE, C.JOB_SKILLS, C.JOB_LOCATION, C.MIN_SAL, C.MAX_SAL, C.DATE_POSTED, B.SKILL_ID FROM COMPANY_JOB_INFO AS C, USER_EXPERIENCE_INFO AS B, JOB_SKILL_ID AS A WHERE C.JOB_ID = A.JOB_ID AND B.SKILL_ID = A.SKILL_ID AND B.USER_ID=?";        
        $query = $this->db->query($sql, array($user_id));
        $returnData = $query->result_array();
        return array('jobInfo'=>$returnData);
    }

    /*
    public function InsertUserPersonalDetails(){
        $this->load->library('session');
        $userID = $this->session->userdata('usrID');
        $this->user_id = $userID;
        $this->dateofbirth = $this->input->post('inputdateofBirth');
        $this->gender = $this->input->post('inputGender');
        $this->marital_status = $this->input->post('inputMaritalStatus');
        $this->current_city = $this->input->post('inputCity');
        $this->current_state = $this->input->post('inputState');
        $this->info_created_time = time();
        $this->info_updated_time = time();
        $this->db->insert('user_personal_info', $this);    
        if($this->db->affected_rows() != 1){
            return false;    
        }else{
            $this->db->where('user_id',$userID); 
            $this->db->set('status',1);
            $this->db->update('user_login_info');
            if($this->db->affected_rows() != 1){
                return false;
            }else{
                return true;
            }
        }    
    }

    public function InsertUserProfessionalDetails(){
        $this->load->library('session');
        $userID = $this->session->userdata('usrID');
        $this->user_id = $userID;
        $this->profile_title = $this->input->post('inputTitle');
        $this->profile_summary = $this->input->post('inputSummary');
        $this->area_of_experience = $this->input->post('inputExpertiseIn');
        $this->experience_span = ($this->input->post('inputexperinceinYrs')*12)+$this->input->post('inputexperinceinMnths');
        $this->experience_skills = $this->input->post('inputExpertiseSkill');
        $this->info_created_time = time();
        $this->info_updated_time = time();
        $this->db->insert('user_professional_info', $this);
        if($this->db->affected_rows() != 1){
            return false;    
        }else{
            $this->db->where('user_id',$userID); 
            $this->db->set('status',2);
            $this->db->update('user_login_info');
            if($this->db->affected_rows() != 1){
                return false;
            }else{
                return true;
            }
        }
    }

    

    public function InsertUserExtraDetails(){
        $this->load->library('session');
        $userID = $this->session->userdata('usrID');
        $this->user_id = $userID;        
        $this->linkedInProfile = $this->input->post('inptLinkedInProfile');
        $this->githubProfile = $this->input->post('inptGithubProfile');
        $this->db->where('user_id',$userID); 
        $this->db->set('linkedin_url',$this->linkedInProfile);
        $this->db->set('github_url',$this->githubProfile);
        $this->db->update('user_company_and_other_info');
        if($this->db->affected_rows() != 1){
            return false;
        }else{
            $this->db->where('user_id',$userID); 
            $this->db->set('status',4);
            $this->db->update('user_login_info');
            if($this->db->affected_rows() != 1){
                return false;
            }else{
                return true;
            }
        }
    }
    */
}
?>