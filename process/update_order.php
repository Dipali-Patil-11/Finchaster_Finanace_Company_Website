<?php
session_start();
require dirname(__DIR__)."\process\connection.php";
 $id=$_GET['id'];

if(isset($_POST['update']))
{
	$product_name=$_POST['product_name'];
	$company_name=$_POST['company_name'];
	$product_price=$_POST['product_price'];
	$cust_name=$_POST['cust_name'];
	$cust_mobile=$_POST['cust_mobile'];
	$cust_address=$_POST['cust_address'];
	$order_by = $_SESSION["login_id"];

	$querry="UPDATE order_info SET product_name='$product_name',company_name= '$company_name',product_price= '$product_price',cust_name= '$cust_name' ,cust_address= '$cust_address' ,cust_address= '$cust_address',order_by= '$order_by' where id='$id'";

		$result=mysqli_query($conn,$querry);
	

	 	mysqli_close($conn);
	 	
	 	header("Location: ../view_orders.php");
	 
 }

?>