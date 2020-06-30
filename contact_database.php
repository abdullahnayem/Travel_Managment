<?php
	$servername ="localhost";
	$username ="root";
	$password ="";
	$databasename ="passwordholder";
	$con = new mysqli($servername, $username, $password, $databasename);

if (isset($_POST['submit']))
{
	echo "Registration complete";

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	
	$sql = mysqli_query($con, "insert into contact (firstname, lastname, email, message) values ('$firstname', '$lastname', '$email', '$msg')");
}
else
{
	echo "Registration error";	
}

?>