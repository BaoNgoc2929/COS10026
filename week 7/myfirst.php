<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP</title>
</head>
<body>
    <h1>PHP Lab 07</h1>

    <?php
    $marks = [85, 85, 95];
    $marks[1] = 90;
    $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;
    echo $ave;
    if ($ave>=50)
        $status ="PASSED";
    else 
        $status ="FAILED";
    echo "<p>The everage score is $ave. You $status.</p>";

    ?>
</body>
</html> 