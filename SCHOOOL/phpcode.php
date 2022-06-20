<?php

include("connect.php");

//get form values
$fname = $_POST['First name:'];
$mname = $_POST['Middle name:'];
$sname = $_POST['Surname:'];
$username = $_POST['Username'];

$birthday = $_POST['Enter your birthday:'];
$password = $_POST['Password:'];
$retypePassword = $_POST['Re-type password:'];
$email = $_POST['E-mail:'];
$pnumber = $_POST['Phone number:'];
$fbname = $_POST['Facebook:'];
$tname = $_POST['Twitter:'];
$igname = $_POST['Instagram:'];



//inserting values to table
$sqlquery = "INSERT INTO joining_form(First name:,Middle name:,Surname:,username:, Enter your birthday:, Password:, 
Re-type your password:, E-mail:, Phone number:, Facebook:, Twitter:, Instagram:,)
VALUES ('$fname','$mname','$sname','$username', '$birthday' , '$password', '$retypePassword', '$email' ,
'$pnumber', '$fbname', '$tname' , ''$igname )";
if (mysqli_query($conn,$sqlquery)) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}





