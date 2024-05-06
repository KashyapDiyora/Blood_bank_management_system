<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['role'] == 'hospital')
    {
        include '../src/set_blood_info.php';
    }
    else
    {
        echo "<script>alert('You are unknown user first do a login')</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/index.php' }, 500);</script>";
    }
?>