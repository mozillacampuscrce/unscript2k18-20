<?php session_start();?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
<HEAD>

  <a class="navbar-brand" href="Dashboard.php">Event Management</a>


  <a class="navbar-brand" href="Dashboard.php">Event Management</a>

  <span style="color:white"><?php echo "HI, " . $_SESSION['username'] . " ";?></span>

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="Dashboard.php">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUserComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-user-o"></i>
          <span class="nav-link-text">Users</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseUserComponents">
            <?php if($_SESSION['role'] == 'admin'){ ?>
          <li>
            <a href="AddUser.php">Add User</a>
          </li>
          <li>
            <a href="Searchuser.php">Search Users</a>
          </li>
          <li>
            <a href="deleteuser.php">Delete User</a>
          </li>
          <li>
           <a href="changepassword.php">Change Password</a>
          </li>

</HEAD>

    <?php }
      if($_SESSION['role'] == 'council'){ ?>
          <li>
          <a href="AddEvent.php">Add Event</a>
         </li>
         <li>
          <a href="deletependingevent.php">Delete Pending Event</a>
         </li>
         <li>
           <a href="changepassword.php">Change Password</a>
         </li>
   <?php }
            ?>
          <li>
            <a href="changepassword.php">Change Password</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProductComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-dropbox"></i>
          <span class="nav-link-text">Events</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseProductComponents">
          <li>
            <a href="cards.html">View Events</a>
          </li>
          <li>
            <a href="searchproduct.php">Search Events</a>
          </li>
        </ul>
      </li>
    </ul>

    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>

    <!-- Circulars are here -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" id="messagesDropdown" href="#">
          <i class="fa fa-fw fa-envelope"></i>
          <!-- <span class="d-lg-none">Messages</span> -->
<!--           <span class="indicator text-primary d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
          </span>
 -->
        </a>
        <!-- <div class="dropdown-menu" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">New Messages:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>David Miller</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>Jane Smith</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
          </a>
          <div class="dropdown-divider"></div>hemes/AdminLTE/index.html
          <a class="dropdown-item" href="#">
            <strong>John Doe</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">View all messages</a>
        </div> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" id="alertsDropdown" href="Notification.php">
          <i class="fa fa-fw fa-bell"></i>
          <!-- <span class="d-lg-none">Alerts
            <span class="badge badge-pill badge-warning">6 New</span>
          </span>
          <span class="indicator text-warning d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
          </span> -->
        </a>
      </li>
        <!-- <div class="dropdown-menu" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">New Alerts:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-success">
              <strong>
                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>hemes/AdminLTE/index.html
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-danger">
              <strong>
                <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <span class="text-success">
              <strong>
                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
            </span>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">View all alerts</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
