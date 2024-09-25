<?php
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    if(isset($_POST['submit'])){
    $username = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    // $gender = $_POST['gender'];
    $dob = $_POST['date'];
    $phonenumber = $_POST['pnumber'];
    $password= $_POST['pswd'];
    $cpassword = $_POST['pswd2'];
    $sql = "INSERT INTO `google`.`project` (`name`, `age`, `email`, `phone`, `other`, `dt`) VALUES ('$username', '$lastname', '$dob', '$phonenumber', '$password','$cpassword');";
    
    if($con->query($sql) == true){
        echo "Successfully inserted";}
    }

