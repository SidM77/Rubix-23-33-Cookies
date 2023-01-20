<?php 
    $login = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partials/_dbconnect.php';
        $emailid = $_POST["emailid"];
        $password = $_POST["password"];
        
        
            $sql = "Select * from farmer where emailid ='$emailid' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num == 1){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['emailid'] = $emailid;
                header("location: sellit.php");
            }
        
        else{
            $showError = "Invalid Credentials";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to Fresh Fields</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">  
  <style>
   

.body, .html {
height: 100%;
}     
.body {
background-image: url('bg-image.jpg');
height: 100%;
background-position: center;
/* Center and scale the image nicely */
background-repeat: no-repeat;
background-size: cover;  

height: 40rem; 
margin-right: -8px;
margin-top: -80px;
margin-left: -10px;
margin-bottom: -100px;
display: flex; 
 justify-content: left;
padding-top: 250px;
padding-left: 80px;  
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
height : 450px;
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
margin-left: 65px;
font-family: 'Montserrat', sans-serif;
font-weight : 500;
}

.login{
margin-top : -30px;
margin-left: 10px;
font-size: 26px;
font-family: 'Merriweather Sans', sans-serif;
font-weight : 700;
color: darkgreen;

}

.ask-signin{
padding-left: 40px;
padding-top: 30px;
}

.frame{
margin-top:50px;
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
.motto-class{
margin-top : -650px;
margin-left : 800px;
font-family: 'Lobster', cursive;
font-size : 32px;
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
     
    if($login){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in
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

    <!-- <div style="width: 100%; overflow: hidden;height: 100vh"> -->

        <!--left section-->
        
        <!-- <div style="width: 700px;float: left;" class = "split left">   -->
        <!-- <div class="container my-4"> -->
                <!-- <div class = "Logo">
                    <img src = "TickLogo.svg" alt = "Logo">
                </div> -->
                    <div class="body">
                        <div class="enter1">    
                            <div class="container">
                                <p class="login">Log in</p>
                                <div class="frame">
        
                        
                                    <h5 class= "Login-msg2">Keep up the productivity!</h5>
                                    <form action="/rubix23/fLogin.php" method="post">
                                    <div class="form-group">
                                        <p class="user">
                                        <label class = "field-desc" for="emailid">Email ID</label>
                                        <input type="text" class="form-control" id="emailid" name="emailid" aria-describedby="emailHelp">
                                        </p>
                                    </div>
                    
                                    <div class="form-group">
                                        <p class="pass">
                                        <label class = "field-desc" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" >
                                        </p>
                                    </div>
                                    
                                    <div class = "btn-div">
                                        <button class="facelog" type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                    <div class="ask-signin">
                                        <p>Not registered yet? <a href = "/rubix23/bsignup.php" class = "link-sign">Sign Up here.</a></p>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
    
    
    <div class="motto-class">
            <span class="motto"> <h1>"Empowering every farmer with smart technology"</h1> </span>
        </div>

        <script src="script.js"></script>
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>