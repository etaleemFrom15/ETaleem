<!DOCTYPE html>
<?php
$user_id=$this->session->userdata('user_id');
$user_fname=$this->session->userdata('user_fname');
$user_lname=$this->session->userdata('user_lname');


 
if(!$user_id){
 
  redirect('main');
}?>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Project Dashboard - Robust Free Bootstrap Admin Template</title>
     <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>StudentPanel/app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>StudentPanel/app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>StudentPanel/app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>StudentPanel/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>StudentPanel/app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/assets/css/gallery.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>StudentPanel/assets/css/bid-view.css">

    <!-- END Custom CSS-->
    <!-- Start CDN CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>js/custom.js"></script>
    <!-- END CDN CSS-->
    <style>
    #footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;  
        text-align: center;
      }
    </style>
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="<?php site_url('StudentPanel/views/courses.php');?>" class="navbar-brand nav-link"><img alt="branding logo" src="<?php echo base_url();?>StudentPanel/app-assets/images/logo/etaleem-logo-light.png" data-expand="<?php echo base_url();?>StudentPanel/app-assets/images/logo/etaleem-logo-light.png" data-collapse="<?php echo base_url();?>StudentPanel/app-assets/images/logo/etaleem-logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
          
            <ul class="nav navbar-nav float-xs-right">
             
              <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                  </li>
                  <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">


                    <?php foreach($notifications as $notify){?>
                        
                      <a href="<?php echo base_url()."StudentPanel/main/submitBid/".$notify['req_id']; ?>">
                          <div class="media">
                          <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                          <div class="media-body">
                              <p class="notification-text font-small-3 text-muted">
                                <?php echo $notify['notification']; ?>.
                              </p>
                          </div>
                        </div>
                      </a>
                        <hr>

                      <?php } ?>

                  <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                </ul>
              </li>
        
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="<?php echo base_url();?>StudentPanel/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name"><?php echo $user_fname." ".$user_lname;?></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> Edit Profile</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> My Inbox</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> Task</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> Calender</a>
                  <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
               <li class="nav-item">
                <a class="nav-link nav-link-label" href="<?php echo site_url('main');?>">Go To Website</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
           
              <li class=" nav-item">
                <a href="<?php echo site_url('StudentPanel/main/courses');?>">
                  <i class="icon-video-camera2"></i>
                  <span data-i18n="nav.dash.main" class="menu-title">Courses</span>
                </a>
              </li>
              <li class=" nav-item">
              <a href="<?php echo site_url('StudentPanel/main/teachers');?>">
                <i class="icon-users2"></i>
                <span data-i18n="nav.dash.main" class="menu-title">Teachers</span>
              </a>
          </li>
          
            <li class=" nav-item">
              <a href="<?php echo site_url('StudentPanel/main/tutorRequest');?>"><i class="icon-users2"></i>
              <span data-i18n="nav.dash.main" class="menu-title">Tutor Requests</span>
              </a>
            </li>

            <li class=" nav-item">
              <a href="<?php echo site_url('StudentPanel/main/live_classes');?>"><i class="icon-users2"></i>
              <span data-i18n="nav.dash.main" class="menu-title">Scheduled Classes</span>
              </a>
            </li>

            


            </ul>
          </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->