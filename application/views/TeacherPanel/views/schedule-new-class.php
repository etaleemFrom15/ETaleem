
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
				<?php if($paid_invoices!=false){?>
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-card-center">Schedule</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<form class="form">
							<div class="form-body">
                  <div class="form-group">
											<label for="projectinput5">Courses</label>
											<select onchange="check_class()" id="c_id" name="interested" class="form-control">
												<option value="none" selected="" disabled="">--Select Course--</option>
												<?php foreach($paid_invoices as $paid_invoice){?>


												<option value="<?php echo $paid_invoice['Course_Id'];?>"><?php echo $paid_invoice['c_name']; ?></option>


												<option id='<?php echo "c_name".$paid_invoice['Course_Id'];?>' style="display: none"><?php echo $paid_invoice['c_name'];?></option>

												<?php } ?>



											</select>
                    </div>
                    
                    <div class="form-group">
											<label for="issueinput3">Date</label>
											<input type="date" id="date" class="form-control" name="date" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date">
                    </div>
                    <div class="form-group">
											<label for="timesheetinput5">Start Time</label>
											<div class="position-relative has-icon-left">
												<input type="time" id="s_time" class="form-control" name="starttime">
												<div class="form-control-position">
													<i class="icon-clock5"></i>
												</div>
											</div>
                    </div>
                    <div class="form-group">
											<label for="timesheetinput5">End Time</label>
											<div class="position-relative has-icon-left">
												<input type="time" id="e_time" class="form-control" name="endtime">
												<div class="form-control-position">
													<i class="icon-clock5"></i>
												</div>
											</div>
										</div>
										<input type="hidden" value="<?php echo base_url(); ?>" id="base_url">
                  <div class="form-group">
									
								</div>
							</div>

							<div class="form-actions center">
								
								<button type="button" onclick="schedule_class()" class="btn btn-primary">
									<i class="icon-check2"></i> Schedule Class								</button>
							</div>
						</form>
						<div class="alert alert-success" style="display: none">
							Class Has been Schduled
						</div>

						<div class="alert alert-danger" style="display: none">
							
						</div>

					</div>
				</div>
				<?php } else{ ?>
					<div class="card-header">
					<h4 class="card-title" id="basic-layout-card-center">No student has hired you for online class</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

