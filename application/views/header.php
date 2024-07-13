<!DOCTYPE html>

<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="SMS Application">

  <meta name="author" content="?ukasz Holeczek">

  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,jQuery,CSS,HTML,RWD,Dashboard,Vue,Vue.js,React,React.js">

  <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.png">

  <title> SMS Portal</title>

  <!-- Icons -->

  <link href="<?php echo base_url(); ?>vendors/css/font-awesome.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>vendors/css/simple-line-icons.min.css" rel="stylesheet">

  <!-- Main styles for this application -->

  <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

  <!-- Styles required by this views -->

  <link href="<?php echo base_url(); ?>vendors/css/daterangepicker.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>vendors/css/gauge.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>vendors/css/toastr.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>vendors/css/dataTables.bootstrap4.min.css" rel="stylesheet">

 <!-- custom stylesheet for all -->

  <link href="<?php echo base_url(); ?>css/custom-style.css" rel="stylesheet">

  <!-- Begin emoji-picker Stylesheets -->

  <link href="<?php echo base_url(); ?>lib/css/nanoscroller.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>lib/css/emoji.css" rel="stylesheet">

  <style type="text/css">

    .avatar-img-margin {

      margin-right: 80px !important;

  }

  .right a {

        margin-left: 676px;

  }
.toast-top-right .toast.toast-success {
  background-color: #000056 !important;
  display: flex !important;
  align-items: center !important;
  gap: 10px !important;
}
#toast-container .toast.toast-success:before {
    margin: 5px 0 0 -35px !important;
}
  </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

  $( document ).ready(function() {

    setTimeout(function() { $("#toast-container").hide(); }, 4000);

  });

</script>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">







  <header class="app-header navbar">







    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">







      <span class="navbar-toggler-icon"></span>







    </button>







    <a class="navbar-brand"  style="background-color:#bfc8cb;" href="#"> <!--img src="img/" style=""--> </a>







    <button class="navbar-toggler sidebar-toggler d-md-down-none h-100 b-r-1 px-3" type="button">







      <span class="navbar-toggler-icon"></span>







    </button>







    <ul class="nav navbar-nav d-md-down-none mr-auto">















      <!--form class="form-inline px-4">







        <i class="fa fa-search"></i>







        <input class="form-control" type="text" placeholder="Search...">







      </form-->







    </ul>







    <ul class="nav navbar-nav ml-auto">



<ul class="nav navbar-nav ml-auto">
      <!-- <li class="nav-item dropdown d-md-down-none pr-4">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="img/flags/United-Kingdom.png" class="img-flag" alt="English" height="24">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Choose language</strong>
          </div>
          <a class="dropdown-item" href="#">
            <img src="img/flags/Poland.png" class="img-flag" alt="Polish" height="24"> Polish</a>
          <a class="dropdown-item" href="#">
            <img src="img/flags/United-Kingdom.png" class="img-flag" alt="English" height="24"> English</a>
          <a class="dropdown-item" href="#">
            <img src="img/flags/Spain.png" class="img-flag" alt="Español" height="24"> Español</a>
        </div>
      </li> -->
      <li class="nav-item dropdown d-md-down-none">
        <!-- <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
          <div class="dropdown-header text-center">
            <strong>You have 5 notifications</strong>
          </div>
          <a href="#" class="dropdown-item">
            <i class="icon-user-follow text-success"></i> New user registered
          </a>
          <a href="#" class="dropdown-item">
            <i class="icon-user-unfollow text-danger"></i> User deleted
          </a>
          <a href="#" class="dropdown-item">
            <i class="icon-chart text-info"></i> Sales report is ready
          </a>
          <a href="#" class="dropdown-item">
            <i class="icon-basket-loaded text-primary"></i> New client
          </a>
          <a href="#" class="dropdown-item">
            <i class="icon-speedometer text-warning"></i> Server overloaded
          </a>
          <div class="dropdown-header text-center">
            <strong>Server</strong>
          </div>
          <a href="#" class="dropdown-item">
            <div class="text-uppercase mb-1">
              <small><b>CPU Usage</b></small>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
          </a>
          <a href="#" class="dropdown-item">
            <div class="text-uppercase mb-1">
              <small><b>Memory Usage</b></small>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            <small class="text-muted">11444GB/16384MB</small>
          </a>
          <a href="#" class="dropdown-item">
            <div class="text-uppercase mb-1">
              <small><b>SSD 1 Usage</b></small>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            <small class="text-muted">243GB/256GB</small>
          </a>
        </div>
      </li>
     <!--  <li class="nav-item dropdown d-md-down-none">
        <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="icon-list"></i><span class="badge badge-pill badge-warning">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
          <div class="dropdown-header text-center">
            <strong>You have 5 pending tasks</strong>
          </div>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">Upgrade NPM &amp; Bower
              <span class="float-right">
                <strong>0%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">ReactJS Version
              <span class="float-right">
                <strong>25%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">VueJS Version
              <span class="float-right">
                <strong>50%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">Add new layouts
              <span class="float-right">
                <strong>75%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item">
            <div class="small mb-1">Angular 2 Cli Version
              <span class="float-right">
                <strong>100%</strong>
              </span>
            </div>
            <span class="progress progress-xs">
              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
          </a>
          <a href="#" class="dropdown-item text-center">
            <strong>View all tasks</strong>
          </a>
        </div>
      </li> -->
      <li class="nav-item dropdown d-md-down-none">
        <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="icon-envelope-letter"></i><span class="badge badge-pill badge-info">
          <?php
            echo count($Received_messages_new);
          ?>
          </span>
        </a>

<?php if (count($Received_messages_new) == 0) {
  ?>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">

      <a href="<?php echo base_url(); ?>Inbox" class="dropdown-item">
        <div class="message">
          <div>
            <small class="text-muted">No Message</small>
          </div>
          <div class="text-truncate font-weight-bold"></div>
        </div>
      </a>

  </div>


  <?php
} ?>

        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
          <?php
          foreach ($Received_messages_new as $messages_new) {
            ?>
            <a href="<?php echo base_url(); ?>Inbox" class="dropdown-item">
              <div class="message">
                <div>
                  <small class="text-muted"><?php echo $messages_new['sender']; ?></small>
                  <small class="text-muted float-right mt-1">Just now</small>
                </div>
                <div class="text-truncate font-weight-bold"> <?php

                echo substr($messages_new['body'], 0, 10)."..";


                 ?></div>
              </div>
            </a>


            <?php
          }


           ?>


        </div>
      </li>
      <!-- <li class="nav-item dropdown profile-girl">
        <a class="nav-link nav-pill avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
          <span class="badge badge-pill badge-danger">9</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-dark">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
          <div class="divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
          <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li> -->
     <!--  <button class="navbar-toggler aside-menu-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button> -->

    </ul>





   <!--  <i class="icon-bell"></i>
    <span class="badge badge-pill badge-danger">5</span> -->




















      <!-- <li class="nav-item dropdown d-md-down-none">







        <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">







          <i class="icon-envelope-letter"></i><span class="badge badge-pill badge-info">7</span>







        </a>







       </li> -->







      <li class="nav-item dropdown ">







        <a class="nav-link nav-pill avatar avatar-img-margin" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">







          <img src="<?php echo base_url(); ?>img/avatars/<?php echo $data_user[0]['profile_image'];?>" class="img-avatar" alt="">







          <!-- <span class="badge badge-pill badge-danger">9</span> -->







          <span class="profile-name"><strong><?php echo $data_user[0]['user_name'];?></strong></span>







        </a>















        <div class="dropdown-menu dropdown-menu-right">







          <div class="dropdown-header text-center">







            <strong>Account</strong>







          </div>















          <a class="dropdown-item" href="<?php echo base_url(); ?>My_Profile"><i class="fa fa-user"></i> My Profile</a>



     <!--  <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
      <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>




          <a class="dropdown-item" href="<?php echo base_url(); ?>Messages"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success"><?php echo $Received_messages_new; ?></span></a>


         <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-dark">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>



          <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a> -->


          <a class="dropdown-item" href="<?php echo base_url(); ?>Login/logout"><i class="fa fa-lock"></i> Logout</a>







        </div>







      </li>







      <li class="profile-name"> </li>







      <!-- <button class="navbar-toggler aside-menu-toggler" type="button">







        <span class="navbar-toggler-icon"></span>







      </button> -->















    </ul>







  </header>







  <div id="toast-container" class="toast-top-right">







</div>







    <div class="app-body">







    <div class="sidebar">







      <nav class="sidebar-nav">







        <ul class="nav">







          <li class="nav-title text-center">







            <span>Dashboard</span>







          </li>







          <li class="nav-item">







            <a class="nav-link" href="<?php echo base_url();?>Dashboard"><i class="icon-speedometer"></i> Dashboard </a>







          </li>







          </li>



       <li class="nav-item">


          <!-- <li class="nav-title text-center">







            <span>UI Elements</span>







          </li> -->




            <a class="nav-link" href="<?php echo base_url(); ?>Contacts"><i class="icon-people"></i> Contacts</a>







          </li>





          <li class="nav-item nav-dropdown">







            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-envelope"></i> Message</a>







            <ul class="nav-dropdown-items">

              <li class="nav-item">

                <a class="nav-link" href="<?php echo base_url(); ?>Single_Message"><i class="icon-envelope-open"></i> Single Message</a>

              </li>



                 <li class="nav-item">

                <a class="nav-link" href="<?php echo base_url(); ?>Bulk_Message"><i class="icon-envelope-letter"></i> Bulk Message</a>

              </li>



              <li class="nav-item">

                <a class="nav-link" href="<?php echo base_url(); ?>Inbox"><i class="icon-envelope-open"></i> Inbox</a>

              </li>

              <li class="nav-item">

                <a class="nav-link" href="<?php echo base_url(); ?>Sent_Messages"><i class="icon-paper-plane"></i> Sent Messages</a>

              </li>

            </ul>

          </li>



 <li class="nav-item">

            <a class="nav-link" href="<?php echo base_url(); ?>Voice_Broadcast"><i class="fa fa-phone-square"></i> Voice Call</a>

          </li>





           <li class="nav-item">

            <a class="nav-link" href="<?php echo base_url(); ?>Bulk_Voice_Broadcast"><i class="icon-call-out"></i> Bulk Voice Broadcast</a>

          </li>






          <li class="nav-item">







            <a class="nav-link" href="<?php echo base_url(); ?>Groups"><i class="fa fa-group"></i> Groups</a>







          </li>







        <li class="nav-item">







            <a class="nav-link" href="<?php echo base_url(); ?>Template_Messages"><i class="fa fa-envelope"></i> Template Messages</a>







          </li>



          <li class="nav-item">







            <a class="nav-link" href="<?php echo base_url(); ?>Blacklist"><i class="fa fa-ban"></i> BlackList</a>







          </li>







            <li class="nav-item">







            <a class="nav-link" href="<?php echo base_url(); ?>Autoresponder_Keywords"><i class="fa fa-reply"></i> Autoresponder Keywords</a>







          </li>







           <li class="nav-item nav-dropdown">







            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-chart"></i> Reports</a>







            <ul class="nav-dropdown-items">



<li class="nav-item">


            <a class="nav-link" href="<?php echo base_url(); ?>Call_Logs"><i class="icon-call-out"></i> Call Logs</a>


          </li>










<li class="nav-item">

            <a class="nav-link" href="<?php echo base_url(); ?>Queued_Calls"><i class="icon-call-out"></i>Queued Calls</a>


</li>



















              <li class="nav-item">







                <a class="nav-link" href="<?php echo base_url(); ?>Failed_Messages"><i class="fa fa-exclamation-triangle fa-lg"></i> Failed Messages</a>







              </li>







              <li class="nav-item">







                <a class="nav-link" href="<?php echo base_url(); ?>Pending_Messages"><i class="icon-clock"></i> Pending Messages</a>







              </li>

              <!-- <li class="nav-item">







              <a class="nav-link" href="<?php echo base_url(); ?>Queued"><i class="icon-clock"></i> Queued Messages</a>







              </li>          -->







            </ul>







          </li>




<?php if ($_SESSION['type']=='super admin') {
  ?>






           <!-- <li class="nav-title text-center"><span>Settings</span></li> -->


           <li class="nav-item nav-dropdown">







            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-settings"></i> Settings</a>







            <ul class="nav-dropdown-items">







               <li class="nav-item">




                  <a class="nav-link" href="<?php echo base_url(); ?>My_Profile"><i class="fa fa-user"></i> My Profile</a>


                  <a class="nav-link" href="<?php echo base_url(); ?>Add_Account"><i class="fa fa-key" aria-hidden="true"></i>
Auth Key</a>







                </li>







                  <li class="nav-item">







                  <!-- <a class="nav-link" href="<?php echo base_url(); ?>Add_Number"><i class="icon-call-end"></i> Add  Number</a> -->

                  <!-- <a class="nav-link" href="<?php echo base_url(); ?>Forward"><i class="icon-call-end"></i>Forward</a> -->









                </li>









            </ul>







          </li>


<?php } ?>












       </ul>







      </nav>







      <button class="sidebar-minimizer brand-minimizer" type="button"></button>







    </div>
