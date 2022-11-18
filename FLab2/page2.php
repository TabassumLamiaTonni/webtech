<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page-2</title>
</head>
<body>
    <h1>page 2 [conversion Rate]</h1>
    
    <h2>Conversion rate</h2>
    <p>

    1.<a href="page1.php">home</a>   2.<a href="page2.php">Conversion Rate</a>   3.<a href="page3.php">History</a>  
    </p>
    <hr>

    <Form method="POST" action="page2Action.php" method="post" novalidate>


           <label for="catagory">Catagory:</label><input type="text" id="catagory" name="catagory"><br><br>
           <label for="unit">Unit:</label><input type="number" id="unit" name="unit"><br><br>
           <label for="rate">Rate:</label><input type="number" id="rate" name="rate"><br><br>


        <input type="submit" value="add">
    </Form>
<br><br>
<?php
if (isset($_GET["msg"])){
    echo $_GET["msg"];
}
?>
</body>
</html>