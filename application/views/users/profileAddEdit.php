<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menuHeader'); ?>
<div class="container-fluid" >
    <div class="row" style="height:330px;">
        <img src="/images/Frosty-Snowflake.jpg" class="img-fluid" alt="Responsive image">
    </div>
</div>
<div class="container-fluid" style="margin-bottom:4rem">
    <div class="row" style="postion:absolute;margin-top:-200px;">
        <div class="col-9">
            <div class="row">
                <div class="col-9 ml-auto" style="max-width:66.7%">
                    <div class="card">
                        <img src="<?php echo base_url("images/avataaar_male.png");?>" width="150px" height="150px" style="position:absolute;left:-76px;top:-1rem;" class="rounded-circle">
                        <div class="card-body" style="padding-left:5rem">                            
                            <h4 class="card-title"><?php echo $userInfo[0]['USER_FNAME']." ".$userInfo[0]['USER_LNAME'];?></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $userCompanyInfo[0]['COMPANY_NAME']; ?></h6>
                            <?php if($isPublicView == 0){  ?>
                            <a href="#" data-tt="tooltip" data-placement="top" title="Edit Profile" onClick="editUserProfileInfo('<?php echo $userInfo[0]['USER_ID']; ?>')" 
                            data-toggle="modal" data-target="#addEditProfileInfo" style="position:absolute;top:40px;right:35px;"><i class="fa fa-edit fa-fw"></i></a>
                            <?php 
                            }
                            if(!empty($userInfo[0]['PROFILE_SUMMARY'])){  ?>
                            <hr>
                            <h6 class="card-subtitle mb-2" style="font-size:0.8rem;font-weight:bold">SUMMARY</h6>
                            <p class="text-muted" id="summaryShowLess" style="display:"><?php echo substr($userInfo[0]['PROFILE_SUMMARY'], 0, 250)."...";?></p>
                            <p class="text-muted" id="summaryShowMore" style="display:none"><?php echo str_replace("\n", "<br/>", $userInfo[0]['PROFILE_SUMMARY']);?></p>
                            <p class="text-center">
                                <a id="summaryShowMoreAction" style="display:" class="text-primary">show more<i class="fa fa-chevron-down fa-fw"></i></a>
                                <a id="summaryShowLessAction" style="display:none" class="text-primary">show less<i class="fa fa-chevron-up fa-fw"></i></a>
                            </p>
                            <!--
                            <h6 class="card-subtitle mb-2 text-muted" style="margin-top:1rem;font-size:0.8rem">PREVIOUSLY</h6>
                                <dl class="row">
                                    <?php foreach($userCompanyInfo as $experience): ?>
                                    <dt class="col-sm-6"><span style="font-size:.9rem"><?php echo $experience['COMPANY_NAME']; ?></span></dt>
                                    <dd class="col-sm-6"><span style="font-size:.9rem">as <?php echo $experience['ROLE_H1']; ?>.</span></dd>                               
                                    <?php endforeach;?> 
                                </dl>
                            -->
                            <?php } ?>
                            <hr>
                            <a href="https://vembu.com" class="card-link"><i class="fa fa-building-o fa-fw"></i>Vembu Technologies</a>                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-4">
                    <div class="card" style="width: 16rem;position:absolute;top:0%">
                        <div class="card-header" style="background-color:#FFF">
                            Matching Jobs
                        </div>
                        <div class="card-body">
                            <!--
                            NEED TO SHOW JOBS HERE
                            <h6 class="card-subtitle mb-2 text-muted" style="font-size:0.8rem">SHORTCUTS</h6>
                            <hr style="margin-top:0.1px;">
                            <ul class="list-unstyled">
                                <li class="nav-item" style="margin:25px 0px 25px 0px">
                                    <a href="#experienceDiv" style="color:#212529">Experience</a>
                                </li>
                                <li class="nav-item" style="margin:25px 0px 25px 0px">
                                    <a href="#skillsDiv" style="color:#212529">Skills</a>
                                </li>
                                <li class="nav-item" style="margin:25px 0px 25px 0px">
                                    <a href="#educationDiv" style="color:#212529">Education</a>
                                </li>                                
                            </ul>     
                            -->                   
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row" id="experienceDiv">    
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4 class="card-title"><i class="fa fa-university" aria-hidden="true"></i> Experience</h4>
                                        </div>
                                        <div class="col-6 text-right">
                                            <?php if($isPublicView == 0){  ?>
                                            <a href="#" data-tt="tooltip" data-placement="top" title="Add experience" class="card-link pull-right" data-toggle="modal" data-target="#addEditCompanyInfo"><i class="fa fa-edit fa-fw"></i></a> 
                                            <?php } ?>                                             
                                        </div>
                                    </div>
                                    <hr style="margin-top:0.01rem">
                                    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->

                                    <div class="qa-message-list">
                                        <?php foreach($userCompanyInfo as $experience): ?>
                                            <div class="message-item">
                                                <div class="message-inner">
                                                    <div class="qa-message-content">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <p style="margin:0px;"><span class="card-subtitle" style="font-weight:bold;"><?php echo $experience['ROLE_H1']; ?></span></p>
                                                                <p style="margin:0px;"><span class="text-muted" style="font-size:12px;"><?php echo $experience['COMPANY_NAME']; ?></span></p>
                                                                <p><span class="text-muted" style="font-size:12px;"><?php echo $experience['COMPANY_LOCATION'].", India"; ?></span></p>
                                                            </div>
                                                            <div class="col-4">
                                                                <?php if($experience['IS_CURRENT_COMPANY']!=1 && $experience['EXPERIENCE_IN_MONTHS'] !='' && $experience['EXPERIENCE_IN_YRS'] !=''){ ?>
                                                                    <p style="margin:0px;"><span class="text-muted" ><?php echo $experience['EXPERIENCE_IN_YRS']." year, ".$experience['EXPERIENCE_IN_MONTHS']." months" ?></span></p>
                                                                    <p style="margin:0px;"><span class="text-muted" style="font-size:12px;"><?php echo substr($experience['COMPANY_WORKED_FROM'],0,7)."  to ".substr($experience['COMPANY_WORKED_TILL'],0,7); ?></span></p>
                                                                <?php }else if($experience['IS_CURRENT_COMPANY']==1){ ?>
                                                                    <p style="margin:0px;"><span class="text-muted" style="font-size:12px;"><?php echo substr($experience['COMPANY_WORKED_FROM'],0,7)."  to Till Date"; ?></span></p>
                                                                <?php } 
                                                                if($isPublicView == 0){  ?>
                                                                <p><button class="btn btn-link" onclick="editUserExperience(<?php echo $experience['USER_COMPANY_ID'];?>)" style="font-size:12px;"><i class="fa fa-edit fa-fw"></i>Edit</button></p>
                                                                <?php  } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;?>                                        
                                    </div>
                                    <?php if(count($userCompanyInfo)>3){ ?>
                                    <hr style="margin-top:3rem">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <a href="https://vembu.com" class="card-link" style="text-decoration:underline"><i class="fa fa-plus fa-fw"></i>Show More</a>  
                                        </div>
                                    </div>   
                                    <?php } ?>                     
                                </div>
                            </div>   
                        </div> 
                    </div>
                    <div class="row" id="skillsDiv" style="margin-top:1rem">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4 class="card-title"><i class="fa fa-compass" aria-hidden="true"></i> Skills</h4>
                                        </div>
                                        <div class="col-6 text-right">
                                            <?php if($isPublicView == 0){  ?>
                                            <a href="#" data-tt="tooltip" data-placement="top" title="Add Skill" class="card-link pull-right" data-toggle="modal" data-target="#addEditSkillInfo"><i class="fa fa-edit fa-fw"></i></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if(!empty($userExperienceInfo)){ ?>
                                        <hr style="margin-top:0.01rem">
                                        <?php foreach($userExperienceInfo as $skillSet): ?>
                                            <a href="#" class="badge badge-success" style="padding:0.5em 0.8em;margin:0.25rem"><?php echo $skillSet['SKILL_NAME']; ?><i class="fa fa-check fa-fw"></i></a>
                                        <?php endforeach;?>                                          
                                    <?php }else{ ?>
                                        <hr style="margin-top:0.01rem">
                                        <div class="bd-callout bd-callout-danger">
                                            <h4 id="asynchronous-methods-and-transitions">You have not added your skills</h4>
                                            <p class="card-text">Your professional skills will be listed here.<a href="#" class="card-link" data-toggle="modal" data-target="#addEditSkillInfo">Click here</a> to add.</p>
                                        </div>                                        
                                    <?php } ?>                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="educationDiv" style="margin-top:1rem">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4 class="card-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</h4>
                                        </div>
                                        <div class="col-6 text-right">
                                            <?php if($isPublicView == 0){  ?>
                                            <a href="#" data-tt="tooltip" data-placement="top" title="Add Education" class="card-link pull-right" data-toggle="modal" data-target="#addEditEducation"><i class="fa fa-edit fa-fw"></i></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php if(!empty($userEducationInfo)){ ?>
                                        <hr style="margin-top:0.01rem">
                                        <?php foreach($userEducationInfo as $education): ?>
                                            <div class="message-item">
                                                <div class="message-inner">
                                                    <div class="qa-message-content">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <p style="margin:0px;"><span class="card-subtitle" style="font-weight:bold;"><?php echo $education['EDUCATION_FIELD']; ?></span></p>
                                                                <p style="margin:0px;"><span class="text-muted" style="font-size:12px;"><?php echo $education['INSTITUTION_NAME']; ?></span></p>
                                                                <!-- <p><span class="text-muted" style="font-size:12px;"><?php echo $experience['COMPANY_LOCATION'].", India"; ?></span></p> -->
                                                            </div>
                                                            <div class="col-4">
                                                                <p style="margin:0px;"><span class="text-muted" style="font-size:12px;"><?php echo substr($education['STUDIED_FROM'],0,7)."  to ".substr($education['STUDIED_TILL'],0,7); ?></span></p>
                                                                <p><button class="btn btn-link" onclick="editUserEducation(<?php echo $education['USER_EDUCATION_ID'];?>)" style="font-size:12px;"><i class="fa fa-edit fa-fw"></i>Edit</button></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                    <?php }else{ ?>
                                        <hr style="margin-top:0.01rem">
                                        <div class="bd-callout bd-callout-danger">
                                            <h4 id="asynchronous-methods-and-transitions">You have not added your education details</h4>
                                            <p class="card-text">You academic career will be listed here in a breif.<a href="#" class="card-link" data-toggle="modal" data-target="#addEditEducation">Click here</a> to add.</p>
                                        </div>
                                    <?php } ?>                    
                                </div>
                            </div>
                        </div>
                    </div>        
                    <div class="row" id="contactDiv" style="margin-top:1rem">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4 class="card-title"><i class="fa fa-phone" aria-hidden="true"></i> Contact</h4>
                                        </div>
                                        <div class="col-6 text-right">
                                            <!-- <a href="#" class="card-link pull-right" data-toggle="modal" data-target="#addEditEducation"><i class="fa fa-plus-square-o fa-fw"></i>Add Education</a> -->
                                        </div>
                                    </div>
                                    <hr style="margin-top:0.01rem">
                                    <dl class="row">                                        
                                        <dt class="col-sm-6"><span style="font-size:.9rem"><i class="fa fa-envelope-o fa-fw"></i> Email</span></dt>
                                        <dd class="col-sm-6"><span style="font-size:.9rem">suriya227@gmail.com.</span></dd>

                                        <dt class="col-sm-6"><span style="font-size:.9rem"><i class="fa fa-mobile fa-fw"></i> Phone</span></dt>
                                        <dd class="col-sm-6"><span style="font-size:.9rem">9962467899.</span></dd>

                                        <!-- <dt class="col-sm-6"><span style="font-size:.9rem"><i class="fa fa-envelope-o fa-fw"></i></span></dt>
                                        <dd class="col-sm-6"><span style="font-size:.9rem">suriya227@gmail.com.</span></dd> -->
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>            
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col">
                    <div class="card" >
                        <div class="card-body text-center">
                            <div class="progress blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">50%</div>
                            </div>
                            <p class="card-text text-muted">Is Suriya your colleague.?</p>
                            <!-- <a href="#" class="card-link">Card link</a> -->
                            <a href="#" class="card-link btn btn-primary" style="border-radius:0px;">Join now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row" style="margin-top:1rem">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <!-- <h4 class="card-title">Card title</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> - ->
                            <p class="card-text text-muted">Is Suriya your colleague.?</p>
                            <!-- <a href="#" class="card-link">Card link</a> - ->
                            <a href="#" class="card-link btn btn-primary" style="border-radius:0px;">Join now</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <!-- MODAL TO ADD OR UPDATE EXPERIENCE DETAILS -->
    <div class="modal fade" id="addEditCompanyInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width:600px;">
            <div class="modal-content">
                <div class="modal-header" style="background:linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%)">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#FFF;">Add Experience</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="frmAddCompany" id="frmAddCompany">
                        <div class="form-group">
                            <label for="inputRoleTitle">Title</label>
                            <input type="text" class="form-control" name="inputRoleTitle" id="inputRoleTitle" aria-describedby="emailHelp" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="inputCompany">Company</label>
                            <input type="text" class="form-control" name="inputCompany" id="inputCompany" placeholder="Company">
                        </div>
                        <div class="form-group">
                            <label for="inputCompanyLocation">Company Location</label>
                            <input type="text" class="form-control" name="inputCompanyLocation" id="inputCompanyLocation" placeholder="Company">
                        </div>
                        <div class="form-group">
                            <label for="inputCompanyFrmDt">From Date</label>
                            <input type="month" class="form-control" name="inputCompanyFrmDt" id="inputCompanyFrmDt">
                        </div>
                        <div class="form-group">
                            <label for="inputCompanyToDt">To Date</label>
                            <input type="month" class="form-control" name="inputCompanyToDt" id="inputCompanyToDt">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="inputIsCurrtCompany" id="inputIsCurrtCompany">
                                Check if you still work here
                            </label>
                        </div>
                        <input type="hidden" class="form-check-input" name="inputIsInsertorUpdate" id="inputIsInsertorUpdate" value="0">
                        <input type="hidden" class="form-check-input" name="inputuserCompanyID" id="inputuserCompanyID" value="0">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="inputRoleDescription" name="inputRoleDescription" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times fa-fw"></i>Cancel</button>
                    <button type="button" class="btn btn-success" name="submitSaveCompany" id="submitSaveCompany"><i class="fa fa-save fa-fw"></i>Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL TO ADD OR UPDATE SKILL DETAILS -->
    <div class="modal fade" id="addEditSkillInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog md" role="document" style="max-width:450px;">
            <div class="modal-content">
            <div class="modal-header" style="background:linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%)">
                <h5 class="modal-title" id="exampleModalLabel" style="color:#FFF;">Add Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="frmAddSkill" id="frmAddSkill">
                    <div class="form-group">
                        <label for="inputSkillTitle">Skill</label>
                        <input type="text" class="form-control" name="inputSkillTitle" id="inputSkillTitle" aria-describedby="emailHelp" placeholder="Eg: PHP, HTML, CSS">
                        <ul class="list-group" id="inputSkillList"></ul>
                        <div id="updateSkillList" style="margin-top:10px;">                            
                        </div>
                    </div>
                    <input type="hidden" class="form-check-input" name="inputIsInsertorUpdate" id="inputIsInsertorUpdate" value="0">
                    <input type="hidden" class="form-check-input" name="inputuserExperienceID" id="inputuserExperienceID" value="0">                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times fa-fw"></i>Close</button>
                <!-- <button type="button" class="btn btn-success" name="submitSaveExperience" id="submitSaveExperience"><i class="fa fa-save fa-fw"></i>Save</button> -->
            </div>
            </div>
        </div>
    </div>

    <!-- MODAL TO ADD OR UPDATE EDUCATION DETAILS -->
    <div class="modal fade" id="addEditEducation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width:600px;">
            <div class="modal-content">
                <div class="modal-header" style="background:linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%)">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:#FFF;">Add Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="frmAddEdu" id="frmAddEdu">
                        <div class="form-group">
                            <label for="inputRoleTitle">School</label>
                            <input type="text" class="form-control" name="inputSchoolName" id="inputSchoolName" aria-describedby="emailHelp" placeholder="Institution Name">
                        </div>
                        <div class="form-group">
                            <label for="inputCompany">Degree</label>
                            <input type="text" class="form-control" name="inputDegreeTitle" id="inputDegreeTitle" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="inputCompanyLocation">Education Stream</label>
                            <input type="text" class="form-control" name="inputSpecializedStream" id="inputSpecializedStream" placeholder="Field">
                        </div>
                        <div class="form-group">
                            <label for="inputCompanyFrmDt">From Date</label>
                            <input type="month" class="form-control" name="inputEducationFrmDt" id="inputEducationFrmDt">
                        </div>
                        <div class="form-group">
                            <label for="inputCompanyToDt">To Date</label>
                            <input type="month" class="form-control" name="inputEducationToDt" id="inputEducationToDt">
                        </div>
                        <input type="hidden" class="form-check-input" name="inputIsInsertorUpdate" id="inputIsInsertorUpdate" value="0">
                        <input type="hidden" class="form-check-input" name="inputuserEducationID" id="inputuserEducationID" value="0">                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times fa-fw"></i>Cancel</button>
                    <button type="button" class="btn btn-success" name="submitSaveEducation" id="submitSaveEducation"><i class="fa fa-save fa-fw"></i>Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addEditProfileInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header" style="background:linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);">
                <h5 class="modal-title" id="exampleModalLabel" style="color:#FFF;">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="UpdateProfile" id="UpdateProfile">
                    <div class="form-row">
                        <div class="col">
                            <label for="inputUserFname">First Name</label>
                            <input type="text" class="form-control" name="inputUserFname" id="inputUserFname" aria-describedby="emailHelp" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="inputUserLname">Last Name</label>
                            <input type="text" class="form-control" name="inputUserLname" id="inputUserLname" aria-describedby="emailHelp" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top:10px;">
                        <label for="inputRecentCompany">Recent Company</label>
                        <input type="text" class="form-control" name="inputRecentCompany" id="inputRecentCompany" aria-describedby="emailHelp" placeholder="Apple Inc">
                    </div>
                    <div class="form-group" style="margin-top:10px;">
                        <label for="inputUserSummary">Summary</label>
                        <textarea class="form-control" id="inputUserSummary" name="inputUserSummary" rows="3" placeholder="Your Profile Summary Comes here.."></textarea>
                    </div>
                    <input type="hidden" class="form-check-input" name="inputIsInsertorUpdate" id="inputIsInsertorUpdate" value="0">
                    <input type="hidden" class="form-check-input" name="inputuserCompanyID" id="inputuserCompanyID" value="0">                    
                </form>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times fa-fw"></i>Close</button> -->
                <button type="button" class="btn btn-primary" name="updateProfileInfo" id="updateProfileInfo"><i class="fa fa-send fa-fw"></i>Update</button>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footerNav'); ?>
<?php $this->load->view('templates/footer'); ?>