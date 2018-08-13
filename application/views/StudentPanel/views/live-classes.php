
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Schedule Classes</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Tables</a>
                </li>
                <li class="breadcrumb-item active">Schedule Classes
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
                <h4 class="card-title">Scheduled Classes</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a href=""><i class="icon-plus2"></i> Schedule New Class</a></li>
                    </li>
                    </ul>
                </div>
            </div>

            <div class="card-body collapse in">
              <?php if($classes!=false){?>
                <div class="table-responsive">
                    <table id="course-table" class="table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Course</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                            foreach($classes as $class){
                              foreach ($invoice_online as $invoice) {
                                if($class['course_id']==$invoice['Course_Id']){
                            ?>
                            <tr>
                              <td id="c_name<?php echo $class['cid']; ?>"><?php echo $class['c_name']; ?></td>
                              <td><?php echo $class['start_time']; ?></td>
                              <td><?php echo $class['end_time']; ?></td>
                              <td><?php echo $class['date']; ?></td>

                              <td id="s_id<?php echo $class['cid']; ?>" style="display: none">
                                <?php echo (int) $_SESSION['user_id']."0" ?>
                                  
                              </td>

                              <td id="userName<?php echo $class['cid']; ?>" style="display: none">
                                <?php echo $_SESSION['user_fname']; ?>
                                  
                              </td>


                              <td>
                                <?php 
                                    date_default_timezone_set("Asia/Karachi");
                                    $current_date=date('Y-m-d');
                                    if($current_date==$class['date']){

                                      $current_time=date("h:ia");
                                      if($current_time>=$class['start_time'] AND $current_time<$class['end_time'] ){
                                        echo "<button id='".$class['cid']."' onclick='join_class(this.id)' class='btn btn-sm btn-primary'>Join</a>";
                                      }
                                      else{
                                        echo "Wait";
                                      }
                                    }
                                    
                                  ?>

                              </td>
                            </tr>
                          <?php break; } }} ?>
                        </tbody>
                    </table>    
                </div>
              <?php } else {?>
                <p>None Of your Teacher Has Scheduled Any Class</p>
              <?php } ?>
              
            </div>
        </div>
    </div>
</div>
<!-- Table head options end -->






        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


