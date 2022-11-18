<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, "lab_work_1", 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO convertion(category, unit, rate) 
VALUES ('" . $_POST["catagory"] . "', '" . $_POST["unit"] . "', '" . $_POST["rate"] . "')";
$res = mysqli_query($conn, $sql);
?>