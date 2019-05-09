<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   
   
   if(!isset($_SESSION['login_user'])){
      header("location:http://ec2-18-188-71-150.us-east-2.compute.amazonaws.com/login.php");
      die();
   }
   
?>