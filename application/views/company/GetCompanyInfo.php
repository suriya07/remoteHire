<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/blankNav'); ?>
    <div class="container" style="margin-bottom:50px;">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <h4>About Company</h4>
                        <hr>
                    </div>
                </div>
                <div class="card">
                    <!-- <div class="card-header">
                    About Company
                    </div> -->
                    <div class="card-body">
                        <?php if(validation_errors() != false){ echo '<div class="alert alert-danger" role="alert">';echo validation_errors(); echo '</div>';} ?>
                        <form method="POST" action="<?php echo base_url(); ?>company/UpdateCompanyInfo">
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputCompanyLocation">Location</label>
                                        <input type="text" class="form-control" id="inputCompanyLocation" name="inputCompanyLocation" placeholder="Location" value="<?php echo set_value('inputCompanyLocation'); ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputCompanyType">Type</label>
                                        <input type="text" class="form-control" id="inputCompanyType" name="inputCompanyType" placeholder="Type" value="<?php echo set_value('inputCompanyType'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputCompanySize">Number of Employee</label>
                                <select class="form-control" id="inputCompanySize" name="inputCompanySize" value="<?php echo set_value('inputCompanySize'); ?>">
                                    <option value="">-Select-</option>
                                    <option value="1">1 - 10</option>
                                    <option value="2">11 - 50</option>
                                    <option value="3">51 - 100</option>
                                    <option value="4">100+</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputCompanyDescription">About</label>
                                <textarea class="form-control" id="inputCompanyDescription" name="inputCompanyDescription" placeholder="Few words about the company" rows="3"><?php echo set_value('inputCompanyDescription'); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputTwitterPage">Twitter Page</label>
                                <input type="text" class="form-control" id="inputTwitterPage" name="inputTwitterPage" placeholder="https://twitter.com/profasee" value="<?php echo set_value('inputTwitterPage'); ?>">
                            </div>

                            <div class="form-group">
                                <label for="inputFacebookPage">Facebook Page</label>
                                <input type="text" class="form-control" id="inputFacebookPage" name="inputFacebookPage" placeholder="https://facebook.com/profasee" value="<?php echo set_value('inputFacebookPage'); ?>">
                            </div>

                            <div class="form-group">
                                <label for="inputLinkedInPage">LinkedIn Page</label>
                                <input type="text" class="form-control" id="inputLinkedInPage" name="inputLinkedInPage" placeholder="https://linkedin.com/profasee" value="<?php echo set_value('inputLinkedInPage'); ?>">
                            </div>
                            
                            <!-- <p><h2>Products</h2></p>
                            <hr>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Title</label>
                                <input type="text" class="form-control" id="inputLinkedInPage" placeholder="Product Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Summary</label>
                                <input type="text" class="form-control" id="inputLinkedInPage" placeholder="Breif about product">
                            </div>
                        
                            <div class="form-group">
                                <label for="inputLinkedInPage">Link</label>
                                <input type="text" class="form-control" id="inputLinkedInPage" placeholder="https://apple.com/music">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div> -->
                            <button type="submit" class="btn btn-success"><i class="fa fa-save fa-fw"></i>Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
<?php $this->load->view('templates/footer'); ?>