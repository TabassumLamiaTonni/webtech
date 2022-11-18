<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page-1</title>
</head>
<body>
    <h1>page 1 [converter]</h1>
    
    <h2>Conversion rate</h2>
    <p>

    1.<a href="page1.php">home</a>   2.<a href="page2.php">Conversion Rate</a>   3.<a href="page3.php">History</a>  
    </p>
    <hr>


    <form action="page1Action.php" method="post" novalidate>

        <label for="category">Select Category:</label>
        <select name="category" id="category">
            <option value="">Select a Category</option>
            <?php
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
                    echo "<option value='" . $row["category"] . "'>" . $row["category"] . "</option>";
                }
            }
            ?>
        </select>
        <br><br>
        <label for="value">Value: </label>
        <input type="number" name="value" id="value" value="<?php echo isset($_GET["value"]) ? $_GET["value"] : "" ?>">

        <input type="submit" value="Convert">

        <br><br>
        <label for="result">Result: </label>
        <input type="number" name="result" id="result" value="<?php echo isset($_GET["result"]) ? $_GET["result"] : "" ?>" readonly>
    </form>

</body>
</html>