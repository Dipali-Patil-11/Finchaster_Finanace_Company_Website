<?php 
session_start();
error_reporting(0);
require dirname(__DIR__)."\process\connection.php";

if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$role_id=1;
	
	 $querry ="INSERT INTO users (name,email,username,password,role_id)values('{$name}','{$email}','{$username}','{$password}','{$role_id}')";

	$result=mysqli_query($conn,$querry);

	// if($result==true)
	// {
	// 	echo "<script>alert('Register Successfully...');</script>";

		
	// }
	// else{
	// 	echo "<script>alert('Something went wrong...');</script>";
	// }

	header("location: ../login.php");
	mysqli_close($conn);
	}


	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql = "SELECT * from `users` WHERE username = '$username' AND password = '$password'";

		$sqlid = "SELECT id from `users` WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($conn, $sql);
		$id = mysqli_query($conn , $sqlid);


		$userid = "";

		if(mysqli_num_rows($result) == 1){
			
			$user = mysqli_fetch_array($id);
			$user_data = mysqli_fetch_array($result);

			$userid = ($user['id']);
			$role_id = ($user_data['role_id']);

			$_SESSION["login_id"] = $userid ;
			$_SESSION["role_id"] = $role_id;
			
			header("Location: ..//dashboard.php");
		}

		else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Invalid Username or Password')
		    window.location.href='javascript:history.go(-1)';
		    </SCRIPT>");
		}

	}





 ?>