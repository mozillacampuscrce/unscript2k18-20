<!DOCTYPE html>
<html lang="en">
<head>  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Users</a>
      </li>
      <li class="breadcrumb-item active">Add Event</li>
    </ol>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-area-chart"></i> Add Event</div>
      <div class="card-body">
<?php require 'include/headerandfooter/header.php'; ?>
<?php
    require './include/dbh.php';
    require './include/sidenav.php';
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $EventName=$_POST['EventName'];
      $Event_date=$_POST['date'];
      $username = $_SESSION['username'];
      $type=$_POST['type'];
      $query = "INSERT INTO `Pending_Event`(`Event_Name`, `Event_date`, `Event_type`, `Requested_by`) VALUES ('$EventName','$Event_date','$type','$username')";
      $result = mysqli_query($con,$query);
}
?>
<?php
  if($_SESSION['role'] == 'council'){ ?>

      <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <label for="Event Name">Event Name</label>

          <input class="form-control" name="EventName" rows = "5"  value="" required/>
        </div>
        <div class="form-group">
          <label for="Event Details">Event details</label>
          <input class="form-control" type="text" name="EventDetails" value="" required/>
        </div>
        <div class="form-group">
          <label for="Event Date">Event Date</label>
          <!-- <input class="form-control" type="date" name="EventDate"> -->
          <input type="date" name="date" class="form-control" required min="<?php echo date("Y-m-d"); ?>">
        </div>
        <div class="form-group">
          <label for="Event Type">Event Type:</label>
          <input type=radio name="type" class="with-gap" value="Paid" required> Paid
          <input type=radio name="type" class="with-gap" value="Free" required> Free
        </div>
          <input type="submit" class="btn btn-primary btn-block" name="submit" class="btn-login">
        <!-- <a class="btn btn-primary btn-block" href="#">Login</a> -->
        <div id="add_err"></div>
        </form>
      <!-- <canvas id="myAreaChart" width="100%" height="30"></canvas> -->
   </div>
   <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
 </div>
<?php } require 'include/headerandfooter/footer.php';?>
<script type="text/javascript">
$('#sandbox-container input').datepicker({
format: "dd/mm/yy"
});
</script>
