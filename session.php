<?php
   include('setup.php');
   session_start();
     
   if(isset($_SESSION['login_staff'])) {
      $staff_check = $_SESSION['login_staff'];
      $ses_sql = mysqli_query($conn, "SELECT * FROM staff WHERE staff_loginid = '$staff_check' ");
      $user = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
      $login_session = $user['staff_loginid'];
   } else if (isset($_SESSION['login_patient'])) {
      $patient_check = $_SESSION['login_patient'];
      $ses_sql = mysqli_query($conn, "SELECT * FROM patient WHERE patient_loginid = '$patient_check' ");
      $user = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
      $login_session = $user['patient_loginid'];
   } else {
      header("location:login_page.php");
      die();
   }
?>