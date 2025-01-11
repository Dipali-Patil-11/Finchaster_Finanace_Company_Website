<?php include 'header.php'; ?>

<?php
include('process\connection.php');


 $id=$_GET['id'];
 
 $querry="select * from product_info where id='$id'";

 $result=mysqli_query($conn,$querry) or die('QUerry Failed..');
 $row=mysqli_fetch_assoc($result);
 // echo "<pre>";
 // print_r($row); 
 // die();
 
 $id=$row['id'];
  
?>


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Information</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" action="process/edit_prod.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Product Name</label>
                  <input type="text" name="product_name" class="form-control" id="inputNanme4" placeholder="Enter Product Name" value="<?php echo $row['product_name']; ?>">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Company name</label>
                  <input type="text" name="company_name" class="form-control" id="inputEmail4" placeholder="Enter Company Name" value="<?php echo $row['company_name']; ?>">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Product Price</label>
                  <input type="number"  name="product_price" class="form-control" id="inputPassword4" placeholder="Enter Product Price" value="<?php echo $row['product_price']; ?>">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Product Image</label>
                  <input type="file" name="new_product_img" class="form-control" id="inputAddress" ><br>

                  <img src="./assets/product/<?php echo $row['product_img']; ?>" height="150px">

                <input type="hidden" name="old-image" value="<?php echo $row['product_img']; ?>">
                </div>
                <div class="text-center">
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

         

        </div>
      </div>
    </section>

  </main><!-- End #main -->


<?php include 'footer.php'; ?>