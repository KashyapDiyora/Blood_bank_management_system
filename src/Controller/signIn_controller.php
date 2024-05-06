<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbName = "blood_bank_management_system";


    $conn = mysqli_connect($servername, $username, $password, $dbName);


    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $email = $_POST['email'];
    $password = $_POST['pass']; 
    $role = $_POST['role'];

    $sqlDataCheck = "SELECT * FROM login_info WHERE username = '$email'";
    $result = mysqli_query($conn,$sqlDataCheck);
    if(mysqli_num_rows($result) >=1)
    {
        echo "<script>alert('This user Already exits')</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/index.php'; }, 1000);</script>";
        exit();
    }
    $sql = $sql = "INSERT INTO login_info (username, password, entity_type) VALUES ('$email', '$password', '$role')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['logn_in'] = true;
        $_SESSION['username'] = $email; 
        $_SESSION['password'] = $password; 
        $_SESSION['role'] = $role;
        if($role == "hospital")
        {
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/hospitalRegistrationForm.php'; }, 1000);</script>";
        }
        else
        {
            echo "<script>alert('Successfully Added New User')</script>";
            echo "<script>setTimeout(function(){ window.location.href = 'http://localhost/blood_bank_management_system/src/index.php'; }, 1000);</script>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
} else {
    echo "No data submitted";
}
?>
