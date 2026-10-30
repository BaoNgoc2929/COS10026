<h1>PHP Variables, Arrays, and Operators</h1>
<p>The days of the week in English are:</p>
<?php
$days = ["Monday","Tuesday","Wednesday","Thursday","Friday","Satday","Sunday"];
// mảng nó sẽ không thể đọc toàn bộ một lúc như lúc gọi biến -> echo $days; dùng foreach 
echo implode(", ", $days);
?>
<p>The days of the week in French are:</p>
<?php
    $days = ["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
    // Display French days
    echo implode(", ", $days);
