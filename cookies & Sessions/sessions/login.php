<?php
session_start();
?>

<form method="POST">
    Name: <input type="text" name="Name" placeholder="Enter your name">
    <button type="submit" name="btn">Login</button>
</form>

<?php
if (isset($_POST['btn'])) {
    echo $_POST['Name'];
 $_SESSION["user"] = $_POST['Name'];
 $_SESSION['create_time'] = time();



    if ($_SESSION["user"] == "Khan") {
       
        header("location: dashboard.php");
        exit();
    } else {
       
        echo "Invalid user";
        header("location: index.php");
        exit();
    }
}
?>