<?php include('header.php');?>


    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Request</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
            </div>
          </div>
        </div>
        <div class="content-body">
					<!-- Basic form layout section start -->
<section id="basic-form-layouts">
	
	


	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-card-center">Proposal</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form">
							<div class="form-body">
                  <div class="form-group">
                      <label for="projectinput8">Description</label>
                      <textarea id="projectinput8" rows="5" class="form-control" name="description" placeholder="About Bid"></textarea>
                  </div>
                  <div class="form-group">
                  <div class="form-group">
                      <label for="eventRegInput1">Price</label>
                      <input type="text" id="eventRegInput1" class="form-control" placeholder="Price" name="fullname">
                  </div>
								</div>
							</div>

							<div class="form-actions center">
								<button type="button" class="btn btn-warning mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> Submit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php include('footer.php');?>
