<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2 - search car</title>
</head>
<body>
    <h1>Search for a car</h1>
    <form action = "search_result.php" method = "get">
        <label for = "model">Search by Model:</label>
        <input type = "text" name = "model" id = "model">
        <button type = "submit" value = "Search">Search</button>

    </form>
 <?php 
 require_once 'cars.php';
 ?>
</body>
</html>