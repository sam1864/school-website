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
          <a class="navbar-brand" href="adminpanel.php">
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
                  <a class="nav-link" href="adminpanel.php">
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
            Insert Event
          </span>

        </h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <form action="insertevent.php" method="post" enctype="multipart/form-data">
          <div>

          
              <input type="file" placeholder="Insert Poster" name="file" required/>
            </div>  
            <div>
              <input type="text" placeholder="Event Name " name="name" required/>
            </div>  

            <div>
              <input type="date" placeholder="Event Date" name="date" required/>
            </div>
           
            
            <div class="d-flex  mt-6 ">
            &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
              <button name="btn-upload">
                UPLOAD
              </button> 
            </div>
            
          </form>



<br><center>

<?php
include_once 'config.php';
if (isset($_POST['btn-upload'])) {

    $file = $_FILES['file']['name'];
    $name = $_POST['name'];
    $date = $_POST['date'];

        $sql = "INSERT INTO event(poster,name,date) VALUES('$file','$name','$date')";

        mysqli_query($con, $sql);
?>
        <script>
            alert('successfully uploaded');
            window.location.href = 'adminpanel.php';
        </script>
    <?php
    } else {
    ?>
       
<?php
    }

?>
