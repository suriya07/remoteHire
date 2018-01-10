<?php $this->load->view('templates/header'); ?>
<div class="container">
    <div class="row">
        <div class="col align-self-center" style="padding:5rem 0rem 5rem 0rem;">
            <div class="jumbotron">
                <h1 class="display-3">Hello, <?php echo $name;?>!</h1>
                <p class="lead">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x" style="color:#28a745"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    Thanks for signing up with 'profasee'. We wish to help you in building a better career.
                </p>
                <hr class="my-4">
                <p>We have sent a verification link to your email <a href="#" style="text-decoration:underline;"><?php echo $email;?></a>. Please acknowledge, to authenticate your profile and for receving notifications matching your profile.  Mean while you can sign-in and fill your personal and profile details.</p>
                <p class="lead">
                <a class="btn btn-success btn-lg" href="/candidate/signin" role="button">Signin <i class="fa fa-arrow-right"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>