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
                    <a class="btn btn-success my-2 my-sm-0" href="/candidate/signup" style="font-size:13px">SIGN UP</a>
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
            <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
                <span><i class="fa fa-code fa-fw"></i>Professional Info</span>
                <span class="badge badge-pill" style="color:#155724"><i class="fa fa-check"></i></span>
            </li>
            <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
                <span><i class="fa fa-building-o fa-fw"></i>Company Info</span>
                <span class="badge badge-pill" style="color:#155724"><i class="fa fa-check"></i></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center active">
                <span><i class="fa fa-cubes fa-fw"></i>Other Info</span>
                <span class="badge badge-pill"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
            </li>
        </ul>
        </div>
        <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>
                <form method="POST" action="<?php echo base_url(); ?>form_validation/ValidateandSaveOtherInfo">
                    <div class="form-group">
                        <label for="inptLinkedInProfile">Linked URL</label>
                        <input type="text" class="form-control" id="inptLinkedInProfile" name="inptLinkedInProfile" aria-describedby="Username" placeholder="Linked Profile Link" value="<?php echo set_value('txtUsername'); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="inptGithubProfile">GitHub URL</label>
                        <input type="text" class="form-control" id="inptGithubProfile" name="inptGithubProfile" aria-describedby="Username" placeholder="GitHub Profile Link" value="<?php echo set_value('txtUsername'); ?>">                                                        
                    </div>
                    <button type="submit" class="btn btn-primary">Finish <i class="fa fa-save"></i></button>
                </form>
                
            </div>
        </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>