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
                            <input type="text" class="form-control" id="inputJobRole" name="inputJobRole" placeholder="eg: Lead Engineer, UI/UX Developer" value="<?php echo set_value('inputMostRecentCompany'); ?>">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="inputJobDescription" style="float:left">Description<code style="background-color:#FFF">*</code></label>
                            <textarea class="form-control" id="inputJobDescription" name="inputJobDescription" placeholder="Descride the roles and responsibilities of this position" rows="5" value="<?php echo set_value('inputMostRecentCompany'); ?>"></textarea>
                            <small id="passwordHelpInline" class="text-muted">Should be less then 5000 charaters.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputJobType" style="float:left">Type of position<code style="background-color:#FFF">*</code></label>
                            <select class="form-control" id="inputJobType" name="inputJobType">
                                <option value="">Job Type</option>
                                <option value="1">Full-time employee</option>
                                <option value="2">part-time employee</option>
                                <option value="3">Intern</option>
                                <option value="4">Contract</option>
                                <option value="5">Contract to Hire</option>
                            </select>
                        </div>  
                        <div class="form-group">
                            <label for="inputJobPrimaryRole" style="float:left">Primary Role<code style="background-color:#FFF">*</code></label>
                            <select class="form-control" id="inputJobPrimaryRole" name="inputJobPrimaryRole">
                                <option value="">Select Primary Role…</option>
                                <option value="developer">Software Engineer</option>
                                <option value="mobile_developer">&nbsp;&nbsp;&nbsp; Mobile Developer</option>
                                <option value="frontend developer">&nbsp;&nbsp;&nbsp; Frontend Developer</option>
                                <option value="backend developer">&nbsp;&nbsp;&nbsp; Backend Developer</option>
                                <option value="full stack developer">&nbsp;&nbsp;&nbsp; Full-Stack Developer</option>
                                <option value="Engineering Manager">&nbsp;&nbsp;&nbsp; Engineering Manager</option>
                                <option value="QA Engineer">&nbsp;&nbsp;&nbsp; QA Engineer</option>
                                <option value="devops">&nbsp;&nbsp;&nbsp; DevOps</option>
                                <option value="Software Architect">&nbsp;&nbsp;&nbsp; Software Architect</option>
                                <option value="designer">Designer</option>
                                <option value="UI/UX Designer">&nbsp;&nbsp;&nbsp; UI/UX Designer</option>
                                <option value="User Researcher">&nbsp;&nbsp;&nbsp; User Researcher</option>
                                <option value="Visual Designer">&nbsp;&nbsp;&nbsp; Visual Designer</option>
                                <option value="Creative Director">&nbsp;&nbsp;&nbsp; Creative Director</option>
                                <option value="operations">Operations</option>
                                <option value="finance">&nbsp;&nbsp;&nbsp; Finance/Accounting</option>
                                <option value="human_resources">&nbsp;&nbsp;&nbsp; H.R.</option>
                                <option value="office_manager">&nbsp;&nbsp;&nbsp; Office Manager</option>
                                <option value="recruiter">&nbsp;&nbsp;&nbsp; Recruiter</option>
                                <option value="customer service">&nbsp;&nbsp;&nbsp; Customer Service</option>
                                <option value="Operations manager">&nbsp;&nbsp;&nbsp; Operations Manager</option>
                                <option value="sales">Sales</option>
                                <option value="business development">&nbsp;&nbsp;&nbsp; Business Development</option>
                                <option value="Manager Business Development">&nbsp;&nbsp;&nbsp; BD Manager</option>
                                <option value="Account Manager">&nbsp;&nbsp;&nbsp; Account Manager</option>
                                <option value="Sales Manager">&nbsp;&nbsp;&nbsp; Sales Manager</option>
                                <option value="marketing">Marketing</option>
                                <option value="Growth Hacking">&nbsp;&nbsp;&nbsp; Growth Hacker</option>
                                <option value="Marketing Manager">&nbsp;&nbsp;&nbsp; Marketing Manager</option>
                                <option value="Content Creator">&nbsp;&nbsp;&nbsp; Content Creator</option>
                                <option disabled="disabled" value="Management">Management</option>
                                <option value="CEO">&nbsp;&nbsp;&nbsp; CEO</option>
                                <option value="CFO">&nbsp;&nbsp;&nbsp; CFO</option>
                                <option value="CMO">&nbsp;&nbsp;&nbsp; CMO</option>
                                <option value="COO">&nbsp;&nbsp;&nbsp; COO</option>
                                <option value="cto">&nbsp;&nbsp;&nbsp; CTO</option>
                                <option disabled="disabled" value="Engineer">Other Engineering</option>
                                <option value="hardware_engineer">&nbsp;&nbsp;&nbsp; Hardware Engineer</option>
                                <option value="mechanical engineer">&nbsp;&nbsp;&nbsp; Mechanical Engineer</option>
                                <option value="Systems Engineer">&nbsp;&nbsp;&nbsp; Systems Engineer</option>
                                <option disabled="disabled" value="Other">Other</option>
                                <option value="attorney">&nbsp;&nbsp;&nbsp; Attorney</option>
                                <option value="business analyst">&nbsp;&nbsp;&nbsp; Business Analyst</option>
                                <option value="data scientist">&nbsp;&nbsp;&nbsp; Data Scientist</option>
                                <option value="product_manager">&nbsp;&nbsp;&nbsp; Product Manager</option>
                                <option value="Project Manager">&nbsp;&nbsp;&nbsp; Project Manager</option>
                            </select>
                        </div> 

                        <div class="form-group">
                            <label for="inputJobExperience" style="float:left">Work Experience<code style="background-color:#FFF">*</code></label>
                            <select class="form-control" id="inputJobExperience" name="inputJobExperience">
                                <option value="">Select Years of Experience…</option>
                                <option value="0">0+</option>
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                                <option value="6">6+</option>
                                <option value="7">7+</option>
                                <option value="8">8+</option>
                                <option value="9">9+</option>
                                <option value="10">10+</option>
                            </select>
                        </div>      

                        <div class="form-group">
                            <label class="col-form-label" for="inputJobSkills" style="float:left">Skills<code style="background-color:#FFF">*</code></label>
                            <input type="text" class="form-control" id="inputJobSkills" name="inputJobSkills" placeholder="Skills needed for this position.(5 max)" value="<?php echo set_value('inputMostRecentCompany'); ?>">
                        </div>  
                        <div class="form-group">
                            <label class="col-form-label" for="inputJobLocation" style="float:left">Location<code style="background-color:#FFF">*</code></label>
                            <input type="text" class="form-control" id="inputJobLocation" name="inputJobLocation" placeholder="Chennai" value="<?php echo set_value('inputMostRecentCompany'); ?>">
                        </div> 

                        
                        <div class="form-group">                            
                            <div class="row">
                                <div class="col">
                                <label class="col-form-label" style="float:left">Salary Range<code style="background-color:#FFF">*</code></label><br>
                                    <input type="number" class="form-control" name="inputJobMinSal" id="inputJobMinSal" placeholder="5">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" name="inputJobMaxSal" id="inputJobMaxSal" placeholder="6" style="margin-top:36px">
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