<?php include 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add service</h1>
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
              <h5 class="card-title">Service</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" action="process/product.php" enctype="multipart/form-data" onsubmit="return validateService()">
                <div class="col-12">
                  <label for="service-title" class="form-label">Service title</label>
                  <input type="text" name="service-title" class="form-control" id="service-title" placeholder="Enter title of service">
		  <span id="service-title-span" class="text-danger ms-2">&nbsp;</span>
                </div>
                <div class="col-12">
                  <label for="service-description" class="form-label">Service Description</label>
                  <input type="text" name="service-description" class="form-control" id="service-description" placeholder="Enter Service Description">
		  <span id="service-description-span" class="text-danger ms-2">&nbsp;</span>
                </div>
                <div class="col-12">
                  <label for="service-highlights-1" class="form-label">Service Highlights - 1</label>
                  <input type="text" name="service-highlights-1" class="form-control" id="service-highlights-1" placeholder="Enter Service Highlight 1">
		  <span id="service-hightlight-1-span" class="text-danger ms-2">&nbsp;</span>
                </div>
                <div class="col-12">
                  <label for="service-highlights-2" class="form-label">Service Highlights - 2</label>
                  <input type="text" name="service-highlights-2" class="form-control" id="service-highlights-1" placeholder="Enter Service Highlight 2">
		  <span id="service-hightlight-2-span" class="text-danger ms-2">&nbsp;</span>
                </div>
                <div class="col-12">
                  <label for="service-highlights-3" class="form-label">Service Highlights - 3</label>
                  <input type="text" name="service-highlights-3" class="form-control" id="service-highlights-3" placeholder="Enter Service Highlight 3">
		  <span id="service-hightlight-3-span" class="text-danger ms-2">&nbsp;</span>
                </div>
                <div class="col-12">
                  <label for="service-image" class="form-label">Service Image</label>
                  <input type="file" name="service-image" class="form-control" id="service-image" required>
                </div>
                <div class="text-center">
                  <button type="submit" name="service-submit" class="btn btn-primary">Add Service</button>
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
let title = document.getElementById('service-title').value;
let titlespan = document.getElementById('service-title-span');

if(title == ""){
titlespan.innerHTML = "Enter the title of service";
return false;
} else{
titlespan.innerHTML = "&nbsp;";
}

let description = document.getElementById('service-description').value;
let descriptionspan = document.getElementById('service-description-span');

if(description == ""){
descriptionspan.innerHTML = "Enter the description of service";
return false;
} else{
descriptionspan.innerHTML = "&nbsp;";
}

let high1 = document.getElementById('service-highlight-1').value;
let high1span = document.getElementById('service-highlight-1-span');

if(high1 == ""){
high1span.innerHTML = "Enter the highlight of service";
return false;
} else{
high1span.innerHTML = "&nbsp;";
}

let high2 = document.getElementById('service-highlight-2').value;
let high2span = document.getElementById('service-highlight-2-span');

if(high2 == ""){
high2span.innerHTML = "Enter the highlight of service";
return false;
} else{
high2span.innerHTML = "&nbsp;";
}

let high3 = document.getElementById('service-highlight-3').value;
let high3span = document.getElementById('service-highlight-3-span');

if(high3 == ""){
high3span.innerHTML = "Enter the highlight of service";
return false;
} else{
high3span.innerHTML = "&nbsp;";
}




}
</script>

  </main><!-- End #main -->


<?php include 'footer.php'; ?>