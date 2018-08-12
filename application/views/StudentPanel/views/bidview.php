

  <div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
          <div class="breadcrumb-wrapper col-xs-12">
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
          <div class="col-xs-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Course Requests</h4>
                <a class="heading-elements-toggle">
                  <i class="icon-ellipsis font-medium-3"></i>
                </a>
              </div>
            </div>
          
                  <?php foreach($bids as $bid){ ?>

                <div class="single-commemts">

                    <div class="col-md-2 user">
                      <a href="#">
                        <img src="../app-assets/images/user.png" alt="" />
                      </a>
                    </div>
                    

                    <div class="col-md-10 user-comment">
                        
                        <h5>Teacher Name</h5>
                        <p><?php echo $bid['first_name']; ?></p>

                        <h5>Subject</h5>
                        <p><?php echo $bid['c_name']; ?></p>
                        <h5>Type</h5>
                        <p><?php echo $bid['place']; ?></p>

                        <h5>Amount</h5>
                        <p><?php echo $bid['bid'].' RS'; ?></p>

                       

                        <div class="user-bwn">
                          <form action="<?php echo base_url(); ?>Payment_Controller/create_invoice" method="post">
                            <input type="hidden" value="<?php echo $bid['req_id']; ?>" name="req_id">
                            <input type="hidden" value="<?php echo $bid['email']; ?>" name="by">
                            <input class="btn btn-primary" type="submit" value="Accept Bid" name="submit">
                          </form>
                        </div>
                    </div>

                    <div class="clearfix"> </div>

                  </div> 
                  <br><br>
                  <?php } ?>
                             
          </div>
        </div>
        <!-- Table head options end -->
      </div>
    </div>
  </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


