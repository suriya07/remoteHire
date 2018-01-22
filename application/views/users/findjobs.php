<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menuHeader'); ?>
<div class="container" style="margin-bottom:4rem;margin-top:4rem;min-height:">
    <div class="row" style="padding-bottom:15px;border-bottom:1px solid #CCC;">
        <div class="col-md-10"></div>
        <div class="col-md-2 justify-content-end">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">Filter<i class ="fa fa-filter fa-fw"></i></button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-top:10px;margin-bottom:10px;">
                <div class="card-body">
                    <?php foreach ($jobInfo as $job): ?>
                        <div class="row" style="margin-top:10px;margin-bottom:10px;border-bottom:1px solid #CCC">
                            <div class="col-10">
                                <p style="margin:0px;"><span class="card-subtitle" style="font-weight:bold;font-size:1.25rem"><?php echo $job['JOB_TITLE']; ?></span></p>
                                <!-- <p style="margin:0px;"><span class="text-muted" style="font-size:12px;"><?php echo $job['JOB_ROLE']; ?></span></p> -->
                                <p style="margin:0px;"><span class="text-muted" style="font-size:14px;"><i class="fa fa-tags fa-fw"></i><?php echo $job['SKILL_ID']; ?></span></p>
                                <p style="margin-top:10px;"><span class="text-muted"><?php echo substr($job['JOB_DESCRIPTION'], 0, 270); ?> <a href="">Click to view..</a></p>
                            </div>
                            <div class="col-2">
                                <p style="margin:0px;"><span class="text-muted"><?php echo $job['JOB_LOCATION']; ?></span></p>
                                <p style="margin-bottom:5px;"><span class="text-muted"><?php echo gmdate("d-m-Y",$job['DATE_POSTED']); ?></span></p>
                                <p>
                                    <button class="btn btn-primary" onclick=""><i class="fa fa-send fa-fw"></i>Apply</button>
                                    <!-- <button class="btn btn-primary" onclick="editUserExperience()" style="font-size:12px;"><i class="fa fa-ban fa-fw"></i>Mark as In-Active</button> -->
                                </p>
                            </div>
                        </div>
                    <?php endforeach;?>                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0px;">
        <div class="modal-dialog modal-lg" role="document" style="max-width:100%;">
            <div class="modal-content" style="border-radius:0rem;top:25px;">
                <div class="modal-header" style="border-bottom:0px;">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            
                            <div class="col-md-4">
                                <p class="h6">Job Type</p>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Full-Time</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Contract to Hire</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Contract</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Internship</label>
                                </div>                                									
                            </div>
                            <div class="col-md-4">
                                <p class="h6">Experience Level</p>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Entry Level</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Mid-Senior Level</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Senior Level</label>
                                </div>                                									
                            </div>
                            <div class="col-md-4">
                                <p class="h6">Date Posted</p>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Past 24 hours</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Past Week</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Past Month</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" id="customControlAutosizing">
                                    <label for="customControlAutosizing">Any Time</label>
                                </div>                                
                            </div>
                            <!-- <div class="col-md-3">
                            </div> -->
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="border-top:0px">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Reset</button>
                    <button type="button" class="btn btn-primary">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footerNav'); ?>
<?php $this->load->view('templates/footer'); ?>