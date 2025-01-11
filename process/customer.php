<?php 	
$conn = mysqli_connect('localhost','root','','database');
if(!$conn){
	echo "Connection Failed";
	exit();
}

	if(isset($_FILES['customer-image']))
	{
				$errors = array();

				$file_name= $_FILES['customer-image']['name'];
				$file_type= $_FILES['customer-image']['type'];
				$file_size= $_FILES['customer-image']['size']/1024;
				$file_tmp=  $_FILES['customer-image']['tmp_name'];

				$file_ext = pathinfo($file_name,PATHINFO_EXTENSION);

				$extension=array("jpeg","jpg","png","JPG");


				//validation to the image

				if(in_array($file_ext, $extension) == false)
				{
					$errors[] ="this file extension not allow....";
				}

				if($file_size > 2097152){
					$errors[]="file size must be 2mb or lower";
				}

				if(empty($errors)==true){
					move_uploaded_file($file_tmp, "../image/clients/".$file_name);
				}else{
					print_r($errors);
					die();
				}
	}

	if(isset($_POST['client-submit']))
	{
		$cname=$_POST['customer-name'];
		$cpro=$_POST['customer-profession'];
		$cfee=$_POST['customer-feedback'];
			$ci=$file_name;
		

		
	 	$querry ="INSERT INTO clients VALUES ('{$ci}','$cname','$cpro','$cfee')";

	$result=mysqli_query($conn,$querry);

	mysqli_close($conn);
	}

header("Location: ../view_customer.php");
?>