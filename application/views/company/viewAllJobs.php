<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menuHeader'); ?>
    <div class="container" style="margin-top:8rem;">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <h4 class="card-header" style="background-color:#FFF">Links</h4>
                    <ul class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action active" href="/app/company/a"><i class="fa fa-university fa-fw" aria-hidden="true"></i> About</a>
                        <a class="list-group-item" href="/company/postjob"><i class="fa fa-send fa-fw" aria-hidden="true"></i> Post a job</a>
                        <a class="list-group-item" href="#"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Older Posts</a>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-12">
                        <div class="row" style="margin-top:10px;">
                            <div class="col-8">
                                <h3>View All Jobs</h3>
                            </div>
                            <div class="col-4">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"> In-Active
                                    </label>
                                </div>
                            </div>
                            <div class="col-12"><hr style="margin:0rem"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <?php foreach($jobInfo as $job): ?>
                                <div class="card" style="margin-top:10px;margin-bottom:10px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <p style="margin:0px;"><span class="card-subtitle" style="font-weight:bold;font-size:1.25rem"><?php echo $job['JOB_TITLE']; ?></span></p>
                                                <!-- <p style="margin:0px;"><span class="text-muted" style="font-size:12px;"><?php echo $job['JOB_ROLE']; ?></span></p> -->
                                                <p style="margin:0px;"><span class="text-muted" style="font-size:14px;"><i class="fa fa-tags fa-fw"></i><?php echo $job['JOB_SKILLS']; ?></span></p>
                                                <p style="margin-top:10px;"><span class="text-muted"><?php echo substr($job['JOB_DESCRIPTION'], 0, 270); ?><a href="">Click to view..</a></p>
                                            </div>
                                            <div class="col-4">
                                                <p style="margin:0px;"><span class="text-muted" style="font-size:12px;"><?php echo $job['JOB_LOCATION']; ?></span></p>
                                                <p style="margin-bottom:5px;"><span class="text-muted" style="font-size:12px;"><?php echo gmdate("d-m-Y", $job['DATE_POSTED']); ?></span></p>
                                                <p>
                                                    <button class="btn btn-primary" onclick="editUserExperience()" style="font-size:12px;"><i class="fa fa-edit fa-fw"></i>Edit</button>
                                                    <button class="btn btn-primary" onclick="editUserExperience()" style="font-size:12px;"><i class="fa fa-ban fa-fw"></i>Mark as In-Active</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <footer class="footerSticky">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer> -->
<?php $this->load->view('templates/footer'); ?>