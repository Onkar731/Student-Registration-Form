<?php

$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'student_registration';

$con = mysqli_connect($server,$user,$pwd,$db);
if($con) {
    ?>
   <script>
       alert('connection successful !');
   </script>
   <?php
}

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['DOB'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $mob = $_POST['mob'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    $query = "INSERT INTO details(fname,lname,DOB,gender,email,uname,pwds,contact_no,mob,city,pincode,_state,country) 
              VALUES ('$fname', '$lname', '$dob', '$gender', '$email', '$uname', '$pass', '$mob', '$city', '$pincode', '$state', '$country')";

    if(mysqli_query($con,$query)) {
       ?>
       <script>
           alert('record inserted !');
       </script>
       <?php
    }
}

?>