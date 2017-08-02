<?php
//'".md5($password)."'   pasword encrypt
session_start();
include('common/db.php');
include('common/logedin.php');


	$employeeid         = $_POST["employeeid"];
	$username 		    = $_POST["username"];
	$fathersname        = $_POST["fathersname"];
	$mothersname        = $_POST["mothersname"];
	$phone 		        = $_POST["phone"];
	$dob 	            = $_POST["dob"];
	$localaddress 	    = $_POST["localaddress"];
	$permanentaddress   = $_POST["permanentaddress"];
	$gender		        = $_POST["gender"];
	$department		    = $_POST["department"];
	$email		        = $_POST["email"];
	$password		    = $_POST["password"];
	
	
	
	$query = "INSERT INTO employee VALUES ('$employeeid ', '$username', '$fathersname', '$mothersname', '$phone', '$dob', '$localaddress', '$permanentaddress', '$gender','$department','$email','$password')";
	
	$result = mysqli_query($connect, $query);
	
	
	header("Location: addemployee.php");



// $destination ="images/".$_FILES['image']['name'];
// $filename    = $_FILES['image']['tmp_name'];

// move_uploaded_file($filename , $destination);







?>