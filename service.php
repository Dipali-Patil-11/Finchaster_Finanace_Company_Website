<?php
	include("process\connection.php");

	$id=$_GET['id'];


	$querry="Delete from product_info where id='$id'";
	$result=mysqli_query($conn,$querry);

header("Location: ./view_products.php");
?>