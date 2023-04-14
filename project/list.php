<html>
<head>
    <link rel="stylesheet" href="list.css">
</head>
<body>
<table border="1">
    <tr>
        <th>SN</th>
        <th>Check In Date</th>
        <th>Check Out Date</th>
        <th>Number of Guests</th>
        <th>Room Type</th>
    </tr>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hotel";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    echo "Server Error";
} else {
    $query = "select * from reservation";
    $result = mysqli_query($conn, $query);
    while ($each = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>".$each['id']."</td>
        <td>".$each['checkin']."</td>
        <td>".$each["checkout"]."</td>
        <td>".$each["numberofguest"]."</td>
        <td>".$each["roomtype"]."</td>
        </tr>";
    }
} ?>
</table>
</body>
</html>