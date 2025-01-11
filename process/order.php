<?php 
session_start();
require dirname(__DIR__)."\process\connection.php";

if(isset($_POST['submit']))
	{
		$product_name=$_POST['product_name'];
		$company_name=$_POST['company_name'];
		$product_price=$_POST['product_price'];
		$cust_name=$_POST['cust_name'];
		$cust_mobile=$_POST['cust_mobile'];
		$cust_address=$_POST['cust_address'];
		$order_by = $_SESSION["login_id"];
		
	
	 	$querry ="INSERT INTO order_info (`product_name`, `company_name`, `product_price`, `cust_name`, `cust_mobile`, `cust_address`, `order_by`)values('{$product_name}','{$company_name}','{$product_price}','{$cust_name}','{$cust_mobile}','{$cust_address}','{$order_by}')";

	$result=mysqli_query($conn,$querry);
	// print_r($querry);exit();

	mysqli_close($conn);
	}

	header("Location: ../view_orders.php");


 ?>