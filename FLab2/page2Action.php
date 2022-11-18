<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $isValid = true;
    if (empty($_POST["catagory"])) {
        $isValid = false;
        header("Location: page2.php?msg=Category can't be empty.");
    }

    if (!is_numeric($_POST["unit"])) {
        $isValid = false;
        header("Location: page2.php?msg=Enter a valid unit.");
    }

    if (!is_numeric($_POST["rate"])) {
        $isValid = false;
        header("Location: page2.php?msg=Enter a valid rate.");
    }

    if ($isValid) {
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
        header("Location: page2.php?msg=Conversion Rate Added.");
    }
} else {
    header("Location: page2.php?msg=Something went wrong.");
}