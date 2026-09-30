    
<?php
session_start();

if($_SESSION['user'] != "Khan"){
    header('Location: index.php');
    exit();
}elseif( ( time() - $_SESSION['create_time'] ) > 8 ){
    header('Location: logout.php');
    exit();
}

?>

<html>
<head>
    Welcome to Dashboard : 
</head>
<body>

    
</body>
</html>
<?php
echo  $_SESSION["user"];
?>