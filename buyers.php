<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  header('location:blogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Fields</title>
    <link rel="icon" href="images/favicon.ico">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <!-- FontAwesome Logo -->
    <script src="https://kit.fontawesome.com/cb1adc1743.js" crossorigin="anonymous"></script>

    <!--SM's stylesheet-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">
    <style>
    body {
        background-image: url('images/market.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
      </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <section id="title">
        <div class="container-fluid">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid navsumm">
          <a class="navbar-brand">FreshFields  </a>
            <img src="images/logo.png" alt="logo" width="75" height="60">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg></a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="#">Support:</a></li>
                      <li><a class="dropdown-item" href="#">+91 7710969147</a></li>
                      <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
              </li>
            <li class="nav-item"><a class="nav-link" href="cart.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg></a></li>  
            <li class="nav-item"> <a href="http://localhost/rubix23/blogin.php"><button type="button"  class="btn btn-light" ><i class="fa-solid fa-right-to-bracket"></i> Login</button></a>
              </li>
              
            </ul>
          </div>

      </nav>
      </div>
    </section>
    <section id="features">
      <div class="centerl">
      <h2>Giving you the best rates-Ethically!</h2>
    </div>
      
      

      
      
        <div class="row">
          <div class="feature col-lg-4">
            <i class="fa-solid fa-circle-check fa-4x flogo"></i>
            <h3>Easy to use.</h3>
            <p>So easy to use, anyone could do it.</p>
          </div>
    
    
          <div class=" feature col-lg-4">
            <i class=" fa-4x flogo fa-solid fa-person-chalkboard"></i>
            <h3>Auction on crops</h3>
            <p>Choose from a wide selection and bid at your rate</p>
          </div>
          <div class="feature col-lg-4">
            <i class="flogo fa-4x fa-solid fa-indian-rupee-sign"></i>
            <h3>No middleman</h3>
            <p>Buy directly from farmers, reducing your overall cost</p>
          </div>
        </div>
      </section>



      <section id="testimonials">

        <div id="testimonials-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h2 class="step">Step 1</h2>
              <h2>Enter your details</h2>
              <i class="step fa-solid fa-circle-info"></i>      
            </div>
            <div class="carousel-item">
              <h2 class="step">Step 2</h2>
              <h2 class="testimonial-text">Browse through various crops and bid on them</h2>
              <i class=" step fa-solid fa-person-chalkboard"></i>
            </div>
            <div class="carousel-item">
              <h2 class="step">Step 3</h2>
              <h2 class="testimonial-text">Receive products if you are the highest bidder!</h2>
              <i class="step img fa-solid fa-truck"></i>
            </div>
          </div>
    
    
    
    
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonials-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonials-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    
      </section>

      <section id="loginb">
      <form action="/rubix23/buyers.php" method="post">
        <div class="centerb">
          <button class="button-64 gb" type="submit" class="facelog">Submit</button></button>
        </div>
    </form>
      </section>
      
</body>
</html>