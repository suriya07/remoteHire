<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/indexMenubar'); ?>
<body>
<div class="container" style="margin-bottom:2rem">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-8">
            <div class="card">                
                <div class="card-body">
                    <!-- <h4 class="card-title">Company Signup</h4>
                    <hr> -->
                    <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>
                    <form method="POST" action="<?php echo base_url(); ?>company/ValidateAndCreateAccount">
                        <div class="form-row" style="margin-bottom:1rem">
                            <div class="col">
                                <label class="text-muted formLabel" for="inputFirstname">First name</label>
                                <input type="text" class="form-control" name="inputFirstname" id="inputFirstname" placeholder="Vishnu" value="<?php echo set_value('inputFirstname'); ?>">
                            </div>
                            <div class="col">
                                <label class="text-muted formLabel" for="inputLastname">Last name</label>
                                <input type="text" class="form-control" name="inputLastname" id="inputLastname" placeholder="Prakash" value="<?php echo set_value('inputLastname'); ?>">
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom:1rem">
                            <div class="col">
                                <label class="text-muted formLabel" for="inputCompanyname">Company name</label>
                                <input type="text" class="form-control" name="inputCompanyname" id="inputCompanyname" placeholder="profasee.com" value="<?php echo set_value('inputCompanyname'); ?>">
                            </div>
                            <div class="col">
                                <label class="text-muted formLabel" for="inputCompanyURL">Company website</label>
                                <input type="text" class="form-control" name="inputCompanyURL" id="inputCompanyURL" placeholder="https://www.profasee.com/" value="<?php echo set_value('inputCompanyURL'); ?>">
                            </div>
                        </div>
                        <div class="form-row" style="margin-bottom:1rem">
                            <div class="col">
                            <label class="text-muted formLabel" for="inputCompanyEmail">Email</label>
                            <input type="email" class="form-control" name="inputCompanyEmail" id="inputCompanyEmail" placeholder="prakash.vishnu@profasee.com" value="<?php echo set_value('inputCompanyEmail'); ?>">
                            </div>
                            <div class="col">
                                <label class="text-muted formLabel" for="inputSignupRole">Your role in company</label>
                                <select class="form-control" id="inputSignupRole" name="inputSignupRole">
                                    <option value="-1" >-Select-</option>
                                    <option value="1">Founder</option>
                                    <option value="2">Human Resource Manager</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted formLabel" for="inputCompanypwd">Password</label>
                            <input type="password" class="form-control" name="inputCompanypwd" id="inputCompanypwd" placeholder="AplhaNumeric" value="<?php echo set_value('inputCompanypwd'); ?>">
                        </div>
                        <div class="form-group">
                            <label class="text-muted formLabel" for="inputContactPhone">Phone number</label>
                            <input type="text" class="form-control" name="inputContactPhone" id="inputContactPhone" placeholder="9876-543210">
                        </div>       
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-5" style="flex:0 0 46%;max-width:46%">
                                    <a href="#"><u>Forgot password?</u></a>
                                </div>
                                <div class="col-1" style="flex:0 0 8%;max-width:8%">   
                                    <span class="text-muted">or</span>
                                </div>
                                <div class="col-5" style="flex:0 0 46%;max-width:46%">
                                    <a href="/companies/signup"><u>Already have an company account.?</u></a>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Create an account <i class="fa fa-arrow-right fa-fw"></i></button>
                        </div>         
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php $this->load->view('templates/indexFooter'); ?>
<?php $this->load->view('templates/footer'); ?>