<?php
    session_start();
    $id = $_POST['id'];
    $pass = $_POST['password'];

    if($id == "admin" && $pass == "123456"){
        $_SESSION['auth'] = true;
        $_SESSION['id'] = "Admin";
    }
    header("location:logindex.php");
?>