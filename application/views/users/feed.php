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
        <div class="col-3">
            <div class="card">
                <img class="rounded-circle" src="/images/sumi.jpg" height="150px" width="150px" alt="Card image cap" style="margin-left:25%;margin-top:2%">
                <div class="card-body text-center">
                    <h4 class="card-title text-center">Sumitha</h4>
                    <h5 class="card-title text-center text-muted">Vembu Technologies</h5>
                    <div class="row">
                        <div class="col-6 text-center">
                            <a style="font-weight:bold">358</a><br>
                            <a href="#" class="text-center">Connections</a>
                        </div>
                        <div class="col-6 text-center">
                            <a style="font-weight:bold">38</a><br>
                            <a href="#" class="text-center">Views</a>
                        </div>
                    </div>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="/user/profile" class="btn btn-primary text-center" style="margin-top:1rem">View my profile</a>
                </div>
                <!-- <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div> -->
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <nav class="nav">
                        <a class="nav-link active" href="#"><i class="fa fa-edit fa-fw"></i>Share an update</a>
                        <a class="nav-link" href="#"><i class="fa fa-file-image-o fa-fw"></i>Upload a photo</a>
                        <a class="nav-link" href="#"><i class="fa fa-file-text fa-fw"></i>Write an article</a>
                    </nav>
                </div>
                <div class="card-body">
                    <p class="card-text">Write Something.</p>                    
                </div>
            </div>
            <div class="card" style="margin-top:1rem">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:13%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:13%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <small class="text-muted">3 mins ago</small>
                        </div>
                    </div>
                    
                    
                </div>
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <!-- <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-heart fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-share fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-comment-o fa-fw"></i></a>
                </div>
            </div>

            <div class="card" style="margin-top:1rem">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:13%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:13%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <small class="text-muted">3 mins ago</small>
                        </div>
                    </div>
                    
                    
                </div>
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <!-- <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-heart fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-share fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-comment-o fa-fw"></i></a>
                </div>
            </div>

            <div class="card" style="margin-top:1rem">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:13%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:13%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <small class="text-muted">3 mins ago</small>
                        </div>
                    </div>
                    
                    
                </div>
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <!-- <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-heart fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-share fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-comment-o fa-fw"></i></a>
                </div>
            </div>

            <div class="card" style="margin-top:1rem">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:13%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:13%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <small class="text-muted">3 mins ago</small>
                        </div>
                    </div>
                    
                    
                </div>
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <!-- <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-heart fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-share fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-comment-o fa-fw"></i></a>
                </div>
            </div>

            <div class="card" style="margin-top:1rem">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:13%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:13%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                        <div class="col-3 text-right">
                            <small class="text-muted">3 mins ago</small>
                        </div>
                    </div>
                    
                    
                </div>
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <!-- <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
                </div>
                <div class="card-footer">
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-heart fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-share fa-fw"></i></a>
                    <a class="btn btn-light" href="#" role="button"><i class="fa fa-comment-o fa-fw"></i></a>
                </div>
            </div>            
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Keep in touch</h4>
                    <hr>
                    <div class="row" style="margin:20% 0% 10% -10%">
                        <div class="col-12">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:25%;top:-15%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:25%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin:20% 0% 10% -10%">
                        <div class="col-12">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:25%;top:-15%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:25%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin:20% 0% 10% -10%">
                        <div class="col-12">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:25%;top:-15%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:25%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin:20% 0% 10% -10%">
                        <div class="col-12">
                            <img class="rounded-circle" src="/images/sumi.jpg" height="30px" width="30px" style="float:left">
                            <div style="position:absolute;left:25%;top:-15%">
                                <span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>                <!-- <span class="card-subtitle text-muted" style="font-size:12px;">Vembu Technologies</span> -->
                            </div>
                            <div style="position:absolute;top:50%;left:25%">
                                <!--<span class="card-title"><strong>Sumitha SuriyaPrakash</strong></span>-->
                                <span class="card-subtitle" style="font-size:12px;">Vembu Technologies</span>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <!-- <a href="/user/profile" class="btn btn-primary text-center" style="margin-top:1rem">View my profile</a> -->
                </div>
                <!-- <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>