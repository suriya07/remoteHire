<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/indexMenubar'); ?>    
    <body>
        <section class="container-fluid grad" style="border-bottom:2px solid #F3F3F3;height:500px">
            <div style="height:100%;background-image:url('/images/landing_image_new.png');background-repeat:no-repeat!important;object-fit:contain!important;background-position-x:80%!important">
                <div class="row" style="padding:100px;">
                    <div class="col-md-5 text-center">
                        <h1 style="font-weight:200;font-size:40px;margin-bottom:18px;">Apply to top technology jobs in 60 seconds</h1>
                        <p class="text-muted" style="font-size:24px;margin-bottom:18px;">We connect job seekers with awesome companies in New York, San Francisco, and beyond.</p>
                        <p style="margin-bottom:13px;"><a href="/account/signup" class="btn btn-success" style="padding:.5rem 3.75rem;color:#FFF">Find a job</a></p>
                        <a href="/companies/signup" class="btn btn-link">Is your team hiring?</a>
                    </div>
                </div>
            </div>
        </section>
        <section style="padding:5rem 0;border-bottom:2px solid #F3F3F3;height:500px;">
            <div class="container">
                <div class="row" style="margin-top:28px;">
                    <div class="col text-center">
                        <h1 style="font-weight:initial">What makes us different</h1>
                    </div>
                </div>
                <div class="row" style="margin-top:50px;">            
                    <div class="col text-center">
                        <h2><i class="fa fa-calendar fa-2x"></i></h2>
                        <h4 style="margin-top:18px;font-weight:400;">Personal Advising</h4>
                        <p class="text-muted" style="margin-top:18px;">Ask us anything! We’re tax experts, so you don’t have to be. You have a team for all your tax needs.</p>
                    </div>
                    <div class="col text-center">
                        <h2><i class="fa fa-clock-o fa-2x"></i></h2>
                        <h4 style="margin-top:18px;font-weight:400;">Year-Round Availability</h4>
                        <p class="text-muted" style="margin-top:18px;">Here all year to help you make the best tax decisions. Schedule a one-on-one with an advisor anytime.</p>
                    </div>
                    <div class="col text-center">
                        <h2 ><i class="fa fa-usd fa-2x"></i></h2>
                        <h4 style="margin-top:18px;font-weight:400;">Transparent Pricing</h4>
                        <p class="text-muted" style="margin-top:18px;">We eliminated hourly rates and surprises with a simple one-time fee and you pay when you file!</p>
                    </div>                
                </div>
            </div>
        </section>
        <section style="padding:10rem 0;border-bottom:2px solid #F3F3F3;height:500px;">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h1>Never miss a job or candidate again</h1>
                        <p style="font-size:1rem;margin:20px 0px">We’ll take care of the details, so you don’t have to.</p>
                        <button type="button" class="btn btn-primary" style="padding:.5rem 3.75rem">Get Started</button>
                    </div>
                </div>
            </div>
        </section>
<?php $this->load->view('templates/indexFooter'); ?>
<?php $this->load->view('templates/footer'); ?>