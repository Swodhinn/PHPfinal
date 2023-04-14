<?php
$host="localhost";
$username="root";
$password="";
$database="hotel";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    echo "Server Error";
} else {
    $query="insert into reservation(checkin,checkout,numberofguest,roomtype) values ('".$_POST["checkin-date"]."','".$_POST["checkout-date"]."','".$_POST["num-guests"]."','".$_POST["room-type"]."')";
    if($conn->query($query)){
        echo "Success";
        header("Location: thankyou.html");
    }
    else{
        echo "Error";
    }
}