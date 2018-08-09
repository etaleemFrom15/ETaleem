
   <?php include('header.php');?>

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Courses</h2>
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
					<h4 class="card-title" id="basic-layout-card-center">New Course</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
		<form class="form" action="../coursedir_maker/savedirectory" method="post" enctype="multipart/form-data">
							<div class="form-body">
								<div class="form-group">
                    <label for="eventRegInput1">Course Title</label>
                 <input type="text" id="eventRegInput1" class="form-control" placeholder="Title" name="folder_name">
                  </div>
                  <div class="form-group">
                      <label for="projectinput8">Description</label>
                      <textarea id="projectinput8" rows="5" class="form-control" name="course_desc" placeholder="About Course"></textarea>
                  </div>
                  <div class="form-group">
											<label for="projectinput5">Category</label>
											<?php 

                   $query=$this->db->get('catogery');
                  echo "<select name='category' class='form-control'>";
                  echo "<option value='0'>Select Category</option>";
                   $result=$query->result();
                   foreach($result as $row){
                 echo "<option value='".$row->id."'>".$row->cat."</option>";

                       }
                    echo "</select>";
                       ?>
										</div>
                  <div class="form-group">
                  <div class="form-group">
                      <label for="eventRegInput1">Course Price</label>
                      <input type="text" id="eventRegInput1" class="form-control" placeholder="Price" name="course_price">
                  </div>
									<label>Course Thumbnail</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" name="course_thumb" id="thumb-img" >
										<span class="file-custom"> 
                     <img id="thumb-img-tag" src="#" height="170" width="210" /></span>
									</label>
								</div>
							</div>

							<div class="form-actions center">
								<button type="button" id="cancel_btn" class="btn btn-warning mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary" name="make_folder">
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

  <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#thumb-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#thumb-img").change(function(){
        readURL(this);
    });
</script>

