<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/blankNav'); ?>
<div class="container" style="padding:7rem 0rem">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center active">
                    <span><i class="fa fa-user fa-fw"></i>Presonal Info</span>
                    <span class="badge badge-pill"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
                </li>
                <li class="list-group-item">
                    <span><i class="fa fa-code fa-fw"></i>Professional Info</span>
                </li>
                <li class="list-group-item">
                    <span><i class="fa fa-building-o fa-fw"></i>Company Info</li></span>
                <li class="list-group-item">
                    <span><i class="fa fa-cubes fa-fw"></i>Other Info</span>
                </li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>     
                    <form method="POST" action="<?php echo base_url(); ?>form_validation/ValidateandSavePersonalInfo">
                        <div class="form-group">
                            <label for="textPassword">D.O.B</label>
                            <input type="date" class="form-control" id="inputdateofBirth" name="inputdateofBirth" placeholder="Password" value="<?php echo set_value('inputdateofBirth'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="textPhoneNo">Gender</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inputGender" id="inputGender1" value="1" <?php echo set_radio('inputGender', 1, TRUE); ?>> <i class="fa fa-male fa-fw"></i>Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inputGender" id="inputGender2" value="2" <?php echo set_radio('inputGender', 2); ?>> <i class="fa fa-female fa-fw"></i>Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textPhoneNo">Marital Status</label><br>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inputMaritalStatus" id="inputMaritalStatus1" value="1" <?php echo set_radio('inputMaritalStatus', '1', TRUE); ?>> <i class="fa fa-user fa-fw"></i>Single
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inputMaritalStatus" id="inputMaritalStatus2" value="2" <?php echo set_radio('inputMaritalStatus', '2'); ?>> <i class="fa fa-users fa-fw"></i>Married
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtInputName">City</label>
                            <input type="text" class="form-control" id="inputCity" name="inputCity" placeholder="Recent city" value="<?php echo set_value('inputCity'); ?>">                                
                        </div>
                        <div class="form-group">
                            <label for="textEmail">State</label>
                            <select class="form-control" name="inputState" value="<?php echo set_value('inputState'); ?>">
                                <option value="">-- Select State --</option>
                                <option value="AN">Andaman and Nicobar Islands</option>
                                <option value="AP">Andhra Pradesh</option>
                                <option value="AR">Arunachal Pradesh</option>
                                <option value="As">Assam</option>
                                <option value="BR">Bihar</option>
                                <option value="CH">Chandigarh</option>
                                <option value="CR">Chhattisgarh</option>
                                <option value="DN">Dadra and Nagar Haveli</option>
                                <option value="DD">Daman and Diu</option>
                                <option value="DL">Delhi</option>
                                <option value="GA">Goa</option>
                                <option value="GJ">Gujarat</option>
                                <option value="HR">Haryana</option>
                                <option value="HP">Himachal Pradesh</option>
                                <option value="JK">Jammu and Kashmir</option>
                                <option value="JH">Jharkhand</option>
                                <option value="KA">Karnataka</option>
                                <option value="KL">Kerala</option>
                                <option value="LD"  >Lakshadweep</option>
                                <option value="MP">Madhya Pradesh</option>
                                <option value="MH">Maharashtra</option>
                                <option value="MN">Manipur</option>
                                <option value="ML">Meghalaya</option>
                                <option value="MZ">Mizoram</option>
                                <option value="NL">Nagaland</option>
                                <option value="OD">Orissa</option>
                                <option value="PY">Pondicherry</option>
                                <option value="PB">Punjab</option>
                                <option value="RJ">Rajasthan</option>
                                <option value="SK">Sikkim</option>
                                <option value="TN">Tamil Nadu</option>
                                <option value="TS">Telangana</option>
                                <option value="TR">Tripura</option>
                                <option value="UK">Uttaranchal</option>
                                <option value="UP">Uttar Pradesh</option>
                                <option value="WB">West Bengal</option>
                            </select>        
                        </div>
                        <!-- <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="textLicAgreement">
                                I agree to <a href="#">Terms and Conditions</a>
                            </label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Next <i class="fa fa-arrow-right"></i></button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>