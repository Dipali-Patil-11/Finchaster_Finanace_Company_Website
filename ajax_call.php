<?php 
session_start();
 
if(!isset($_SESSION['login_id']))
{
      header("Location: ../login.php");

}

include("process\connection.php");
	//Fetch Infomartion 

	if(isset($_POST['p_name']) && isset($_POST['p_name'])!=""  ) 
	{
		$c_name= $_POST['c_name'];
		$p_name= $_POST['p_name'];

		$query = "SELECT * FROM `product_info` WHERE product_name='$p_name' AND company_name='$c_name'";
		
		if(!$result = mysqli_query($conn,$query)){
			exit(mysqli_error());

		}
		

		$response = array();
		if(mysqli_num_rows($result) > 0)
		{
			while ($row = mysqli_fetch_array($result))
			{
				$response =$row;
			}
		}
		else{
			$response['status']=200;
			$response['message']="Data not found";
		}


		echo json_encode($response);
	}
	else{
		$response['status']=200;
		$response['message']="Invalid Request";
	}


	if(isset($_POST['order_status']) && isset($_POST['order_status'])!=""  ) 
	{
		$order_status= $_POST['order_status'];
		$reason= $_POST['reason'];
		$cid= $_POST['cid'];

		$query = "UPDATE order_info SET order_status='$order_status',reason= '$reason' where id='$cid'";
		
		if(!$result = mysqli_query($conn,$query)){
			exit(mysqli_error());

		}
		


		echo json_encode($result);
	}
	else{
		$response['status']=200;
		$response['message']="Invalid Request";
	}




 ?>