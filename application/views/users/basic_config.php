<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/blankNav'); ?>
    <div class="container" style="margin-bottom:6.75rem">
        <div class="row" style="margin-top:7rem">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <h4 class="card-header bg-primary" style="color:#FFF">Your Basic Info</h4>
                    <div class="card-body text-center">
                        <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>

                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text text-muted">This will help to populate your profile with your basic information.</p>
                        <hr> 
                        <form method="POST" action="<?php echo base_url(); ?>form_validation/ValidateandSaveBasicInfo">
                            <div class="form-group">
                                <label for="inputMostRecentRole" style="float:left">Most Recent Role<code style="background-color:#FFF">*</code></label>
                                <input type="text" class="form-control" id="inputMostRecentRole" name="inputMostRecentRole" placeholder="Designation" value="<?php echo set_value('inputMostRecentCompany'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputMostRecentCompany" style="float:left">Most Recent Company<code style="background-color:#FFF">*</code></label>
                                <input type="text" class="form-control" id="inputMostRecentCompany" name="inputMostRecentCompany" placeholder="Company Name" value="<?php echo set_value('inputMostRecentCompany'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputCompanyLocation" style="float:left">Location<code style="background-color:#FFF">*</code></label>
                                <input type="text" class="form-control" id="inputCompanyLocation" name="inputCompanyLocation" placeholder="Your Geo Location" value="<?php echo set_value('inputMostRecentCompany'); ?>">
                            </div>             
                            <button type="submit" class="btn btn-success" style="float:left"><i class="fa fa-save fa-fw"></i>Save</button>   
                        </form>                        
                    </div>
                </div>                
            </div>
            <div class="col-3"></div>
        </div>
    </div>
<?php $this->load->view('templates/footerNav'); ?>
<?php $this->load->view('templates/footer'); ?>