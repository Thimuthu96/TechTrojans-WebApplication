<?php
$hostname = "localhost";
$un = "root";
$pw = "";
$db = "TechTrojans";
$con = new mysqli($hostname, $un, $pw, $db);
if($con->connect_error){
  echo "faild";
}
if(isset($_POST["submit"])){
  $userName = $_POST["userName"];
  $password = $_POST['password'];
  $email = $_POST['email'];

 $errors = array();
 $u = "SELECT userName FROM User Where userName = '$userName' ";
 $uu = mysqli_query($con,$u);
 $e = "SELECT email FROM User Where email = '$email' ";
 $ee = mysqli_query($con,$e);

 if(empty($userName)){
     $errors['u']="user name reuires!";
 }else if(mysqli_num_rows($uu)>0){
    $errors['u']="user name exists!";
 }
 if(empty($email)){
    $errors['e']="email reuires!";
}else if(mysqli_num_rows($ee)>0){
   $errors['e']="email exists!";
}


 $sql= "INSERT INTO User( userName, password , email) VALUES('$userName','$password','$email')";

if($con->query($sql))
{
echo "<script>alert('Record inserted ')</script>";
}
else {
echo "<script>alert('Record insert failed ')</script>";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <!-- AOS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
    <!-- Glidejs -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css"
    />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="styles.css" />
    
    <title>TeamTrojans</title>
    </head>
  <body>
    <!-- Header -->
    <header id="home" class="header">
      <!-- Navigation -->
      <nav class="nav">
        <div class="navigation container">
          <div class="logo">
            <h1>Tech<span>Trojans</span></h1>
          </div>
          <div class="menu">
            <div class="top-nav">
              <div class="logo">
                <h1>Tech<span>Trojans</span></h1>
              </div>
              <div class="close">
                <i class="fas fa-times"></i>
              </div>
            </div>
          </div>

          <div class="hamburger">
            <i class="fas fa-bars"></i>
          </div>
        </div>
      </nav>
      <!-- Hero -->
      <div class="hero">
        <h1>Congratulations!</h1><br>
        <br>
        <h3>You have successfully registered!</h3>
        <a class="btnDesign" href="./signup.html">Login to continue</a>
        <br>
        <br>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          Successfully registered! Log in to continue.
          </div>
      </div>

      <img class="banner" src="./images/firstpage.svg" alt="" />

      <div class="icons">
        <span><i class="fab fa-facebook-f"></i></span>
        <span><i class="fab fa-instagram"></i></span>
        <span><i class="fab fa-twitter"></i></span>
      </div>
    </header>
    <footer>
      <p>Created By <span>techTrojans</span> | &copy; 2021 All rights reserved.</p>
    </footer>

    <!-- AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Typeit -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <!-- Glidejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <!-- Custom Script -->
    <script src="index.js"></script>
  </body>
</html>
