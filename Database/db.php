<?php
$conn = mysqli_connect('localhost', 'root', '', 'user_2601');

if($conn){
    echo "Db Connected!";
}
else{
    echo "Error: Database Not Connected!";
}
?>
