
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter Order Details</title>



  <!--SM77-->

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

<!--Maviya's stylesheet-->
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/accept.css"> 

<style>
body {
    background-image: url('images/2pl.webp');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  .accept_css{
    margin-right: 300px;
  }
  .details{
    background-color: #ddd;
    height: 185px;
    border-radius: 10px;
    margin: auto;
    padding: 15px;
  }
  </style>
  



</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <?php

include 'partials/_dbconnect.php';

if(isset($_GET['id']))
{
$id = $_GET['id'];

$q = "SELECT * FROM `imgupload` WHERE id = '{$id}'";
        $result = $conn->query($q);
        ?>
        <div class="details">
        <?php
        echo"<h3>PRODUCT NAME : </h3>";
    
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo $row["product"]. "<br>";
          }
        } else {
          echo "0 results";
        }



$sql = "SELECT * FROM `auct` WHERE id = '{$id}'";

$result = $conn->query($sql);
        echo"<h2>Details Of Buyer</h2>";
    
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " -  Buyer id : " . $row["bemailid"]. "<br>";
            
          }
          ?>
          </div>
          <?php
        } else {
          echo "0 results";
        }
      }
        $showAlert = false;
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $sellername = $_POST['sellername'];
            $selleremail=$_POST['selleremail']; 
            $productid=$_POST['productid'];
           $productname = $_POST["productname"];
           $scno = $_POST["scno"];
           $buyeremail = $_POST["buyeremail"];
               //$sql = "INSERT INTO `userlist` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
               $sql = "INSERT INTO `confirm`(`sellername`, `selleremail`, `product id`, `product name`, `seller contact no`, `buyeremail`) VALUES ('$sellername','$selleremail','$productid','$productname','$scno','$buyeremail')";
               $result = mysqli_query($conn, $sql);
                if ($result){
                    $showAlert = true;
                    header('location:browse.php');
                }
       }
       
?>
    <nav>
        <div class="nav-main">
            <div class="nav-header">
                <a onclick="location.href='/rubix23/index.html'" class="link"><img src="copy-removebg-preview.png" class="logo"> <span class="site-name">Fresh Fields</span></a> 
            </div>
        </div>
    </nav>
      <form action = "accept.php" class="accept_css" method="post" enctype="multipart/form-data">
      <div class="container">  
            <div class = "form-group">
                <label for="sellername"> Your Name :</label>
                <input type="text" name="sellername" id="sellername" class="form-control">
            </div>
            <div class = "form-group">
                <label for="selleremail"> Your ID :</label>
                <input type="text" name="selleremail" id="selleremail" class="form-control">
            </div>
            
            <div class = "form-group">
                <label for="productid"> Product ID :</label>
                <input type="text" name="productid" id="productid" class="form-control">
            </div>
            <div class = "form-group">
                <label for="productname"> Product Name :</label>
                <input type="text" name="productname" id="productname" class="form-control">
            </div>
            <div class = "form-group">
                <label for="scno"> Your Contact :</label>
                <input type="text" name="scno" id="scno" class="form-control">
            </div>
            <div class = "form-group">
                <label for="buyeremail"> Buyers email ID :</label>
                <input type="text" name="buyeremail" id="buyeremail" class="form-control">
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-success">
    </div>
      </form>





    


</body>
</html>