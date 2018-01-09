<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/indexMenubar'); ?>
    <body>
    <div class="container" style="padding:1rem 0rem">
        <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
            <div class="card">
                <div class="card-img-top" style="height:100px;border-radius:0px;background:linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%)"><h2 class="card-title" style="color:#FFF;padding-top:25px;padding-left:1.15rem">SignUp</h2></div>
                <div class="card-body">
                    <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>     
                    <form method="POST" action="<?php echo base_url(); ?>form_validation/ValidateSignup">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="txtInputName">First Name</label>
                                    <input type="text" class="form-control" id="inptUserFName" name="inptUserFName" aria-describedby="Username" placeholder="First Name" value="<?php echo set_value('inptUserFName'); ?>">                                
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="txtInputName">Last Name</label>
                                    <input type="text" class="form-control" id="inptUserLName" name="inptUserLName" aria-describedby="Username" placeholder="Last Name" value="<?php echo set_value('inptUserLName'); ?>">                                
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="textEmail">Email address</label>
                            <input type="email" class="form-control" id="inptEmail" name="inptEmail" aria-describedby="Email ID" placeholder="Enter email" value="<?php echo set_value('inptEmail'); ?>">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="textPassword">Password</label>
                            <input type="password" class="form-control" id="inptPassword" name="inptPassword" placeholder="Password" value="<?php echo set_value('inptPassword'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="textPhoneNo">Phone Number</label>
                            <input type="number" class="form-control" id="inptPhoneNo" name="inptPhoneNo" placeholder="Phone Number(10-digit)" value="<?php echo set_value('inptPhoneNo'); ?>">
                        </div>
                        <!-- <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="textLicAgreement">
                                I agree to <a href="#">Terms and Conditions</a>
                            </label>
                        </div> -->
                        <div class="form-group">
                            <span class="text-muted">or</span> <a href="/account/signin"><u>Already have and account.?</u></a>
                        </div>
                        <button type="submit" class="btn btn-primary" onClick="validateUserLogin();" >Submit <i class="fa fa-arrow-right"></i></button>
                    </form>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
<?php $this->load->view('templates/indexFooter'); ?>
<?php $this->load->view('templates/footer'); ?>