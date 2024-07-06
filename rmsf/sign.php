<?php
$userid = $_POST['userid'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$copassword=$_POST['copassword'];

$conn=new mysqli('localhost','root','','rms');
if($conn->connect_error) {
    die('connection failed:'. $conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into sign (userid,fullname,email,password,copassword) values(?,?,?,?)");
    $stmt->bind_param("sssss", $fullname, $email,$password,$copassword);
    $stmt->execute();
    echo "Registered successfully!";
    $stmt->close();
    $conn->close();
}
?>
