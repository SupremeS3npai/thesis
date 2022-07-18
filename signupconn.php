<?php

$firstname = $_POST['First_name'];
$firstname = $_POST['Last_name'];
$firstname = $_POST['Username'];
$firstname = $_POST['Password'];
$firstname = $_POST['Phone_number'];
$firstname = $_POST['Address'];


$servername ="localhost";
$username ="root";
$password="" ;
$db ="customer_singup";

$conn = mysqli_connec($servername, $username, $password,$db );

if (!$conn)
{
    die("connection failed: " . mysqli_connect_error());
}else{
    $stmt = $conn->prepare("Insert into registration(First_name, Last_name, Username, Password, Phone_number, Address) values(? ,? , ? , ? ,? ,?)");
    $stmt->bind_param("ssssis");
    $stmt->execute();
    echo "registration successful..";

    $stmt->close();
    $conn->close();
}

?>