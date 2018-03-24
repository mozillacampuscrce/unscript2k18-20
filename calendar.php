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

    <div class="modal-body row">
      <div class="col-sm-8">
        <div id='calendar'></div>
      <!-- Your first column here -->
      </div>
    </div>
  </body>
</html>