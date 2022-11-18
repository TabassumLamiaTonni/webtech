<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $isValid = true;
    if (empty($_POST["category"])) {
        $isValid = false;
        header("Location: page1.php?msg=Category can't be empty.");
    }

    if (!is_numeric($_POST["value"])) {
        $isValid = false;
        header("Location: page1.php?msg=Enter a valid unit.");
    }

    if ($isValid) {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password, "lab_work_1", 3306);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM convertion";
        $res = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                if ($row["category"] == $_POST["category"]) {
                    $result = $_POST["value"] * $row["rate"];
                    header("Location: page1.php?result=" . $result);
                }
            }
        }
    }
} else {
    header("Location: page1.php?msg=Something went wrong.");
}