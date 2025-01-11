<?php
$conn = mysqli_connect('localhost', 'root', '', 'database');
error_reporting(0);
if (isset($_FILES['carousel_image'])) {
    $errors = array();

    $file_name = $_FILES['carousel_image']['name'];
    $file_type = $_FILES['carousel_image']['type'];
    $file_size = $_FILES['carousel_image']['size'] / 1024;
    $file_tmp = $_FILES['carousel_image']['tmp_name'];

    $file_ext = end(explode('.', $file_name));

    $extension = array("jpeg", "jpg", "png", "JPG");

    if (in_array($file_ext, $extension) == false) {
        $errors[] = "this file extension not allow....";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images/clients/". $file_name);
    } else {
        print_r($errors);
        die();
    }
}

if (isset($_POST['submit'])) {
    $product_title = $_POST['carousel_title'];
    $product_img = $file_name;

    $querry = "INSERT INTO clients VALUES ('{$product_img}','{$product_title}','','')";
    $result = mysqli_query($conn, $querry);

    mysqli_close($conn);
}

// header("Location: /finchaster/index.php");

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <form action="/web/finchaster/abc.php" method="post" enctype="multipart/form-data">
        <input type="file" accept=".jpg, .png, .jpeg, .JPG" name="carousel_image">
        <input type="text" placeholder="carousel title" name="carousel_title">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>