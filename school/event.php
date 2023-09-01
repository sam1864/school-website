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
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr; /* Three equal columns */
      grid-gap: 10px; /* Gap between grid items */
      padding: 10px; /* Padding around the grid */
    }

    .grid-item {
      background-color: #f1f1f1;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="home.php">
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
                  <a class="nav-link" href="home.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
<center><h3 style="color: white;">Events</h3></center>
<div class="grid-container">
   
    

    <?php
        require_once('config.php');
        $sql = "SELECT * FROM event";
        $result_set = mysqli_query($con, $sql);
        
            


                    while (($row = mysqli_fetch_assoc($result_set))) {
                        
                        ?> <div class="grid-item">

       <center><img src="<?php echo $row['poster']; ?>"height="45%" width="45%"><br><h5>Event Name : 
    <?php echo $row['name'];?><br> Date : <?php echo $row['date'];?></h5></center>
    <br><br>
    </div>

<?php } ?>

  </div>