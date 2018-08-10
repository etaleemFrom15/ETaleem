

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Request Bid</h2>
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

		<?php if($checkBid==false){?>

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
                      <input type="number" id="bid" class="form-control" placeholder="Price in RS" name="fullname">
                  </div>

					<input type="hidden" value="<?php echo $req_id; ?>" id="req_id">
					<input type="hidden" value="<?php echo $_SESSION['user_email']; ?>" id="u_email">
					<input type="hidden" value="<?php echo base_url(); ?>" id="base_url">

								</div>

							</div>

							<div class="form-actions center">
								<button type="button" class="btn btn-warning mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								<button type="button" onclick="sendBid()" class="btn btn-primary">
									<i class="icon-check2"></i> Submit
								</button>
							</div>
						</form>
						<div class="alert alert-success" id="bidalert" style="display:none">
						  Bid Has Been Send Succesfully
						</div>
					</div>
				</div>
			
			</div>
			<?php } else{ ?>
				<div class="alert alert-success" id="bidalert">
						  Bid Has Been Already Sent
				</div>
			<?php } ?>



		</div>
	</div>
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


