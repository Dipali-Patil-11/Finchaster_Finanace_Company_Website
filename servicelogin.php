<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>finchaster- Financial Services </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
 


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt text-primary me-2"></i>123 RK Street, Nashik, India</small>
                <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 6.00 pm</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small><i class="fa fa-envelope text-primary me-2"></i>finchaster241@gmail.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+091 241 8731</small>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="display-5 text-primary m-0">Finchaster</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="project.html" class="dropdown-item">Projects</a>
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">Team Member</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <div class="m-2 me-3 btn-group" role="group">
                      <a href="/web/finchaster/login.php" class="btn btn-outline-primary" style="height: 40px;">Login</a>
                      <a href="/web/finchaster/servicelogin.php"class="btn btn-primary" style="height: 40px;">Sign Up</a>
                   </div>
                      </div>

                 <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small style="color:blue;" class="fab fa-facebook-f "></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small style="color:skyblue;" class="fab fa-twitter "></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small style="color:rgb(98,73,209);" class="fab fa-linkedin-in "></small>
                    </a>
                  <a class="btn btn-light btn-sm-square rounded-circle ms-3"href="">
                        <small  style="color:rgb(209,73,154);" class="bi bi-instagram "></small>
                  
                    </a>
 
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
 <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Sign Up</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<?php
$conn = mysqli_connect('localhost', 'root', '', 'finchaster');

if (!$conn) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sorry !</strong> We are Unable to Connect to the Server. It will be solved in few days.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            } 
else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name=$_POST['name'];
        $email = $_POST['mail'];
		$mobile=$_POST['mobile'];
        $pass = $_POST['password'];
        $conpass = $_POST['confirmpassword'];
		if($pass == $conpass){
			$sql = "insert into `account_details` values ('$name','$email','$mobile','$pass')";
			$result = mysqli_query($conn, $sql);
			
			if ($result) {
				 echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Signed Up Successfully !</>  Welcome "' . $name . '"<button type="button" class="btn-close" data-bs-dismiss="alert" -label="Close"></button></div>';
	 
			}
			else
			{
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Incorrect Email !</> Account Not Created Having "' . $email . '" email !!<button type="button" class="btn-close" data-bs-dismiss="alert" -label="Close"></button></div>';
			}
		} else {
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Password not Matched !</> Password And Confirm Password Not Matched !! !!<button type="button" class="btn-close" data-bs-dismiss="alert" -label="Close"></button></div>';
		}
	}
}


?>



 <!-- Callback Start -->
    <div class="container-fluid callback my-5 pt-5">
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                            </p>
                            <h1 class="display-5 mb-5">Sign Up</h1>
                        </div>
                        <div class="row g-3">
                       <form action="/web/finchaster/servicelogin.php" onsubmit="return validateSignUp()" method="post">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    <span id='namespan' class='text-danger'>&nbsp;</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="mail" name="mail" placeholder="Your Email">
                                    <label for="mail">Your Email</label>
									<span id='mailspan'class='text-danger'>&nbsp;</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile">
                                    <label for="mobile">Your Mobile</label>
                                <span id='mobilespan'class='text-danger'>&nbsp;</span>
                            </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                    <label for="password">Password</label>
                                    <span id='passwordspan'class='text-danger'>&nbsp;</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm Password" id="confirmpassword">
                                    <label for="confirmpassword">confirm password</label>
                                   <span id='confirmpasswordspan'class='text-danger'>&nbsp;</span>
                                     
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <input class="btn btn-primary w-100 py-3" type="submit" value="submit now"></input>
                            </div>
                        </div>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Callback End -->




<script>
function validateSignUp()
{
let name=document.getElementById("name");
let Email=document.getElementById("mail");
let mobile=document.getElementById("mobile");
let password=document.getElementById("password");
let confirmpassword=document.getElementById("confirmpassword");
let namespan=document.getElementById("namespan");
let Emailspan=document.getElementById("mailspan");
let mobilespan=document.getElementById("mobilespan");
let passwordspan=document.getElementById("passwordspan");
let confirmpasswordspan=document.getElementById("confirmpasswordspan");

if(name.value=="")
{
 namespan.innerHTML="Name must be filled!"
 return false
}else if(!isNaN(name.value))
{
 namespan.innerHTML="Name must not be a number!"
 return false
} else{
namespan.innerHTML = "";
}

if(Email.value=="")
{
 Emailspan.innerHTML="Email must be filled!"
 return false
}else if(Email.value.indexOf('@')<=0)
{
 Emailspan.innerHTML="Invalid position of @!"
 return false
}else if((Email.value.charAt(Email.value.length-4)!=".")&&(Email.value.charAt(Email.value.length-3)!="."))
{
 Emailspan.innerHTML="Invalid position of '.'!"
 return false
}else{
Emailspan.innerHTML = "";
}

if(mobile.value=="")
{
mobilespan.innerHTML="please fill the mobile number field";
return false;
}else if(isNaN(mobile.value))
{
mobilespan.innerHTML="User must enter digits only";
return false;
}else if(mobile.value.length!=10)
{
mobilespan.innerHTML="User must enter 10 digits only";
return false;
} else {
mobilespan.innerHTML ="";
}

if(password.value=="")
{
passwordspan.innerHTML="please fill the Password field";
return false;
}else{
passwordspan.innerHTML="";
}

if(confirmpassword.value=="")
{
confirmpasswordspan.innerHTML="please Confirm Password";
return false;
}else{
confirmpasswordspan.innerHTML = "";
}
if(password.value!=confirmpassword.value)
{
confirmpasswordspan.innerHTML="Your password does not match";
return false;
}else{
confirmpasswordspan.innerHTML = "";
}
}

</script>
</body>
</html>
