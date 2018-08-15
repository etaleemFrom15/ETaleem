
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
              <?php if($scheduled_classes!=false){?>

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
                          <?php foreach($scheduled_classes as $s_class){?>
                            <tr>
                              <td id="c_name<?php echo $s_class['cid']; ?>"><?php echo $s_class['c_name']; ?></td>
                              <td><?php echo $s_class['start_time']; ?></td>
                              <td><?php echo $s_class['end_time']; ?></td>
                              <td><?php echo $s_class['date']; ?></td>

                              <td id="t_id<?php echo $s_class['cid']; ?>" style="display: none">
                                <?php echo (int) $_SESSION['user_id']."1" ?>
                                  
                              </td>

                              <td id="userName<?php echo $s_class['cid']; ?>" style="display: none">
                                <?php echo $_SESSION['user_fname']; ?>
                                  
                              </td>

                              <td>
                                  
                                  <?php 
                                    date_default_timezone_set("Asia/Karachi");
                                    $current_date=date('Y-m-d');
                                    if($current_date==$s_class['date']){

                                      $current_time=strtotime(date("h:ia"));
                                      $start_time=strtotime($s_class['start_time']);
                                      $end_time=strtotime($s_class['end_time']);
                                      if($current_time>=$start_time AND $current_time<$end_time ){
                                        echo "<button id='".$s_class['cid']."' onclick='launch_class(this.id)' class='btn btn-sm btn-primary'>Launch</a>";
                                      }
                                      else{
                                        echo "Wait";
                                      }
                                    }
                                    
                                  ?>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                    </table>    
                </div>
              <?php } else {?>
              <p>You Have Not Scheduled Any Class</p>
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


