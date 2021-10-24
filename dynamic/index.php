<?php
  include('connect.php');
  session_start();
  if (isset($_SESSION['email'])) {
  }else{
     echo '<script type="text/javascript">
               location.replace("login.php");
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
  <link href="../assets/img/logo.png" rel="icon">
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
          <li><a class="nav-link scrollto" href="../quiz.html">Quiz</a></li>

        <li class="dropdown"><a href="#"><span><?php
            $mail =$_SESSION['email'];
            $result =mysqli_query($conn,"SELECT * from userdetails where email='$mail'");
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo $row['name'];
            ?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="./logout.php">Logout</a></li>
            </ul>
          </li>
          <!-- <li><a class="getstarted scrollto" href="./dynamic/login.php">Login/Signup</a></li> -->
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
            <h1 data-aos="fade-up">Build your future right here
            </h1>
            <h2 data-aos="fade-up" data-aos-delay="400">ProLearn the students choice</h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Get Started</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/learning.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    <main id="main">


      <!-- ======= Values Section ======= -->
      <section id="values" class="values">

        <div class="container" data-aos="fade-up">

          <header class="section-header">

            <p>Features</p>
          </header>

          <div class="row">

            <div class="col-lg-4">
              <div class="box" data-aos="fade-up" data-aos-delay="200">
                <img style="width: 280;height: 250px;" src="https://cdn.iconscout.com/icon/free/png-256/time-statistics-1605698-1361047.png" class="img-fluid" alt="">
                <h3>Track Progress</h3>
                <p>Track Your Learning Progress</p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="400">
                <img style="width: 280;height: 250px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/GNOME_Todo_icon_2019.svg/768px-GNOME_Todo_icon_2019.svg.png" class="img-fluid" alt="">
                <h3>Make To Do List</h3>
                <p>Make list of your work and manage them efficiently.  </p>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="fade-up" data-aos-delay="600">
                <img src="../assets/img/values-3.png" class="img-fluid" alt="">
                <h3>Quizzes</h3>
                <p>Short Quizzes for checking Knowledege </p>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Values Section -->

  <!--
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Happy Clients</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Projects</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-headset" style="color: #15be56;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Hours Of Support</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="bi bi-people" style="color: #bb0852;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Hard Workers</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section> -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Learning Overview</h2>
            <p>The Best Learning Resources </p>
          </header>

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <img style="width: 100px;height: 100px;" src="https://static.thenounproject.com/png/1430829-200.png">
                <h3>Data Structures and Algorithms</h3>
                <p>The Best study material for Data structures and Algorithms.</p>
                <a target="_blank" href="https://www.programiz.com/dsa" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-box orange">
                <img style="width: 100px;height: 100px;" src="https://www.freeiconspng.com/uploads/sql-file-icon-0.png">
                <h3>SQL</h3>
                <p>The Best study material for SQL in which all Query and operations are discussed.</p>
                <a target="_blank" href="https://www.w3schools.com/sql/default.asp" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-box green">
                <img style="width: 100px;height: 100px;" src="https://cdn2.vectorstock.com/i/1000x1000/34/46/software-or-graphic-design-icon-vector-12293446.jpg">
                <h3>Web Development</h3>
                <p>The best Matching Web Development course.</p>
                <a target="_blank" href="w3schools.com/whatis/default.asp" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="service-box red">
               <img style="width: 120px;height: 120px;" src="https://image.shutterstock.com/image-vector/digital-processor-chip-vector-icon-260nw-1723229299.jpg">
                <h3>Core Computer Science</h3>
                <p>In depth resources of core computer science.</p>
                <a target="_blank" href="https://www.geeksforgeeks.org/computer-organization-and-architecture-tutorials/" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
              <div class="service-box purple">
               <img style="width: 100px;height: 100px;" src="https://qph.fs.quoracdn.net/main-qimg-011de5342604fe4790a86357beec5ee5">
                <h3>Competitive Programming</h3>
                <p>The Best Competitive Programming Website</p>
                <a target="_blank" href="https://leetcode.com/problemset/all/" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
              <div class="service-box pink">
                 <img style="width: 100px;height: 100px;" src="https://www.kindpng.com/picc/m/34-347394_clip-art-marketing-icon-drip-room-hd-png.png">
                <h3>Marketing</h3>
                <p>Learn Marketing in Easy way.</p>
                <a target="_blank" href="https://www.javatpoint.com/marketing-tutorial" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

          </div>

        </div>

      </section><!-- End Services Section -->

      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </header>

          <div class="row">
            <div class="col-lg-6">
              <!-- F.A.Q List 1-->
              <div class="accordion accordion-flush" id="faqlist1">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                      What is Prolearn ?
                    </button>
                  </h2>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                        Prolearn is a learning platform which provides various courses on different technical and Non-technical topics with proper resources and Quizzes.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                       Where can find best resources for ?
                    </button>
                  </h2>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Best resouces are in the resouces tab with different technical and non technical resouces also you cann find resources in explore section.
                    </div>
                  </div>
                </div>



              </div>
            </div>

            <div class="col-lg-6">

              <!-- F.A.Q List 2-->
              <div class="accordion accordion-flush" id="faqlist2">

                  <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                     What types of Quizzes are available?
                    </button>
                  </h2>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                    <div class="accordion-body">
                      Quizzes on multiple topics are present with different types of questions
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                      Can I share the profile?
                    </button>
                  </h2>
                  <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                    <div class="accordion-body">
                      Yes you can share your profile and your progress with others.
                    </div>
                  </div>
                </div>


              </div>
            </div>

          </div>

        </div>

      </section><!-- End F.A.Q Section -->


      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2></h2>
            <p>Reviews And Ratings</p>
          </header>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Best platform to access different resouces and explore different tech stack. Learned new skills which helped in futher growth. Highly recommend ProLearn.
                  </p>
                  <div class="profile mt-auto">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Atharv Patil</h3>
                    <h4>Student At MITAOE Pune</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Followed the C++ Path for learning it has best resouces with quiz. Learned C++ perfectly.
                  </p>
                  <div class="profile mt-auto">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Student At VIT Pune</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Explored various programming language and Quizzes of these languages Highly recommend ProLearn for learning.
                  </p>
                  <div class="profile mt-auto">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Jadhav</h3>
                    <h4>Student At MITAOE Pune</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Learned C++ perfectly.Explored various programming language and Quizzes of these languages Highly recommend ProLearn for learning.
                  </p>
                  <div class="profile mt-auto">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Prasad Hule</h3>
                    <h4>Student At COEP Pune</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    Best platform to access different resouces and explore different tech stack.Followed the C++ Path for learning it has best resouces with quiz. Learned C++ perfectly.
                  </p>
                  <div class="profile mt-auto">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>Akash Pawar</h3>
                    <h4>Student At PCCOE Pune</h4>
                  </div>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </section><!-- End Testimonials Section -->


      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Our Clients</h2>
            <p>Temporibus omnis officia</p>
          </header>

          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

      </section><!-- End Clients Section -->



  </main><!-- End #main -->

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
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
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
              Pune,  411026<br>
              Maharashtra <br><br>
              <strong>Phone:</strong> +1 775588 78 11<br>
              <strong>Email:</strong> prolearn@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>
  </footer>End Footer -->

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
