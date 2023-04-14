<?php 
    include 'conn.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - XYZ Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="account">
        <form method="post" action="login.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    <center>Don't have an account? <a href="register.php">Register</a></center>
</body>

</html>

<?php

$query= "select * from register";
$result_query = mysqli_query($mysqli,$query);

while($row=MYSQLI_fetch_ASSOC($result_query)){

$email = $_POST['email'];
$password = $_POST['password'];
$d_email = $row['email'];
$d_password = $row['password'];

if(isset($_POST['email'])){
if($email==$d_email && $password==$d_password){
    header('location:about.html');

}
else{
    echo"Incorrect Credentials";
}
}
}

?>