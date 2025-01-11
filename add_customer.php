<?php include 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add customers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Service</li>
          <li class="breadcrumb-item active">Customers</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">customer</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" action="process/customer.php" enctype="multipart/form-data" onsubmit="return validateService()">
                  <div class="col-12">
                  <label for="customer-name" class="form-label">customer name </label>
                  <input type="text" name="customer-name" class="form-control" id="customer-name" placeholder="Enter customer name">
		  <span id="customer-name-span" class="text-danger ms-2">&nbsp;</span>
                </div>
                <div class="col-12">
                  <label for="customer-profession" class="form-label">customer-profession </label>
                  <input type="text" name="customer-profession" class="form-control" id="customer-profession" placeholder="Enter customer profession ">
		  <span id="customer-profession-span" class="text-danger ms-2">&nbsp;</span>
                </div>
                <div class="col-12">
                  <label for="customer-feedback" class="form-label">  customer feedback</label>
                  <input type="text" name="customer-feedback" class="form-control" id="customer-feedback" placeholder="Enter customer's feedback">
		  <span id="customer-feedback-span" class="text-danger ms-2">&nbsp;</span>
                </div>
                   <div class="col-12">
                  <label for="customer-image" class="form-label">customer Image</label>
                  <input type="file" name="customer-image" class="form-control" id="customer-image" required>
                </div>
                <div class="text-center">
                  <button type="submit" name="client-submit" class="btn btn-primary">Add Service</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

         

        </div>
      </div>
    </section>
<script>
function validateService(){
let name = document.getElementById('customer-name').value;
let namespan = document.getElementById('customer-name-span');

if(name == ""){
namespan.innerHTML = "Enter the name of customer";
return false;
} else{
namespan.innerHTML = "&nbsp;";
}

let customer = document.getElementById('customer-profession').value;
let customerspan = document.getElementById('customer-profession-span');

if(customer == ""){
customerspan.innerHTML = "Enter the profession of customer";
return false;
} else{
customerspan.innerHTML = "&nbsp;";
}

let feedback = document.getElementById('customer-feedback').value;
let feedbackspan = document.getElementById('customer-feedback-span');

if(feedback == ""){
feedbackspan.innerHTML = "Enter the feedback of customer";
return false;
} else{
feedbackspan.innerHTML = "&nbsp;";
}

}
</script>

  </main><!-- End #main -->


<?php include 'footer.php'; ?>