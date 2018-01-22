<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menuHeader'); ?>
<div class="container" style="margin-bottom:50px;">
    <div class="row">
        <div class="col-3" style="max-width:23%;">
            <div class="card" style="position:fixed;width:15%">
                <h4 class="card-header">Links</h4>
                <ul class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action active" href="/app/company/a"><i class="fa fa-university fa-fw" aria-hidden="true"></i> About</a>
                    <a class="list-group-item" href="#"><i class="fa fa-send fa-fw" aria-hidden="true"></i> Post a job</a>
                    <a class="list-group-item"  href="/company/jobs"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Older Posts</a>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card">  
                <div class="card-header" style="background-color:#FFF"><h4>Job Details</h4></div>              
                <div class="card-body">
                    <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>
                    <form method="POST" action="<?php echo base_url(); ?>company/ValidateandSaveJob">
                        <div class="form-group">
                            <label class="col-form-label" for="inputJobRole" style="float:left">Title<code style="background-color:#FFF">*</code></label>
                            <input type="text" class="form-control" id="inputJobRole" name="inputJobRole" placeholder="eg: Lead Engineer, UI/UX Developer" value="<?php echo set_value('inputJobRole'); ?>">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputJobDescription" style="float:left">Description<code style="background-color:#FFF">*</code></label>
                            <textarea class="form-control" id="inputJobDescription" name="inputJobDescription" placeholder="Descride the roles and responsibilities of this position" rows="5" value="<?php echo set_value('inputJobDescription'); ?>"></textarea>
                            <small id="passwordHelpInline" class="text-muted">Should be less then 5000 charaters.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputJobType" style="float:left">Type of position<code style="background-color:#FFF">*</code></label>
                            <select class="form-control" id="inputJobType" name="inputJobType">
                                <option value="" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Job Type</option>
                                <option value="1" <?php echo set_select('inputJobPrimaryRole','1', ( !empty($data) && $data == "1" ? TRUE : FALSE )); ?>>Full-time employee</option>
                                <option value="2" <?php echo set_select('inputJobPrimaryRole','2', ( !empty($data) && $data == "2" ? TRUE : FALSE )); ?>>part-time employee</option>
                                <option value="3" <?php echo set_select('inputJobPrimaryRole','3', ( !empty($data) && $data == "3" ? TRUE : FALSE )); ?>>Intern</option>
                                <option value="4" <?php echo set_select('inputJobPrimaryRole','4', ( !empty($data) && $data == "4" ? TRUE : FALSE )); ?>>Contract</option>
                                <option value="5" <?php echo set_select('inputJobPrimaryRole','5', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Contract to Hire</option>
                            </select>
                        </div>  
                        <div class="form-group">
                            <label for="inputJobPrimaryRole" style="float:left">Primary Role<code style="background-color:#FFF">*</code></label>
                            <select class="form-control" id="inputJobPrimaryRole" name="inputJobPrimaryRole">
                                <option value="" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Select Primary Roleâ€¦</option>
                                <option value="developer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Software Engineer</option>
                                <option value="mobile_developer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Mobile Developer</option>
                                <option value="frontend developer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Frontend Developer</option>
                                <option value="backend developer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Backend Developer</option>
                                <option value="full stack developer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Full-Stack Developer</option>
                                <option value="Engineering Manager" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Engineering Manager</option>
                                <option value="QA Engineer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; QA Engineer</option>
                                <option value="devops" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; DevOps</option>
                                <option value="Software Architect" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Software Architect</option>
                                <option value="designer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Designer</option>
                                <option value="UI/UX Designer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; UI/UX Designer</option>
                                <option value="User Researcher" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; User Researcher</option>
                                <option value="Visual Designer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Visual Designer</option>
                                <option value="Creative Director" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Creative Director</option>
                                <option value="operations" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Operations</option>
                                <option value="finance" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Finance/Accounting</option>
                                <option value="human_resources" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; H.R.</option>
                                <option value="office_manager" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Office Manager</option>
                                <option value="recruiter" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Recruiter</option>
                                <option value="customer service" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?> >&nbsp;&nbsp;&nbsp; Customer Service</option>
                                <option value="Operations manager"<?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Operations Manager</option>
                                <option value="sales" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Sales</option>
                                <option value="business development" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Business Development</option>
                                <option value="Manager Business Development" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; BD Manager</option>
                                <option value="Account Manager" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Account Manager</option>
                                <option value="Sales Manager" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Sales Manager</option>
                                <option value="marketing" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Marketing</option>
                                <option value="Growth Hacking" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Growth Hacker</option>
                                <option value="Marketing Manager" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Marketing Manager</option>
                                <option value="Content Creator" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Content Creator</option>
                                <option disabled="disabled" value="Management" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Management</option>
                                <option value="CEO">&nbsp;&nbsp;&nbsp; CEO</option>
                                <option value="CFO">&nbsp;&nbsp;&nbsp; CFO</option>
                                <option value="CMO">&nbsp;&nbsp;&nbsp; CMO</option>
                                <option value="COO">&nbsp;&nbsp;&nbsp; COO</option>
                                <option value="cto">&nbsp;&nbsp;&nbsp; CTO</option>
                                <option disabled="disabled" value="Engineer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Other Engineering</option>
                                <option value="hardware_engineer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Hardware Engineer</option>
                                <option value="mechanical engineer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Mechanical Engineer</option>
                                <option value="Systems Engineer" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Systems Engineer</option>
                                <option disabled="disabled" value="Other" <?php echo set_select('inputJobPrimaryRole','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Other</option>
                                <option value="attorney" <?php echo set_select('inputJobPrimaryRole','attorney', ( !empty($data) && $data == "attorney" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Attorney</option>
                                <option value="business analyst" <?php echo set_select('inputJobPrimaryRole','business analyst', ( !empty($data) && $data == "business analyst" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Business Analyst</option>
                                <option value="data scientist" <?php echo set_select('inputJobPrimaryRole','data scientist', ( !empty($data) && $data == "data scientist" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Data Scientist</option>
                                <option value="product_manager" <?php echo set_select('inputJobPrimaryRole','product_manager', ( !empty($data) && $data == "product_manager" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Product Manager</option>
                                <option value="Project Manager" <?php echo set_select('inputJobPrimaryRole','Project Manager', ( !empty($data) && $data == "Project Manager" ? TRUE : FALSE )); ?>>&nbsp;&nbsp;&nbsp; Project Manager</option>
                            </select>
                        </div> 

                        <div class="form-group">
                            <label for="inputJobExperience" style="float:left">Work Experience<code style="background-color:#FFF">*</code></label>
                            <select class="form-control" id="inputJobExperience" name="inputJobExperience">
                                <option value="" <?php echo set_select('inputJobExperience','', ( !empty($data) && $data == "" ? TRUE : FALSE )); ?>>Select Years of Experienceâ€¦</option>
                                <option value="0" <?php echo set_select('inputJobExperience','0', ( !empty($data) && $data == "0" ? TRUE : FALSE )); ?>>0+</option>
                                <option value="1" <?php echo set_select('inputJobExperience','1', ( !empty($data) && $data == "1" ? TRUE : FALSE )); ?>>1+</option>
                                <option value="2" <?php echo set_select('inputJobExperience','2', ( !empty($data) && $data == "2" ? TRUE : FALSE )); ?>>2+</option>
                                <option value="3" <?php echo set_select('inputJobExperience','3', ( !empty($data) && $data == "3" ? TRUE : FALSE )); ?>>3+</option>
                                <option value="4" <?php echo set_select('inputJobExperience','4', ( !empty($data) && $data == "4" ? TRUE : FALSE )); ?>>4+</option>
                                <option value="5" <?php echo set_select('inputJobExperience','5', ( !empty($data) && $data == "5" ? TRUE : FALSE )); ?>>5+</option>
                                <option value="6" <?php echo set_select('inputJobExperience','6', ( !empty($data) && $data == "6" ? TRUE : FALSE )); ?>>6+</option>
                                <option value="7" <?php echo set_select('inputJobExperience','7', ( !empty($data) && $data == "7" ? TRUE : FALSE )); ?>>7+</option>
                                <option value="8" <?php echo set_select('inputJobExperience','8', ( !empty($data) && $data == "8" ? TRUE : FALSE )); ?>>8+</option>
                                <option value="9" <?php echo set_select('inputJobExperience','9', ( !empty($data) && $data == "9" ? TRUE : FALSE )); ?>>9+</option>
                                <option value="10" <?php echo set_select('inputJobExperience','10', ( !empty($data) && $data == "10" ? TRUE : FALSE )); ?>>10+</option>
                            </select>
                        </div>      

                        <div class="form-group">
                            <label class="col-form-label" for="inputJobSkills" style="float:left">Skills<code style="background-color:#FFF">*</code></label>
                            <input type="text" class="form-control" id="inputJobSkills" name="inputJobSkills" placeholder="Skills needed for this position.(5 max)" value="<?php echo set_value('inputMostRecentCompany'); ?>">
                            <div id="addJobSkillListDiv" style="height: 150px;overflow-y:  auto; position: absolute;width: 93%;z-index: 1050;"><ul class="list-group" id="addJobSkillList"></ul></div>
                            <div id="updateSkillList" style="margin-top:10px;"></div>
                            <input type="hidden" class="form-control" id="inputJobSkillsList" name="inputJobSkillsList" value="<?php echo set_value('inputJobSkillsList'); ?>">
                        </div>  
                        <div class="form-group">
                            <label class="col-form-label" for="inputJobLocation" style="float:left">Location<code style="background-color:#FFF">*</code></label>
                            <input type="text" class="form-control" id="inputJobLocation" name="inputJobLocation" placeholder="Chennai" value="<?php echo set_value('inputJobLocation'); ?>">
                        </div> 

                        
                        <div class="form-group">                            
                            <div class="row">
                                <div class="col">
                                <label class="col-form-label" style="float:left">Salary Range<code style="background-color:#FFF">*</code></label><br>
                                    <input type="number" class="form-control" name="inputJobMinSal" id="inputJobMinSal" placeholder="5" value="<?php echo set_value('inputJobMinSal'); ?>">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" name="inputJobMaxSal" id="inputJobMaxSal" placeholder="6" style="margin-top:36px" value="<?php echo set_value('inputJobMaxSal'); ?>">
                                </div>
                            </div>
                            <small id="passwordHelpInline" class="text-muted">Amount in lakhs per annum.</small>
                        </div> 
                        <!-- <div class="form-group">
                            <label class="col-form-label" for="inputMostRecentRole" style="float:left">Contact<code style="background-color:#FFF">*</code></label>
                            <input type="text" class="form-control" id="inputMostRecentRole" name="inputMostRecentRole" placeholder="Chennai" readonly>
                        </div>    -->
                        <button type="submit" class="btn btn-success" style="float:left"><i class="fa fa-save fa-fw"></i>Post</button>   
                    </form>                        
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
<?php $this->load->view('templates/footer'); ?>