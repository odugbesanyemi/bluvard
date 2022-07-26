<?php 
    session_start();
    // collect data and check against database records
    // if true return user to admin/index.php
    var_dump($_POST);
    // validate string inputs 
    $_SESSION['logged_in'] = true;
    header('location:../index.php');
?>