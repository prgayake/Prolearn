<?php
  include('connect.php');
  session_start();
  if (isset($_SESSION['email'])) {
     echo '<script type="text/javascript">
               location.replace("index.php");
                </script>';
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prolearn - Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- library CSS Files -->
  <link href="../assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/library/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/library/aos/aos.css" rel="stylesheet">
  <link href="../assets/library/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/library/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/library/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span>Prolearn</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">My Learnings</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Explore</a></li>
          <li><a class="nav-link scrollto" href="#team">My Progress</a></li>
          <li><a class="nav-link scrollto" href="quiz.html">Quiz</a></li>

          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="#about">Login/Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">

          <div class="col-lg-6">
            <h1>SignUp</h1>

            <form method="post" action="signup.php" >
              <div class="row">
                <h5>Name</h5>
                <div class="col ">
                  <input name="name" type="text" class="form-control" placeholder="User Name">
                </div>

              </div>

<br>
              <div class="row">
                <h5>Email ID</h5>
                <div class="col ">
                  <input name="email" type="email" class="form-control" placeholder="User Email ID">
                </div>

              </div>
<br>
              <div class="row">
                <h5>Mobile Number</h5>
                <div class="col ">
                  <input name="mobile" type="number" class="form-control" placeholder="User Mobile No">
                </div>

              </div>
<br>      
            <div class="row">
            <h5>Age</h5>
                <div class="col ">
                  <input name="age" type="number" class="form-control" placeholder="Age">
                </div>
            </div>
            <br>

              <div class="row">
                <h5>Password</h5>
                <div class="col ">
                  <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="col ">
                  <input name="cpassword" type="password" class="form-control" placeholder="Confirm Password">
                </div>

              </div>


              <div class="row">
                <div class="col ">
                  <button type="submit" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center" type="submit" name="Register">
                    <span>SignUp</span>
                    <i class="bi bi-arrow-right"></i></button>
                  

                  <div class="inputbox">
                    <p class="p1">Already have an account?</p>
                    <a href="login.php">
                      <h5>Login </h5>
                    </a>
                  </div>
                </div>


              </div>


            </form>


          </div>


        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="../assets/img/learning.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->







  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="../assets/img/logo.png" alt="">
              <span>ProLearn</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>Our course</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">DSA</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Core Computer Science</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Computer Programming</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              ProLeaern Academy <br>
              Pune, 411026<br>
              Maharashtra <br><br>
              <strong>Phone:</strong> +1 775588 78 11<br>
              <strong>Email:</strong> prolearn@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

  </footer>
  <!--End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- library JS Files -->
  <script src="../assets/library/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../assets/library/aos/aos.js"></script>
  <script src="../assets/library/php-email-form/validate.js"></script>
  <script src="../assets/library/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/library/purecounter/purecounter.js"></script>
  <script src="../assets/library/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/library/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
<?php
    
  include('./connect.php');

 if(isset($_POST['Register']))
{
$name = $_POST['name'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$password= $_POST['password'];
$cpassword =$_POST['cpassword'];
$age =$_POST['age'];


  // $sql1 = "SELECT email FROM userdetails WHERE email='$email'";
  // $result1= mysqli_query($conn,$sql1);
  // while($row = mysqli_fetch_assoc($result1)){
  //   if($row['email']!=$email){
      if($_POST['password'] == $_POST['cpassword'])      
        {
          
          $sql =" INSERT INTO userdetails(name,email,mobile,password,age) VALUES  ('$name','$email','$mobile','$password','$age')";

            
        echo '<script type="text/javascript">alert("Registered !")</script>';  
        
            $result= mysqli_query($conn,$sql);
             echo '<script type="text/javascript">
               location.replace("login.php");
                </script>';
        }
        else
        {
          echo '<script type="text/javascript">alert("Incorrect Password !")</script>';  
        }
        

    // }else{

    //     echo '<script type="text/javascript">alert("Already Registered user with this Email ,try another !")</script>';  
    // }

  // }

      
}
?>


