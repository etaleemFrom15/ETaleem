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
                <h4 class="card-title">My Courses</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                    
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table id="course-table" class="table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Course Title</th>
                                <th>Description</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
      $sql="select cdir.id,cdir.dir_name, cdir.course_desc
      from student_courses sc 
      LEFT JOIN course_dir cdir on sc.course_id=cdir.id
      WHERE sc.student_id='$user_id'";
      $query=$this->db->query($sql);
         foreach ($query->result() as $row)
        {

           echo "<tr>

                <td>".$row->dir_name."</td>
                <td>".$row->course_desc."</td>
               <td> <a href=".site_url('StudentPanel/courses/show/'.$row->id.'').">View</a></td>      
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

