<?php
if(isset($_POST['submit'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){ 
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo"success connecting to the database";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['pnumber'];
        // $gender = $_POST['gender'];
        $dob = $_POST['date'];
        $password= $_POST['pswd'];
        $cpassword = $_POST['cpswd'];
        // $sql = "INSERT INTO `google`.`project` (`firstname`, `lastname`, `phonenumber`, `gender`, `date of birth`, `password`, `confirm password`) VALUES ('$firstname', '$lastname','$phonenumber' '$gender', '$dob', '$password','$cpassword',current_timestamp());";
        $sql="INSERT INTO `google`.`project` ( `firstname`, `lastname`, `phonenumber`, `dateofbirth`, `password`, `confirmpassword`, `date`) VALUES ('$firstname', '$lastname', '$phonenumber', '$dob', '$password', '$cpassword', current_timestamp());";
        echo $sql;

        if($con->query($sql)==true){
            echo"successfully inserted";
        }
        else{
            echo"ERROR:$sql<br>$con->error";
        }
        $con->close();
}
        
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<style>
    /* Styling the Body element i.e. Color, Font, Alignment */
    body {
        background-color: #adefd1ff;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-align: center;
    }
    /* Styling the Form (Color, Padding, Shadow) */
    form {
        background-color: #797ef6;
        max-width: 500px;
        margin: 50px auto;
        padding: 30px 20px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }
    /* Styling form-control Class */
    .form-control {
        text-align: left;
        margin-bottom: 25px;
    }
    /* Styling form-control Label */
    .form-control label {
        display: block;
        margin-bottom: 10px;
    }
    /* Styling form-control input,
    select, textarea */
    .form-control input,
    .form-control select {
        border: 1px solid #777;
        border-radius: 2px;
        font-family: inherit;
        padding: 10px;
        display: block;
        width: 95%;
    }


    /* Styling form-control Radio
    button and Checkbox */
    .form-control input[type="radio"] {
        display: inline-block;
        width: auto;
    }
    /* Styling Button */
    button {
        background-color: #05c46b;
        border: 1px solid #777;
        border-radius: 6px;
        font-family: inherit;
        font-size: 21px;
        display: block;
        width: 100%;
        margin-top: 50px;
        margin-bottom: 20px;
    }
</style>

<body>
    <h1>Registration</h1>
    <h4>Please fill the correct details</h4>
    <form action="" method="post">
        <div class="form-control">
            <label for="fname" id="label-firstname">Firstname</label>
            <!-- Input Type Text -->
            <input type="text" id="fname" name="firstname" placeholder="Enter your firstname" required/>
        </div>

        <div class="form-control">
            <label for="lname" id="label-lastname">Lastname</label>
            <input type="text" id="lname" name="lastname" placeholder="Enter your lastname (optinal)"/>
        </div>

        <div class="form-control">
            <label for="pnumber" id="label-pnumber">phone number</label>
            <!-- Input Type Text -->
            <input type="number" id="pnumber" name="pnumber" placeholder="Enter your phone number" required/>
        </div>
        <div class="form-control">
            <label>Gender</label>
            <!-- Input Type Radio Button -->
            <label for="male">
                <input type="radio" id="recommed-1" name="gender">male</input>
            </label>
            <label for="female">
                <input type="radio" id="recommed-2" name="gender">female</input>
            </label>
            <label for="other">
                <input type="radio" id="recommed-3" name="gender">other</input>
            </label>
        </div>
        <div class="form-control">
            <label for="dob" id="label-dob">Date of birth</label>
            <!-- Input Type Text -->
            <input type="date" id="dob" name=" date"required/>
        </div>
        <div class="form-control">
            <label for="password" id="label-password">password</label>
            <!-- Input Type Text -->
            <input type="password" id="password" name="pswd" placeholder="Enter the password" required/>
        </div> 
        <div class="form-control">
            <label for="cpassword" id="label-cpassword">Confirm password</label>
            <!-- Input Type Text -->
            <input type="password" id="cpassword" name="cpswd" placeholder="Confirm the password" required/>
        </div>
        <button type="submit" value="submit">Submit</button>
</body>
</html>