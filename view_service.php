<?php include('header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Products</h1>
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
              <h5 class="card-title">View Products</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sr.no</th>
                    <th scope="col">service title</th>
                    <th scope="col">service description</th>
                    <th scope="col">service image</th>
                    <th scope="col">Facility 1</th>
                    <th scope="col">Facility 2</th>
                    <th scope="col">Facility 3</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
				  $conn = mysqli_connect('localhost','root','','database');
                    $count=1;
                    $querry="SELECT * FROM services";

                    $result=mysqli_query($conn,$querry);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    $id=$row['id'];
                  ?>
    
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><img src="image/services/<?php echo $row['image_url']; ?>" height="70" width="70"></td>

					<td><?php echo $row['facility_1'] ?></td>
					<td><?php echo $row['facility_2'] ?></td>
					<td><?php echo $row['facility_3'] ?></td>
                   

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