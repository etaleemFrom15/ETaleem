
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
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Tables</a>
              </li>
              <li class="breadcrumb-item active">Course View
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-body"></div>

        <!-- Table head options start -->
        <div class="row">
          <div class="col-xs-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Course Content</h4>
                <a class="heading-elements-toggle">
                  <i class="icon-ellipsis font-medium-3"></i>
                </a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                  <?php
                  $id=$this->uri->segment('4');
                echo" <li><a href='".site_url('TeacherPanel/courses/coursecontent/'.$id.'')."'> Go To Course Content</a><i class='icon-arrow-right4'></i>
                      </li>
              ";?>
                  </ul>
                </div>
              </div>
              <div class="card-body collapse in">
                <div class="table-responsive">
                  <!--START VIDEO GALLERY -->

        <?php
       
 
             if($user_id){
 foreach($contents as $content){
                 $contentdesc=$content->description;
             
                   echo "<div class='gallery'>";
                   $content_desc=strlen($contentdesc)>16 ? substr($contentdesc,0,16).'...' : $contentdesc;
                    echo "<div class='desc'>".$content_desc."</div> 
                     <div class='embed-responsive embed-responsive-16by9 z-depth-1-half'>
                              <video class='embed-responsive-item' src=".$content->path." type='video/mp4' controls></video>
                            </div>
                   ";
                  echo "</div>";
                 }}
             ?>      
                  
                  <!--END VIDEO GALLERY -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Table head options end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <!-- ////////////////////////////////////////////////////////////////////////////-->


 
  <script>
    $("#modal1").on("hidden.bs.modal", function (e) {
      // do something...
      $("#modal1 video").attr("src", $("#modal1 video").attr("src"));
    });

   
  </script>

   <?php include('footer.php');?>