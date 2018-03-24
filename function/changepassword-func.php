<?php
    require '../include/dbh.php';



            $oldpass = $_POST['oldpassword'];
            $newpass = $_POST['newpassword'];
            $conpass = $_POST['conpassword'];

            if($newpass == $conpass){

                session_start();
                $user=$_SESSION['username'];
                $sql = "UPDATE `login` SET Password='$newpass' WHERE Username='$user'";
                $result = mysqli_query($con,$sql);
                $count = mysqli_affected_rows($con);
                if($count == 1){
                header("Location: ../changepassword.php?status= success");
                }

            }
            else{
                header("Location: ../changepassword.php?status= new password doesnot match");
            }
