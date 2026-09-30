<?php
$colors = ["red", "green", "blue"];

foreach ($colors as $color){
    echo $color;
    echo "<br>";
}

for ($i = 1; $i <= 5; $i++) {
    if ($i == 3){
        break;
    }echo "Number: $i <br>"; 
}
?>