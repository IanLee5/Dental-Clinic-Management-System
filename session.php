<?php
   include('setup.php');
   session_start();
   
   $staff_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn, "SELECT * FROM staff WHERE staff_loginid = '$staff_check' ");
   
   $user = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
   $login_session = $user['staff_loginid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>