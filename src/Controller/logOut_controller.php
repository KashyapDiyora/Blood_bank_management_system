<?php
    session_start();
    // session_unset();
    $_SESSION = array();
    session_destroy();
    header("Location:http://localhost/blood_bank_management_system/src/index.php");
?>