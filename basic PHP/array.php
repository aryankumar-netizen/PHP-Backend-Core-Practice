<?php

// $details = ["students", ["Name" => "Ali", "age" => 25]];

// // echo $details;

// echo "<pre>";
// print_r($details);

// echo $details[1]["age"];

// print_r( $details[1]["age"]);

//Matrix
$matrix = [
    [2, 4],
    [6, 8]
];
foreach ($matrix as $row){
    foreach ($row as $col){
        echo $col;
        echo "<br>";
    }
}


 

?>
