<?php session_start(); 

/*if(!isset($_SESSION['userid'])){
  header("location: login.php");
}*/
?>
<?php
require('inc/navbar.php');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="css/fontawesome.all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.js"></script>
</body>
</html>
