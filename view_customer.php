<?php include('header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">service</li>
          <li class="breadcrumb-item active">Customer</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View customer</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">image</th>
                    <th scope="col">profession</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">feedback</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("process/connection.php");
                    $count=1;
                    $querry="Select * from product_info";

                    $result=mysqli_query($conn,$querry);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    $id=$row['id'];
                  ?>
    
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row['customer_image']; ?></td>
                    <td><?php echo $row['customer_name']; ?></td>
                    <td><?php echo $row['customer_proffesion']; ?></td>
                    <td><img src="./assets/product/<?php echo $row['product_img']; ?>" height="70" width="70"></td>

                    <td>
                      <a href="edit_service.php?id=<?php echo $row['id'];?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="delete_service.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure you want to delete this Product?')"><i class="bi bi-trash"></i></a>

                    </td>

                   

                  </tr>

                  <?php $count++; } ?>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <?php mysqli_close($conn); ?>

  </main><!-- End #main -->

 <?php include('footer.php'); ?>