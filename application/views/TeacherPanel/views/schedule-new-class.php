<?php include('header.php');?>

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Schedule</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li>
              </ol>
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
					<h4 class="card-title" id="basic-layout-card-center">Schedule</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form">
							<div class="form-body">
                  <div class="form-group">
											<label for="projectinput5">Course</label>
											<select id="projectinput5" name="interested" class="form-control">
												<option value="none" selected="" disabled="">--Select Course--</option>
												<option value="design">design</option>
												<option value="development">development</option>
												<option value="illustration">illustration</option>
												<option value="branding">branding</option>
												<option value="video">video</option>
											</select>
                    </div>
                    
                    <div class="form-group">
											<label for="issueinput3">Date</label>
											<input type="date" id="issueinput3" class="form-control" name="date" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date">
                    </div>
                    <div class="form-group">
											<label for="timesheetinput5">Start Time</label>
											<div class="position-relative has-icon-left">
												<input type="time" id="timesheetinput5" class="form-control" name="starttime">
												<div class="form-control-position">
													<i class="icon-clock5"></i>
												</div>
											</div>
                    </div>
                    <div class="form-group">
											<label for="timesheetinput5">End Time</label>
											<div class="position-relative has-icon-left">
												<input type="time" id="timesheetinput5" class="form-control" name="endtime">
												<div class="form-control-position">
													<i class="icon-clock5"></i>
												</div>
											</div>
										</div>
                  <div class="form-group">
									
								</div>
							</div>

							<div class="form-actions center">
								<button type="button" class="btn btn-warning mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> Add
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
