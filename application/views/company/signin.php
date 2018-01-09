<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/indexMenubar'); ?>
<div class="container" style="margin-bottom:48px;">
    <div class="row" style="margin-top:8rem">
        <div class="col-8"></div>
        <div class="col-4">
            <div class="card">
            <div class="card-img-top" style="height:100px;border-radius:0px;background:linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%)"><h2 class="card-title" style="color:#FFF;padding-top:35px;padding-left:1.15rem">Company Sign-In</h2></div>
                <div class="card-body">
                    <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>
                    <form method="POST" action="<?php echo base_url(); ?>company/ValidateAndSignin">
                        <div class="form-group">
                            <label class="text-muted formLabel" for="inputCompanyEmail">Email</label>
                            <input type="email" class="form-control" name="inputCompanyEmail" id="inputCompanyEmail" placeholder="" value="<?php echo set_value('inputCompanyEmail'); ?>">
                        </div>
                        <div class="form-group">
                            <label class="text-muted formLabel" for="inputCompanypwd">Password</label>
                            <input type="password" class="form-control"  name="inputCompanypwd" id="inputCompanypwd" placeholder="" value="<?php echo set_value('inputCompanypwd'); ?>">
                        </div>
                        <div class="form-row">
                            <div class="col-5" style="flex:0 0 46%;max-width:46%">
                                <a href="#"><u>Forgot password?</u></a>
                            </div>
                            <div class="col-1" style="flex:0 0 8%;max-width:8%">   
                                <span class="text-muted">or</span>
                            </div>
                            <div class="col-5" style="flex:0 0 46%;max-width:46%">
                                <a href="/companies/signup"><u>Companies Signup</u></a>
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in fa-fw"></i>SignIn</button>      
                        </div>   
                    </form>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php $this->load->view('templates/indexFooter'); ?>
<?php $this->load->view('templates/footer'); ?>