<?php $this->load->view('templates/header'); ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">		
        <a class="navbar-brand" href="#"><img src="resources/images/prof_logo.png" style="width:20%"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-nav flex-row ml-md-auto d-none d-md-flex" style="font-size:13px">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="padding-right:1rem;padding-left:1rem;">FIND A JOB <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="padding-right:1rem;padding-left:1rem;">START HIRING</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="padding-right:1rem;padding-left:1rem;">ABOUT US</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="padding-right:1rem;padding-left:1rem;">FAQ</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="/candidate/signin" style="font-size:13px">LOG IN</a>
                </li>
                <li class="nav-item active" style="margin-left:1rem">
                    <a class="btn btn-success my-2 my-sm-0" href="/account/signup" style="font-size:13px">SIGN UP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="padding:7rem 0rem">
    <div class="row">
        <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
                <span><i class="fa fa-user fa-fw"></i>Presonal Info</span>
                <span class="badge badge-pill" style="color:#155724"><i class="fa fa-check"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center active">
                <span><i class="fa fa-code fa-fw"></i>Professional Info</span>
                <span class="badge badge-pill"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
            </li>
            <li class="list-group-item">
                <span><i class="fa fa-building-o fa-fw"></i>Company Info</li></span>
            </li>
            <li class="list-group-item">
                <span><i class="fa fa-cubes fa-fw"></i>Other Info</span>
            </li>
        </ul>
        </div>
        <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>
                <form method="POST" action="<?php echo base_url(); ?>form_validation/ValidateandSaveProfessionalInfo">
                    <div class="form-group">
                        <label for="textPassword">Title</label>
                        <input type="text" class="form-control" id="inputTitle" name="inputTitle" placeholder="Profile Heading" value="<?php echo set_value('inputTitle'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="textSummary">Summary</label>
                        <textarea class="form-control" id="inputSummary" name ="inputSummary" placeholder="Professional summary for 2-3 lines" rows="3"><?php echo set_value('inputSummary'); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputExpertiseIn">Expertise Field</label>
                        <input type="text" class="form-control" id="inputExpertiseIn" name="inputExpertiseIn" aria-describedby="Username" placeholder="Expertise Field" value="<?php echo set_value('inputExpertiseIn'); ?>">       
                        <small id="inputExpertiseIn" class="form-text text-muted">Sepertae multiple field by comma[ , ].</small>                         
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="textEmail">Overall Expertise in Yrs & Months</label>
                            <select class="form-control" name="inputexperinceinYrs" id="inputexperinceinYrs" value="<?php echo set_value('inputexperinceinYrs'); ?>">
                                <option value="">-</option>
                                <option value="0" <?php echo set_select('inputexperinceinYrs','0', ( !empty($data) && $data == "0" ? TRUE : FALSE )); ?>>0</option>
                                <option value="1" <?php echo set_select('inputexperinceinYrs','1', ( !empty($data) && $data == "1" ? TRUE : FALSE )); ?>>1</option>
                                <option value="2" <?php echo set_select('inputexperinceinYrs','2', ( !empty($data) && $data == "2" ? TRUE : FALSE )); ?>>2</option>
                                <option value="3" <?php echo set_select('inputexperinceinYrs','3', ( !empty($data) && $data == "3" ? TRUE : FALSE )); ?>>3</option>
                                <option value="4" <?php echo set_select('inputexperinceinYrs','4', ( !empty($data) && $data == "4" ? TRUE : FALSE )); ?>>4</option>
                                <option value="5" <?php echo set_select('inputexperinceinYrs','5', ( !empty($data) && $data == "5" ? TRUE : FALSE )); ?>>5</option>
                                <option value="6" <?php echo set_select('inputexperinceinYrs','6', ( !empty($data) && $data == "6" ? TRUE : FALSE )); ?>>6</option>
                                <option value="7" <?php echo set_select('inputexperinceinYrs','7', ( !empty($data) && $data == "7" ? TRUE : FALSE )); ?>>7</option>
                                <option value="8" <?php echo set_select('inputexperinceinYrs','8', ( !empty($data) && $data == "8" ? TRUE : FALSE )); ?>>8</option>
                                <option value="9" <?php echo set_select('inputexperinceinYrs','9', ( !empty($data) && $data == "9" ? TRUE : FALSE )); ?>>9</option>
                                <option value="10" <?php echo set_select('inputexperinceinYrs','10', ( !empty($data) && $data == "10" ? TRUE : FALSE )); ?>>10</option>
                                <option value="11" <?php echo set_select('inputexperinceinYrs','11', ( !empty($data) && $data == "11" ? TRUE : FALSE )); ?>>11</option>
                                <option value="12" <?php echo set_select('inputexperinceinYrs','12', ( !empty($data) && $data == "12" ? TRUE : FALSE )); ?>>12</option>
                                <option value="13" <?php echo set_select('inputexperinceinYrs','13', ( !empty($data) && $data == "13" ? TRUE : FALSE )); ?>>13</option>
                                <option value="14" <?php echo set_select('inputexperinceinYrs','14', ( !empty($data) && $data == "14" ? TRUE : FALSE )); ?>>14</option>
                                <option value="15" <?php echo set_select('inputexperinceinYrs','15', ( !empty($data) && $data == "15" ? TRUE : FALSE )); ?>>15</option>
                                <option value="16" <?php echo set_select('inputexperinceinYrs','16', ( !empty($data) && $data == "16" ? TRUE : FALSE )); ?>>16</option>
                                <option value="17" <?php echo set_select('inputexperinceinYrs','17', ( !empty($data) && $data == "17" ? TRUE : FALSE )); ?>>17</option>
                            </select>  
                        </div>
                        <div class="form-group col-md-6" style="padding-top:32px;">                            
                            <select class="form-control" name="inputexperinceinMnths" id="inputexperinceinMnths" value="<?php echo set_value('inputexperinceinMnths'); ?>">
                                <option value="">-</option>
                                <option value="0" <?php echo set_select('inputexperinceinMnths','0', ( !empty($data) && $data == "0" ? TRUE : FALSE )); ?>>0</option>
                                <option value="1" <?php echo set_select('inputexperinceinMnths','1', ( !empty($data) && $data == "1" ? TRUE : FALSE )); ?>>1</option>
                                <option value="2" <?php echo set_select('inputexperinceinMnths','2', ( !empty($data) && $data == "2" ? TRUE : FALSE )); ?>>2</option>
                                <option value="3" <?php echo set_select('inputexperinceinMnths','3', ( !empty($data) && $data == "3" ? TRUE : FALSE )); ?>>3</option>
                                <option value="4" <?php echo set_select('inputexperinceinMnths','4', ( !empty($data) && $data == "4" ? TRUE : FALSE )); ?>>4</option>
                                <option value="5" <?php echo set_select('inputexperinceinMnths','5', ( !empty($data) && $data == "5" ? TRUE : FALSE )); ?>>5</option>
                                <option value="6" <?php echo set_select('inputexperinceinMnths','6', ( !empty($data) && $data == "6" ? TRUE : FALSE )); ?>>6</option>
                                <option value="7" <?php echo set_select('inputexperinceinMnths','7', ( !empty($data) && $data == "7" ? TRUE : FALSE )); ?>>7</option>
                                <option value="8" <?php echo set_select('inputexperinceinMnths','8', ( !empty($data) && $data == "8" ? TRUE : FALSE )); ?>>8</option>
                                <option value="9" <?php echo set_select('inputexperinceinMnths','9', ( !empty($data) && $data == "9" ? TRUE : FALSE )); ?>>9</option>
                                <option value="10" <?php echo set_select('inputexperinceinMnths','10', ( !empty($data) && $data == "10" ? TRUE : FALSE )); ?>>10</option>
                                <option value="11" <?php echo set_select('inputexperinceinMnths','11', ( !empty($data) && $data == "11" ? TRUE : FALSE )); ?>>11</option>
                                <option value="12" <?php echo set_select('inputexperinceinMnths','12', ( !empty($data) && $data == "12" ? TRUE : FALSE )); ?>>12</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputExpertiseSkill">Expertise Skills</label>
                        <input type="text" class="form-control" id="inputExpertiseSkill" name="inputExpertiseSkill" aria-describedby="Username" placeholder="Area of Expertise" value="<?php echo set_value('inputExpertiseSkill'); ?>">       
                        <small id="inputExpertiseIn" class="form-text text-muted">Sepertae multiple skills by comma[ C, C++, PHP & etc ].</small>                         
                    </div>
                    <button type="submit" class="btn btn-primary">Next <i class="fa fa-arrow-right"></i></button>
                </form>
                
            </div>
        </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>