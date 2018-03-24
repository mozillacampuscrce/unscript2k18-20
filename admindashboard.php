<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='fullcalendar-3.9.0/fullcalendar.css'>
  <script src='fullcalendar-3.9.0/lib/jquery.min.js'></script>
  <script src='fullcalendar-3.9.0/lib/moment.min.js'></script>
  <script src='fullcalendar-3.9.0/fullcalendar.js'></script>
  <script type='text/javascript' src='fullcalendar-3.9.0/gcal.js'></script>
  
  <title></title>
 </head>

 <body>

 <script>
  $(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
      
      header: {
        weekends: true,
      },
    })
});
  </script>

<nav class="navbar navbar-custom">

    <div class="navbar-header">
      <a class="navbar-brand" href="#">Event Management</a>
    </div>
  

  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" id="messagesDropdown" href="#">
          <i class="fa fa-fw fa-envelope"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>      

  </ul>
</nav>

<div class="modal-body row" style="margin: auto">
  <div class="col-md-8">
  <div id='calendar'></div>
    <!-- Your first column here -->
  </div>
</div>

 </body>
</html>