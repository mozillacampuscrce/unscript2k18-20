<!DOCTYPE html>
<html lang="en">

<?php require 'include/headerandfooter/header.php'; ?>
<?php require 'Dashboard.php';?>
<?php
  if($_SESSION['role'] == 'council'){ ?>

  <div class="card mb-3">
   <div class="card-header">
      <i class="fa fa-area-chart"></i> Change Password</div>
   <div class="card-body">
      <form action="function/changepassword-func.php" method="post">
        <div class="form-group">
          <label for="EventDetails">Event Name</label>
          <input class="form-control" name="EventName" rows = "5"  value="" required/>
        </div>
        <div class="form-group">
          <label for="EventDetails">Event details</label>
          <input class="form-control" type="text" name="EventDetails" value="" required/>
        </div>
        <div class="form-group">
          <label for="EventDate">Event Date</label>
          <!-- <input class="form-control" type="date" name="EventDate"> -->
          <input type="text" class="form-control" id="#sandbox-container input">
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
