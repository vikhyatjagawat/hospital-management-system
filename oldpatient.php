<?php session_start();
require_once('dbconnection.php');


if(isset($_POST['signup']))
{
    $hid=$_POST['hid'];
	$hospitalname=$_POST['hospitalname'];
	$doctorsname=$_POST['doctorsname'];
	$problems=$_POST['problems'];
    $disease=$_POST['disease'];
	$medication=$_POST['medication'];
	$dateid=$_POST['dateid'];
    $msg=mysqli_query($con,"insert into oldpatient(hid,hospitalname,doctorsname,problems,disease,medication,dateid) values('$hid','$hospitalname','$doctorsname','$problems','$disease','$medication','$dateid')");
if($msg)
{
	echo "<script>alert('Update successfully');</script>";
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
	<h1>Update Medical Record</h1>
	<div class="demo">
		<hr>
		<h2>Update</h2>
		<hr>
		<div class="register">
			<form name="registration" method="post" action="" enctype="multipart/form-data">
				<p>H-ID </p>
				<input type="text" class="text" value=""  name="hid" required >
				<p>Hospital Name </p>
				<input type="text" class="text" value="" name="hospitalname"  required >
				<p>Doctor Name </p>
				<input type="text" class="text" value="" name="doctorsname"  required>
				<p>Problems</p>
				<input type="text" class="text" value="" name="problems" required>
				<p>Disease</p>
				<input type="text" class="text" value="" name="disease"  required>
                <p>Medication</p>
				<input type="text" class="text" value="" name="medication"  required>
				<p>Date</p>
				<input type="text" class="text" value="" name="dateid" required>
				<div class="sign-up">
				    <input type="submit" name="signup"  value="Update" >
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