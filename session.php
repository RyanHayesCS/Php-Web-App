<?php
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($conn,"select username, userid from Users where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $session_user = $row['username'];
   $session_userid = $row['userid'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
