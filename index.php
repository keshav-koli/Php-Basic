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