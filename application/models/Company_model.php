<?php
    class Company_model extends CI_Model {
        public function __construct(){
            parent::__construct();
            // Your own constructor code
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        
        public function GetSequenceID(){
            $query = $this->db->get('profile_id_generator', 1);
            return $query->row();       
            
        }

        public function CompanySignup(){
            $qryResult = $this->GetSequenceID();
            $this->user_fname = $this->input->post('inputFirstname');
            $this->user_lname = $this->input->post('inputLastname');
            $this->company_name = $this->input->post('inputCompanyname');
            $this->company_weburl = $this->input->post('inputCompanyURL');
            $this->email = $this->input->post('inputCompanyEmail');
            $this->phone = $this->input->post('inputContactPhone');
            $this->password = $this->input->post('inputCompanypwd');
            $this->status = 0;$this->company_id = 'COMP_'.$qryResult->USER_COMPANY_ID;
            $this->account_created_time = time();
            $this->last_login_time = time();
            $this->is_email_verfied = 0;
            $this->db->insert('company_login_info', $this);
            if($this->db->affected_rows() != 1){
                return false;    
            }else{
                $NEXT_COMPANY_ID = $qryResult->USER_COMPANY_ID+1;
                $updateData = array('LAST_USED_CMPID'=>$this->company_id,'NEXT_CMP_ID'=>$NEXT_COMPANY_ID);
                $this->db->update('profile_id_generator',$updateData);
                return ($this->db->affected_rows() != 1)?false:true;
            }            
        }

        public function CompanySignin(){
            $companyData = array();
            $this->email = $this->input->post('inputCompanyEmail');
            $this->password = $this->input->post('inputCompanypwd');
            $query = $this->db->get_where('company_login_info', array('email' => $this->email, 'password'=>$this->password));
            if($query->num_rows()!=0){
                $companyData['compUsername'] = $query->row('USER_FNAME');
                $companyData['compName'] = $query->row('COMPANY_NAME');
                $companyData['compEmail'] = $query->row('EMAIL');
                $companyData['compPasswd'] = $query->row('PASSWORD');
                $companyData['status'] = $query->row('STATUS');
                $companyData['compID'] = $query->row('COMPANY_ID');
            }
            return $companyData;
        }

        public function AddCompanyInfo(){
            $this->load->library('session');
            $this->company_id = $this->session->userdata('compID');
            $this->company_location = $this->input->post('inputCompanyLocation');
            $this->company_type = $this->input->post('inputCompanyType');
            $this->company_size = $this->input->post('inputCompanySize');
            $this->company_description = $this->input->post('inputCompanyDescription');
            $this->company_twitter_url = $this->input->post('inputTwitterPage');
            $this->company_facebook_url = $this->input->post('inputFacebookPage');
            $this->company_linkedin_url = $this->input->post('inputLinkedInPage');
            $this->db->insert('about_company_info', $this);
            if($this->db->affected_rows() != 1){
                return 1;    
            }else{
                $updateData = array('STATUS'=>1);
                $this->db->update('company_login_info',$updateData);
                return ($this->db->affected_rows() != 1)?2:3;
            }            
        }

        public function GetCompanyInfoFromDB($companyID){
            $aboutQuery = $this->db->get_where('about_company_info', array('company_id' => $companyID));
            $aboutQueryrow = $aboutQuery->first_row('array');
            $loginInfoQuery = $this->db->get_where('company_login_info', array('company_id' => $companyID));
            $loginInfoQueryrow = $loginInfoQuery->first_row('array');
            $result = array_merge($aboutQueryrow, $loginInfoQueryrow);
            return $result;
        }

        public function PostAJOB(){
            $skillIDArr = explode(',',$this->input->post('inputJobSkillsList'));
            
            $qryResult = $this->GetSequenceID();
            $this->load->library('session');
            
            foreach($skillIDArr as $val){
                $data = array(
                    'company_id' => $this->session->userdata('compID'),
                    'job_id' => $qryResult->JOB_SEQ_ID,
                    'job_skill_id' => $val,
                    'job_skill_name' =>''
                );
                $this->db->insert('job_skill_id', $data);
            }
            
            $this->company_id = $this->session->userdata('compID');
            $this->job_id = $qryResult->JOB_SEQ_ID;
            $this->job_title = $this->input->post('inputJobRole');
            $this->job_description = $this->input->post('inputJobDescription');
            $this->job_type = $this->input->post('inputJobType');
            $this->job_role = $this->input->post('inputJobPrimaryRole');
            $this->job_experience = $this->input->post('inputJobExperience');
            $this->job_skills = $this->input->post('inputJobSkills');
            $this->job_location = $this->input->post('inputJobLocation');
            $this->min_sal = $this->input->post('inputJobMinSal');
            $this->max_sal = $this->input->post('inputJobMaxSal');
            $this->status = 0;
            $this->date_posted = time();
            $this->date_updated = time();
            $this->db->insert('company_job_info', $this);
            if($this->db->affected_rows() != 1){
                return 1;    
            }else{
                $qryResult->JOB_SEQ_ID = $qryResult->JOB_SEQ_ID+1;
                $updateData = array('JOB_SEQ_ID'=>$qryResult->JOB_SEQ_ID);
                $this->db->update('profile_id_generator',$updateData);
                return ($this->db->affected_rows() != 1)?2:3;
            } 
        }

        public function GetAllJobs($companyID, $viewStatus){
            $this->load->library('session');
            $this->company_id = $this->session->userdata('compID');
            $query = $this->db->get_where('company_job_info', array('company_id' => $companyID, 'status' => $viewStatus));
            if($query->num_rows() > 0){
               return array('jobInfo'=>$query->result_array());
            }else{
                return array();
            }
        }
    }    
?>