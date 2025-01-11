<?php 	
$conn = mysqli_connect('localhost','root','','database');
if(!$conn){
	echo "Connection Failed";
	exit();
}

	if(isset($_FILES['service-image']))
	{
				$errors = array();

				$file_name= $_FILES['service-image']['name'];
				$file_type= $_FILES['service-image']['type'];
				$file_size= $_FILES['service-image']['size']/1024;
				$file_tmp=  $_FILES['service-image']['tmp_name'];

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
					move_uploaded_file($file_tmp, "../image/services/".$file_name);
				}else{
					print_r($errors);
					die();
				}
	}

	if(isset($_POST['service-submit']))
	{
		$service_title=$_POST['service-title'];
		$service_description=$_POST['service-description'];
		$service_high1=$_POST['service-highlights-1'];
		$service_high2=$_POST['service-highlights-2'];
		$service_high3=$_POST['service-highlights-3'];
		$service_img=$file_name;
		

		
	 	$querry ="INSERT INTO services VALUES ('{$service_img}','$service_title','$service_description','$service_high1','$service_high2','$service_high3')";

	$result=mysqli_query($conn,$querry);

	mysqli_close($conn);
	}

header("Location: ../view_service.php");
?>