<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>My school</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
            <span>
              MY SCHOOL
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>


    <section class="contact_section layout_padding">
    <div class="container ">
      <div class="heading_container ">
        <h2 class="">
         
          <span>
            WELCOME
          </span>

        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <form action="login.php" method="post">
            
            <div>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div>
              <input type="password" placeholder="Password" name="pass" required/>
            </div>
            
            <div class="d-flex  mt-6 ">
            &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
              <button>
                LOGIN
              </button> &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp 
              <button onClick="location.href='new.php'" type="button">SIGN UP</button>
            </div>
            
          </form>
<br><br><center>

          <?php
    session_start();
    include("config.php");
    error_reporting (E_ALL ^ E_NOTICE);
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
       

        
        $rs = mysqli_query($con, "SELECT * from login where email='$email' and password='$pass'");

     if (mysqli_num_rows($rs)<1) {
       
        echo"<h5 style='color:black;font-family:Segoe UI'>* User Does not Exist!!!</h5>";
     }
     else{
            echo "<h1 align=center>Hey you are sucessfully login!!!</h1>";
            $_SESSION['login'] = $email;
           if(isset($_SESSION["login"]))
           {
          
            ?>
            <script>
                window.location.href = "home.php";
            </script>
    <?php
           }
      }
    }




if($_POST['email']=="qwerty@gmail.com" && $_POST['pass']=="123456")
{

    
     ?>
     <script>
         window.location.href = "adminpanel.php";
     </script>
<?php
    }

      ?>

</center>
        </div>
        <div class="col-md-6">
          <!-- map section -->
          <div class="img-box">
            <img src="images/icon.jpg" alt="" height="350" width="350">
          </div>

          <!-- end map section -->
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved
    </p>
  </section>

 