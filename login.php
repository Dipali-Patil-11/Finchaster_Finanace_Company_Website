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
                    <a href="index.html" class="nav-item nav-link active">Home</a>
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
            <h1 class="display-3 mb-4 animated slideInDown">Login</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
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
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mail = $_POST['mail'];
        $pass = $_POST['password'];
        $conpass = $_POST['confirmpassword'];

        $sql = "SELECT * FROM `account_details` WHERE `mail` = '$mail'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row == null) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Incorrect Email !</> Account Not Created Having "' . $email . '" email !!<button type="button" class="btn-close" data-bs-dismiss="alert" -label="Close"></button></div>';
            } else {
                if ($row['password'] == $pass) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Login Successful !</>  Welcome "' . $row['name'] . ' "<button type="button" class="btn-close" data-bs-dismiss="alert" -label="Close"></button></div>';
                   header("Location: /web/finchaster/dashboard.php");
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Incorrect Password !</> Try Again to Log In <button type="button" class="btn-close" data-bs-dismiss="alert" -label="Close"></button></div>';
                }
            }

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
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Get In Touch
                            </p>
                            <h1 class="display-5 mb-5">Login</h1>
                        </div>
                        <div class="row g-3">
                       <form action="/web/finchaster/login.php" onsubmit="return validate()" method="post">	
                            <div class="col-sm-12">
                                  <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="mail" placeholder="Your Email" name="mail"/>
                                    <label for="mail">Your Email</label>
 			            <span id='mailspan'class='text-danger'>&nbsp;</span>
                                </div>
                            </div>
                                    <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password"/>
                                    <label for="password">Password</label>
                                </div>
                                <span id='passwordspan'class='text-danger'>&nbsp;</span>
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
function validate()
{
let Email=document.getElementById("mail");
let password=document.getElementById("password");
let confirmpassword=document.getElementById("confirmpassword");
let Emailspan=document.getElementById("mailspan");
let passwordspan=document.getElementById("passwordspan");
let confirmpasswordspan=document.getElementById("confirmpasswordspan");


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
