<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['role'] == 'user')
        {

            $name = $_POST['name'];
            $age = $_POST['age'];
            $weight = $_POST['weight'];
            $blood_group = $_POST['blood_group'];
            $slot_date = $_POST['date'];
            $email = $_POST['email'];
            $phone_no = $_POST['phone_no'];
            $city = $_POST['city'];
            $state = $_POST['state'];

            $con = mysqli_connect("localhost","root","","blood_bank_management_system");

            if(!$con)
            {
                die("Failed To Make Connection With DB" . mysqli_connect_error());
            } 

            $sql1 = "SELECT hAddress FROM hospital WHERE hCity = '$city' AND hState = '$state'";
            $result = mysqli_query($con,$sql1);
            $row = mysqli_fetch_assoc($result);
            $hadd = $row['hAddress'];
            $sql = "INSERT INTO slot_book_data (name,age,weight,blood_group,slot_date,email,mobile_no,city,state) VALUES (?,?,?,?,?,?,?,?,?);";

            $stmt = mysqli_prepare($con,$sql);
            if (!$stmt) {
                die("Error in preparing statement: " . mysqli_error($conn));
            }
            mysqli_stmt_bind_param($stmt,'sidssssss',$name,$age,$weight,$blood_group,$slot_date,$email,$phone_no,$city,$state);

            if(mysqli_stmt_execute($stmt))
            {
                //mail
                $check = mail($email,"You have Successfuly Book The Slot","Person Name : $name\nPerson Age : $age \nPerson Weight : $weight \nBlood Group : $blood_group \nDonation Date : $slot_date \nHospital Address : $hadd \n\n\n\n\nFurther Detail You can Visit Out Website : mangogroup.com and ckpcet.ac.in","From:diyorakashyap2004@gmail.com");
                
                if($check)
                {
                    header("Location:http://localhost/blood_bank_management_system/src/");
                }
                else
                {
                    echo "<script>alert('Mail Sending Error Please try after some time')</script>";
                }
            }
            else
            {
                echo "Error in inserting record: " . mysqli_stmt_error($stmt);
            }
            mysqli_stmt_close($stmt);
            mysqli_close($con);
        }
        else
        {
            echo "<script>alert('You Do not have Access, First Do SignUp or LoginIn')</script>";
        }
    }
    else
    {
        echo "<script>alert('No Getting any Request')</script>";
    }
?>