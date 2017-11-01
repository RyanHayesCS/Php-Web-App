<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php require_once('databaseConnect.php')?>
<?php require_once('session.php')?>

<?php
  if(!isset($_SESSION['login_user'])){
    //redirect to login page
      header("location:login.php");
      exit();
  }
?>
</head>

<body style='background-color:#f1e3e0'>
  <div class="container">
      <?php require_once('header.php')?>
      <?php require_once('constructTable.php')?>
    <div class="row">
      <?php require_once('inputForm.php')?>
      <?php require_once('retrieveForm.php')?>
    </div>
  </div>
</body>
</html>
