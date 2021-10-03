<?php
session_start();
$host = "localhost";
$un = "root";
$pw = "";
$db = "techtrojans";
$con = new mysqli($host, $un, $pw, $db);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['SignIn'])){

    $userName = mysqli_real_escape_string($con,$_POST['userName']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($userName != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from User where userName='".$userName."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['userName'] = $userName;
            header('Location: indexmain.php');
        }else{
            header('Location: signup.html');
            echo "<script>alert('Invalid username or password!')</script>";
        }

    }

}
?>