<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
    $hid=$_POST['hid'];
	$pname=$_POST['pname'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$city=$_POST['city'];
    $contact=$_POST['contact'];
    $msg=mysqli_query($con,"insert into newpatient(hid,pname,gender,age,city,contact) values('$hid','$pname','$gender','$age','$city','$contact')");
if($msg)
{
	echo "<script>alert('Registration successfully');</script>";
}
else
{
    echo "<script>alert('Enter Details Properly');</script>";
}
}

?>


<html>

<head>
	<title>New Patient</title>
	<link rel='stylesheet' href="stylepage.css" type='text/css' />
	<link rel="stylesheet" href="newstyle.css">
</head>

<body>

<div class="main">
	<h1>Registration of New Patient</h1>
	<div class="demo">
		<hr>
		<h2>Register</h2>
		<hr>
		<div class="register">
			<form name="registration" method="post" action="" enctype="multipart/form-data">
				<p>HID </p>
				<input type="text" class="text" value=""  name="hid" required >
				<p>Patient Name </p>
				<input type="text" class="text" value="" name="pname"  required >
				<p>Gender </p>
				<input type="text" class="text" value=""  name="gender" required >
				<p>Age </p>
				<input type="text" class="text" value="" name="age"  required>
				<p>City</p>
				<input type="text" class="text" value="" name="city" required>
				<p>Contact No. </p>
				<input type="text" class="text" value="" name="contact"  required>
				<div class="sign-up">
					<input type="reset" value="Reset">
				    <input type="submit" name="signup"  value="Register" >
				</div>
			</form>
		</div>
	</div>
</div>
<footer>
	<button><a href="index.php">Home</a></button>
</footer>
</body>
</html>