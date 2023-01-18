<?php 
session_start();
$email=$_SESSION['emailid']; 
?> 

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
    <title>Document</title>
</head>
<body>
<h1><?php echo $_SESSION['emailid']?></h1>
    <div class= "container">
        <h1 class="text-center text-white bg-dark">store</h1>
        <br>
        <div class="table-responsive">
        <table class ="table table-bordered table-stripped table-hover">
            <thead>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Product image</th>
            </thead>

            
                <?php 
                  
                include 'partials/_dbconnect.php';
                   
                    if(isset($_POST['submit'])){
                        $product = $_POST['product'];
                        $price = $_POST['price'];
                        $files = $_FILES['file'];

                        print_r($product);
                        echo "<br>";

                        $filename = $files['name'];
                        $fileerror = $files['error'];
                        $filetmp = $files['tmp_name'];

                        $fileext = explode('.',$filename);
                        $filecheck = strtolower(end($fileext));

                        $fileextstored = array('png', 'jpg', 'jpeg');
                        if(in_array($filecheck, $fileextstored)){
                            $destinationfile = 'upload/'.$filename;
                            move_uploaded_file($filetmp,$destinationfile);

                            //$q = "INSERT INTO `imgupload`(`product`, `price`, `image`, `email`) VALUES ('$product', '$price', '$destinationfile', `$email`)";
                            $q = "INSERT INTO `imgupload`(`product`, `price`, `image`, `email`) VALUES ('$product','$price','$destinationfile','$email')";
                            $query = mysqli_query($conn,$q );

                            $displayquery = "SELECT * FROM `imgupload` WHERE `email`= '{$email}'";
                            $querydisplay = mysqli_query($conn, $displayquery);

                            //$row = mysqli_num_rows($querydisplay);

                            while($result = mysqli_fetch_array($querydisplay))
                            {
                                
                                ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $result['id']?></td>
                                    <td><?php echo $result['product'];?></td>
                                    <td><?php echo $result['price'];?></td>
                                    <td><img src=" <?php echo $result['image'];?>" height="100px" width="100px" ></td>
                                </tr>
                                <?php
                            }
                        }
                    }
                    $conn->close();
                ?>
            </tbody>

        </table>
    </div>
</div>
</body>
</html>