
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
                <li class="breadcrumb-item"><a href="#">Tables</a>
                </li>
                <li class="breadcrumb-item active">Courses
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body">
            



<!-- Table head options start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Course Content</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                       <?php
                  $id=$this->uri->segment('4');
                echo" <li><a href='".site_url('TeacherPanel/uploadvideo/index/'.$id.'')."'> Add New Video</a><i class='icon-arrow-right4'></i>
                      </li>
              ";?>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table id="course-table" class="table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Video Title</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php   
  // $query = $this->db->get('course_content');
         foreach ($contents as $row)
        {

           echo "<tr>

                <td>".$row->name."</td>
                <td>".$row->description."</td>
              
                <td><a href='../../courses/delete_content/".$row->id."'>Delete</a></td>

            </tr>";
        }?>
                        </tbody>
                    </table>    
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


 
 <?php include('footer.php');?>
