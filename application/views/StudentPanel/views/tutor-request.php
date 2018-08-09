<?php include('header.php');?>


    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Tutor Requests</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Tables</a>
                </li>
                <li class="breadcrumb-item active">Requests
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
                <h4 class="card-title">Requests</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table id="course-table" class="table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>S.No</th>
                                <th>Subject</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Bids</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Science</td>
                                <td>Online</td>
                                <td>Hired</td>
                                <td><a href="bid-view.html">Closed</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>History</td>
                                <td>Online</td>
                                <td>Pending</td>
                                <td><a href="bid-view.html">View</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>C++</td>
                                <td>Online</td>
                                <td>Pending</td>
                                <td><a href="bid-view.html">View</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>JAVA SE</td>
                                <td>Online</td>
                                <td>Pending</td>
                                <td><a href="bid-view.html">View</a></td>
                            </tr>
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
