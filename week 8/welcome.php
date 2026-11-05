<?php 
session_start();

if (!isset ($_SESSION ["user"])){
    header ("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php include 'header.inc'; ?>

    <p>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?></p>

    <?php include 'footer.inc'; ?>
</body>
</html>