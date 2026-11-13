<?php 
    require_once 'settings.php';
    //$dbcon = @mysqli_connect ($host, $user, $password, $sql_db) ; 
    try { 
    $dbcon = @mysqli_connect ($host, $user, $password, $sql_db) ;
    var_dump ($dbcon);
    } catch (exception $e) {
     echo "Unable to connect to the database.". $e->getMessage();
    }

    if ($dbcon){ // check if dbcon = true 
        $query =
        "SELECT * FROM car WHERE model LIKE '%$model%'";
        $query_1=
        "UPDATE car SET model = 'Ngọc' WHERE car_id = '1'";
        $result = mysqli_query ($dbcon,$query); //sử dụng kết nối tưg biến dbcon để thực hiện câu lệnh được gán cho biến query
            if ($result){
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Car ID</th>";
                echo "<th>Make</th>";
                echo "<th>Model</th>";
                echo "<th>Price</th>";
                echo "<th>YOM</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['car_id']."</td>";
                echo "<td>".$row['make']."</td>";
                echo "<td>".$row['model']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>".$row['yom']."</td>";
                echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($result);}
            else{
            echo "<p>Query failed.</p>";}
            
            mysqli_close($dbcon);
    }
    else {echo "<p>Unable to connect to the db.</p>";}
        ?>
