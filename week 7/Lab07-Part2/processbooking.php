<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
        // Lấy dữ liệu text
        if (isset($_POST["firstname"])){$firstname = $_POST["firstname"];}
        else {$firstname = "";}

        if (isset($_POST["lastname"]))  {$lastname  = $_POST["lastname"];}
        else { $lastname  = ""; }

        if (isset($_POST["age"])){ $age = $_POST["age"];}
        else { $age = ""; }

        if (isset($_POST["food"])){$food = $_POST["food"];}
        else { $food = ""; }

        if (isset($_POST["partysize"])){$partysize = $_POST["partysize"];}
        else { $partysize = "";}
//chỉnh tour
        $tour = [];
        if (isset ($_POST["accom"]))
            {$tour[] = "Accommodation";}
        
        if (isset ($_POST["4day"]))
            {$tour[] = "4 Day Tour";}
        
        if (isset ($_POST["10day"]))
            {$tour[] = "10 Day Tour";}
        $booking = implode (" and ",$tour);
//chỉnh spieces
        if (isset ($_POST["species"])){$species = $_POST["species"];}
        $species_name = "";
        if ($species == "H"){$species_name ="Human";}
        elseif ($species == "D"){$species_name ="Drawf";}
        elseif ($species == "E"){$species_name ="Elf";}
        elseif ($species == "H"){$species_name ="Hobbit";}
        
       echo ("Welcome " . $firstname . " " . $lastname . "!" . "</br>");
       echo ("You are now booked on the ".$booking . "</br>" );
       echo ("Species ".$species_name . "</br>" );
       echo ("Age: " . $age . "</br>");
       echo ("Meal Reference:  " . $food . "</br>");
       echo ("Number of travellors:  " . $partysize) . "</br>";
    ?>
</body>
</html>