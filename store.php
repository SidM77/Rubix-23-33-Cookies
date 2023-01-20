<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add/Display Items</title>


    <!--ADDED BY SidmM77-->

    
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
    <style>
    body {
        background-image: url('images/2pl.webp');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
      </style>
    </head>
<body>




      <!-- Navbar -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <section id="title">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid navsumm">
                  <a class="navbar-brand">FreshFields  </a>
                    <img onclick="location.href='/rubix23/index.html'" src="images/logo.png" alt="logo" width="75" height="60">
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
                      
              
              <li class="nav-item">
                <a class="nav-link" href="/rubix23/guidelines.html"> Farming Guidelines!</a>
              </li>
                    
                      
                    </ul>
                  </div>
    </div>

              </nav>
              </div>
          </section>
      <!-- Navbar ends -->





                                <div class= "container">
                                    <br>
                            <h1 class= "text-black bg-light text-center">
                                YOUR STORE
                            </h1>
                            <div class="col-lg-8 m-auto d-block">
                            <form action = "upload.php" method="post" enctype="multipart/form-data">
                                <div class = "form-group">
                                    <label for="product"> Product : </label>
                                    <input type="text" name="product" id="product" class="form-control">
                                </div>
                                <div class = "form-group">
                                    <label for="price"> Price/kg : </label>
                                    <input type="text" name="price" id="price" class="form-control">
                                </div>

                                <div class = "form-group">
                                    <label for="file"> Product image : </label>
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </form>

                            <form action="view.php" method="post">
                                <br>
                            <input type="submit" name="view" value="view Existing Products" class="btn btn-success">
                    </form>
            </div>
        </div>
    </body>
</html>