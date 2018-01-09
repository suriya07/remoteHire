<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menuHeader'); ?>

<div class="jumbotron jumbotron-fluid" style="padding:2rem 2rem;">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="<?php echo base_url(); ?>images/company_logo.jpg" class="rounded float-left" alt="" style="width: 150px; height: 150px;">
            </div>
            <div class="col-10" style="padding:15px  0px  0px  0px">
                <h3><?php echo $COMPANY_NAME; ?></h1>
                <h4>A fundamentally new way to communicate with your customers</h4>
            </div>        
        </div>
    </div>
</div>
<div class="container" style="margin-bottom:50px;">
    <div class="row">        
        <div class="col-3" style="max-width:23%;">
            <div class="card" style="/*position:fixed;width:15%*/">
                <h4 class="card-header">Links</h4>
                <ul class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action active" href="#"><i class="fa fa-university fa-fw" aria-hidden="true"></i> About</a>
                    <a class="list-group-item" href="/company/postjob"><i class="fa fa-send fa-fw" aria-hidden="true"></i> Post a job</a>
                    <a class="list-group-item"  href="/company/jobs"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Older Posts</a>
                </ul>
            </div>
        </div>

        <div class="col-6" style="max-width:52%">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">About Company</h4>
                </div>
                <div class="card-body">                   
                    <p class="card-text"><?php echo $COMPANY_DESCRIPTION; ?></p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <!-- <div class="card" style="margin-top:1rem">
                <div class="card-header">
                    <h4 class="card-title">Products</h4>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Click to add Products</a>
                </div>
            </div> -->
        </div>

        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Special title treatment</h4> -->
                    <p class="card-text"><i class="fa fa-map-marker fa-fw"></i><?php echo $COMPANY_LOCATION ; ?>· San Francisco</p>
                    <p class="card-text"><i class="fa fa-users fa-fw"></i> 
                        <?php 
                            if($COMPANY_SIZE == 1){
                                $strength = '1 - 10';
                            }elseif($COMPANY_SIZE == 2){
                                $strength = '11 - 50';
                            }elseif($COMPANY_SIZE == 3){
                                $strength = '51 - 100';
                            }elseif($COMPANY_SIZE == 4){
                                $strength = '100+';
                            }elseif($COMPANY_SIZE == 5){
                                $strength = '501 - 1000';
                            }
                            echo $strength.' employees';
                        ?>                        
                    </p>
                    <p class="card-text text-muted" style="margin-bottom:.1rem">Social Media</p><hr style="margin-top:.1rem">
                    <p class="card-text">
                        <a href="<?php echo $COMPANY_TWITTER_URL; ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="<?php echo $COMPANY_FACEBOOK_URL;  ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="<?php echo $COMPANY_LINKEDIN_URL; ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a>
                    </p>                    
                </div>
                <div class="card-footer text-muted text-center">
                    <a href="#" class="btn btn-primary"><i class="fa fa-link fa-fw"></i><?php echo $COMPANY_WEBURL; ?></a>
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