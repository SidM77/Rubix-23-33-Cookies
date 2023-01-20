<?php 
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partials/_dbconnect.php';
        $name = $_POST["name"];
        $contactno = $_POST["contactno"];
        $emailid = $_POST["emailid"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        //$exists=false;
        $existSql = "SELECT * FROM `farmer` WHERE emailid = '$emailid'";
        
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            //$exists = true;
            $showError = "Username Already exists.";
        }
        
        else{
            $exists = false;
        
            if(($password == $cpassword)){
            
                //$sql = "INSERT INTO `userlist` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
                $sql = "INSERT INTO `farmer` (`name`, `contactno`, `emailid`, `password`, `dt`) VALUES ('$name', '$contactno', '$emailid', '$password', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if ($result){
                    $showAlert = true;
                }
            } 
            else{
                $showError = "Passwords do not match";
            }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;1,600&family=Poppins&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <title>SignUP</title>

  <style>
.body, .html {
height: 100%;
}   
#bg-1{
    background-image: url('bg-image.jpg');
background-position: center;
background-repeat: no-repeat;
background-size: cover;  
}  
.body {


height: 48rem; 
margin-right: -8px;
margin-top: -80px;
margin-left: -10px;
margin-bottom: -100px;
display: flex; 
 justify-content: center;
padding-top: 200px;
} 
.form-control {
    width: 85% !important;
}
.panel{
display: flex;
height : 70px;
justify-content: center;
margin-top: -8px;
margin-right: -8px;
margin-left: -8px;
}
.logo{

display: flex;
height: 40px;
width: 400px;    
border:none;
justify-content: end;
font-weight: 300;
border-radius: 60px;
margin: 0px;
margin-right: 700px;
margin-top : 15px;
border: none;
color: black;
font-size : 20px;
font-weight : 700;
margin-top: 30px;
margin-left: -100px;
transition: 0.2s;
/* height: 0px; */
}
.style{
padding-right : 1px;
}

.image{
height : 80px;
width : 100px;
} 

.site-name{
margin-top: 15px;
font-family: 'Sacramento', cursive;    
font-size : 40px
}
.contactus,
.learnmore{
background-color: transparent;
border: none;
color: black;
font-family: 'Montserrat', sans-serif;    
font-size : 20px;
font-weight : 700;
margin-top: 45px;
transition: 0.2s;
height: 0px;
}
.learnmore{
margin-right: -8px;
}

.contactus{
margin-right: 14px;
}
.logo,
.contactus:hover,
.learnmore:hover{
cursor: pointer;
}

.logo,
.contactus:active,
.learnmore:active{
color: black;
}


.enter1{
background-color: white;
height : 635px;
width : 400px;
margin-top: -80px;
margin-left: 100px;

border-radius : 18px;
transition: box-shadow 0.2s;
animation-name: example;
animation-duration: 4s;
position : relative;
}

.enter1:hover{
box-shadow: 5px 5px 5px rgb(90, 82, 82);
}

@keyframes example {
0%   {background-color:transparent; right:600px; top:0px;}
40%  {background-color:white; right:0px; top:0px;}
}
.container{
margin-top: 100px;
margin-left: 20px;
font-family: 'Montserrat', sans-serif;
font-weight : 500;
}

.login{
    margin-top: -90px;
    margin-left: 96px;
    font-size: 30px;
    font-family: 'Merriweather Sans', sans-serif;
    font-weight: 700;
    color: darkgreen;

}

.ask-signin{
padding-left: 40px;
padding-top: 30px;
}

.frame{
margin-top:20px;
}
.user,
.pass{
font-size: 16px;
margin-bottom: 8px;
}


.name,
.word{
width : 260px;
border: 1px;
border-style: solid;
height : 30px;
border-radius: 9px;
padding-left: 16px;
font-size: 16px;
padding-top: 5px;
padding-bottom: 6px;
font-family: 'Montserrat', sans-serif;
font-weight : 500;
transition: outline,border,box-shadow 0.3s;
}
.name:hover,
.word:hover{
border: none;
outline:none;
box-shadow : 4px 3px 5px rgb(170, 170, 170);
}

.name:focus,
.word:focus{
border: none;
outline:none;
box-shadow : 4px 3px 5px rgb(170, 170, 170);
}


.forgot{
margin-top: 8px;
font-size: 14px;
}

.forgot:active{
color: red;
}
.facelog{
margin-top: 30px;
width : 280px;
height : 45px;
border : none;
border-radius : 13px;
background-color:  darkgreen;
font-family: 'Montserrat', sans-serif;
font-weight : 500;
color : white;
font-size : 18px;
transition: background-color 0.2s;
}

.facelog:hover{
background-color: rgb(82, 188, 82);
}

.facelog:active{
background-color: lightgreen;
}

.help,
.terms,
.sup,
.about{
text-decoration: none;
color: white;
}
  </style>
</head>
<body>
<div class="panel">
            <p class="logo"> <span class="style"> <img src = "copy-removebg-preview.png" class="image"></span><span class="site-name">Fresh Fields</span></p>
            <a href="/rubix23/fsignup.php"><button class="contactus">Sign Up</button></a>
            <a href=""><button class="learnmore">Learn More</button></a>
        </div>
    <?php
    if($showAlert){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    }
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
    }
    ?>
    
        <div class="body" id="bg-1">
            <div class="enter1">    
                <div class="container">
                    <p class="login">Sign up</p>
                    <div class="frame">
                    <form action="/rubix23/fsignup.php" method="post">
                    <div class="form-group">
                    <p class="user">
                        <label class = "field-desc" for="name">Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp">
                    </p>
                    </div>
                    
                    <div class="form-group">
                    <p class="pass">
                        <label class = "field-desc" for="contactno">Contact No</label>
                        <input type="text" class="form-control" id="contactno" name="contactno" aria-describedby="emailHelp">
                    </p>
                    </div>
                    <div class="form-group">
                    <p class="pass">
                        <label class = "field-desc" for="emailid">Email ID</label>
                        <input type="text" class="form-control" id="emailid" name="emailid" aria-describedby="emailHelp">
</p>
                    </div>
                    <div class="form-group">
                    <p class="pass">
                        <label class = "field-desc" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder ="*maximum 20 characters">
</p>
                    </div>
                    <div class="form-group">
                    <p class="pass">
                        <label class = "field-desc" for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword">
                        <small id="emailHelp" class="form-text text-muted">Make sure to type the same password!</small>
</p>
                    </div>
                    
                    <div class ="btn-div">
                        <button type="submit" class="facelog">Sign Up</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>