<!DOCTYPE html>
<html lang="en">
<script src="js/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#expand").click(function(){
        $("#detail").toggle(100, function(){});
    });
});
</script>
<?php require 'include/headerandfooter/header.php';
require './include/dbh.php';
?>
<title>Event Management</title>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php require 'include/sidenav.php'; ?>
<?php
if($_SESSION['role'] == 'student'){ ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

      <ol class="breadcrumb" id="expand">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" >My Dashboard</li>
        <div id ="detail">
             <?php
                        $username = $_SESSION['username'];
                        $query = "SELECT * FROM `student` WHERE Username='$username'";
                        $result= mysqli_query($con, $query);
                        $row = mysqli_fetch_array($result);
                              Echo '<b><br><br>';
                              Echo 'Roll no '.$row['Roll_No'].'<br>';
                              Echo 'Name '.$row['Name'].'<br>';
                              Echo 'Email_id '.$row['Email_id'].'<br>';
                              Echo 'Gender '.$row['Gender'].'<br>';
                              Echo 'DOB '.$row['DOB'].'<br><b>';

}
else {?>
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->

          <ol class="breadcrumb" id="expand">
            <li class="breadcrumb-item">
             <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" >My Dashboard</li>
            
<?php }
?>

      </ol>
      <?php
      if($_SESSION['role'] == 'student'){ ?>
	<h2>	Registered Events</h2>	<h3>	<br><br>
	 <?php
			$username = $_SESSION['username'];
			$query = "SELECT Roll_No FROM `student` WHERE Username='$username'";
			$result = mysqli_query($con, $query);
			$row = mysqli_fetch_array($result);
			$rno=$row['Roll_No'];
			$query1="SELECT Event_id FROM `event_registered` WHERE Roll_No='$rno'";
			$result1= mysqli_query($con, $query1);
			$row = mysqli_fetch_array($result1);
			$query2="SELECT * FROM `event_details` WHERE Event_id='".$row['Event_id']."'";
			$result3= mysqli_query($con, $query2);
			while($row = mysqli_fetch_array($result3))
			{
				Echo 'Event Name '.$row['Event_Name'].'<br>';
                        Echo 'Event Date '.$row['Event_date'].'<br>';
			}
	 }
       else if ($_SESSION['role'] == 'admin'){				Echo 'Pending Events';
} ?>

</div>




  <?php require 'include/headerandfooter/footer.php'; ?>
