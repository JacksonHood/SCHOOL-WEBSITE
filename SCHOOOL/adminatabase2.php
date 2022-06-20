<?php



//get form values
$fname = $_POST['First name:'];
$mname = $_POST['Last name:'];
$sname = $_POST['Email Adress* :'];
$yoenrollment = $_POST['YEAR OF ENROLLMENT:'];
$yograduation = $_POST['YEAR OF GRADUATION:'];
$hmatoe = $_POST['HEADMASTER AT THE TIMES OF ENROLLMENT:'];
$hmatog = $_POST['HEADMASTER AT THE TIMES OF GRADUATION:'];
$coccupation = $_POST['CURRENT OCCUPATION:'];
$pword = $_POST['Password:'];
$repassword = $_POST['Re-type Password:'];
$email = $_POST['Email:'];
$pnumber = $_POST['Phone number:']



$conn =new mysqli ('local host', 'root','' ,'alumnidatabase');
if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare ("insert into alumni_form(First name:, Last name: , Email Adress:*, YEAR OF ENROLLMENT:,
	YEAR OF GRADUATION: HEADMASTER AT THE TIMES OF ENROLLMENT:, HEADMASTER AT THE TIMES OF GRADUATION:, 
	CURRENT OCCUPATION:, Password:, Re-type Psssword:, Email:, Phone number:)values (?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param ("ssssssssssi", $fname, $mname, $sname, $yoenrollment, $yograduation, $hmatoe, $hmatog,
	$coccupation, $pword, $repassowrd, $email, $pnumber);
	$stmt->execute();
	echo "Registration Successfully...";
	$stmt->close();
	$conn->close();
}
?>




 






