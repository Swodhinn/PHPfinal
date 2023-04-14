<?php
$name=$_POST['name'];
$email=$_POST['email'];

$password=$_POST['password'];


//database connection
$conn = new mysqli('localhost','root','','hotel');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{

    $query ="INSERT INTO register(name,email,password)Values('$name','$email','$password')";

    $result=mysqli_query($conn,$query);
    if($result){
        echo "<script>alert('You have sucessfully registered')</script>";
        header("Location: about.html");

    }
    else{
        echo "<script>alert('Failed to  register')</script>";
    }
}

?>