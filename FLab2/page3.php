
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page-3</title>
</head>
<body>
    <h1>page 3 [History]</h1>
    

    <p>

    1.<a href="page1.php">home</a>   2.<a href="page2.php">Conversion Rate</a>   3.<a href="page3.php">History</a>  
    </p>
    <hr>

</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, "lab_work_1", 3306);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "Select category, unit, rate From convertion";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
	while($row = mysqli_fetch_assoc($res)) {
		echo $row["category"] . " " . $row["unit"] . " " .$row["rate"];
		echo "<br><br>";
	}
}
else {
	echo "No record(s) found";
}
    ?>
