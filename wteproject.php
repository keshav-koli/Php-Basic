<!DOCTYPE html>  
<html>  
<head>
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>
<?php 
$server ="localhost";
$user ="root";
$password ="";
$db ="patientregis";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>  
         <script>
            alert("Connection successful")
         </script>
         <?php
}else{
    ?>  
         <script>
            alert(" No Connection")
         </script>
         <?php
}

if(isset($_POST['submit'])){
    $firstname = mysqli_real_escape_string( $con, $_POST['firstname']);
    $middlename = mysqli_real_escape_string( $con, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $DOB = mysqli_real_escape_string($con, $_POST['DOB']);
    $Sex = mysqli_real_escape_string($con, $_POST['Sex']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $height = mysqli_real_escape_string($con, $_POST['height']);
    $weight = mysqli_real_escape_string($con, $_POST['weight']);
    $contact = mysqli_real_escape_string($con, $_POST['Contact number']);
    $econtact = mysqli_real_escape_string($con, $_POST['EMContact number']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $emailquery = "select * from registration where email ='$email'";
    $query = mysqli_query($con,$emailquery);
    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        echo "email already exists";
    }else{
        $insertquery ="insert into registration (Firstname,Middlename,Lastname,DOB,
            Sex,Age,height,weight,contact number,emcontact number,Address,Email) VALUES ($firstname,$Middlename,$Lastname,$DOB,
            $Sex,$age,$height,$weight,$contact,$econtact,$address,$email)";
        $iquery = mysqli_query($con,$insertquery);

        if($iquery){
                    ?>  
                <script>
                    alert("Inserted successful")
                </script>
                <?php
        }else{
            ?>  
                <script>
                    alert(" No data inserted")
                </script>
                <?php

        }

    }
}
?>
<form action="" method="POST">  
  <div class="container">  
  <center>  <h1> Patient Registeration Form</h1> </center>  
  <hr>  
  <label> Firstname </label>   
<input type="text" name="firstname" placeholder= "Firstname" size="15" required />   
<label> Middlename: </label>   
<input type="text" name="middlename" placeholder="Middlename" size="15" required />   
<label> Lastname: </label>    
<input type="text" name="lastname" placeholder="Lastname" size="15" required /> 
<label for="DOB">DOB:</label>
<input type="date" id="DOB" name="DOB" placeholder="mm/dd/yyyy" size="10" required />   
<div>  
<label>   
Sex :  
</label><br>  
<input type="radio" value="Male" name="Sex" checked > Male   
<input type="radio" value="Female" name="Sex"> Female   
<input type="radio" value="Other" name="Sex"> Other 
<br> 
<label for="age">Age:</label>
<input type="number" id="age" name="age" min="1" max="100" /> 
</div>
<br>
<br>
<label for="height">height (in cm):</label>
<input type="number" id="height" name="height" required />
<br>
<label for="weight">Weight (in kg):</label>
<input type="number" id="weight" name="weight" required /> 
<br>
<br> 
<label>   
Contact number :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="Contact number" placeholder="contact no." size="10"/ required>
<br>
<label>   
Emergency Contact no :  
</label>
<input type="text" name="EMContact number" placeholder="contact no." size="10"/ required>   
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" value="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>    
    <button type="submit" name="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html>  