

<?php
require_once 'settings.php';
//$conn = mysqli_connect($host, $user, $password, $sql_db);
try { 
    $dbcon = @mysqli_connect ($host, $user, $password, $sql_db) ;
    var_dump ($dbcon);
    } catch (exception $e) {
     echo "Unable to connect to the database.". $e->getMessage();
    }

// if (!$dbcon){ 
//die ("Connection failed: " . mysqli_connect_error());}

if (isset($_GET['model'])) {
    $model = mysqli_real_escape_string($dbcon, $_GET['model']);
    $sql = "SELECT * FROM car WHERE model LIKE '%$model%'";
    try {
        $result = mysqli_query($dbcon, $sql);
    } catch (Exception $e) {
        echo("Error: " . $e->getMessage());
    } 

            if (mysqli_num_rows($result) > 0) {

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
               }
            else{
            echo "<p>Please enter a valid car model.</p>";}
            
            mysqli_close($dbcon);
    }
else {echo "<p>Unable to connect to the db.</p>";
}
 ?>




