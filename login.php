<?php
     $host = "localhost";
     $dbusername = "root";
     $dbpassword = "";
     $dbname = "customer";
     
   $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    // if($conn->connect_error){
    // //     echo"connection error";
    // // }else{
    // //     echo"connected";
    // // }

    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $username;
    // echo $password;

    $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result);
    if($username == "" && $password == ""){
        header('location:customerlogin.php');
    }
    if($row['username'] == $username && $row['password'] == $password){
        header('location:frontpage.html');
        echo"Welcoooooom";
    }else{
        echo"<script>alert('invalid username or password')</script>";
        echo"<script>location.replace('customerlogin.php')</script>";
    }
?>