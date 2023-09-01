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
     table {
      width: 70%;
      border-collapse: separate;
      border-spacing: 0;
      font-family: Arial, sans-serif;
      color: #333;
    }

    th, td {
      padding: 10px;
      text-align: center;
    }

    th {
      background-color: #f2f2f2;
      color: #333;
      font-weight: bold;
    }

    td {
      background-color: #fff;
      color: #333;
      border-bottom: 1px solid #ccc;
    }

    /* CSS styles for alternate row colors */
    tr:nth-child(even) {
      background-color: #f5f5f5;
    }

    /* CSS styles for hover effect */
    tr:hover {
      background-color: #ebebeb;
    }

    /* CSS styles for caption */
    caption {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }
  
  </style>
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
                  <a class="nav-link" href="adminpanel.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.html"> Logout</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <center><h3 style="color: white;">Welcome to Admin Panel</h3></center>
<center>
    <table>
    <tbody>
      <tr>
        <td>Users</td>
        <td colspan=2> <a href="users.php"> <button>VIEW</button></a></td>
       
      </tr>
      <tr>
      <td>Admission form</td>
        <td colspan=2> <a href="admissionform.php"> <button>VIEW</button></a></td>
        
      </tr>
      <tr>
      <td>Call Back Request</td>
        <td colspan=2> <a href="callback.php"> <button>VIEW</button></a></td>
        
      </tr>
      <tr>
      <td>Events</td>
        <td><a href="eventview.php"> <button>VIEW</button></td>
        <td><a href="insertevent.php"> <button>INSERT</button></td>
        
      </tr>
    </tbody>
  </table>
</center>