<?php
$conn = mysqli_connect('localhost','root','','database');

	$id=$_GET['id'];


	$querry="DELETE FROM services WHERE id='$id'";
	$result=mysqli_query($conn,$querry);

header("Location: ./view_customer.php");
?>