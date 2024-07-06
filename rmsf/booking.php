<?php
$name = $_POST['name'];
$email_table= $_POST['email_table'];
$date= $_POST['date'];
$time=$_POST['time'];

$conn=new mysqli('localhost','root','','rms');
if($conn->connect_error) {
    die('connection failed:'. $conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into tablebook (name,email_table,date,time) values(?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email_table,$date,$time);
    $stmt->execute();
    echo "Registered successfully!";
    $stmt->close();
    $conn->close();
}
?>