<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
    <h1>Registration page</h1>
    <form method="POST">
        Name: <input type="text" name="UserName"> <br><br>
        Email: <input type="text" name="UserEmail"> <br><br>
        Password: <input type="password" name="pass" id="pass"> 
       
        <i class="fa-regular fa-eye" id="show" style="cursor: pointer; user-select: none;"></i> 
        <br><br>
        <button type="submit" name="s_btn">Register</button>
    </form>

    <p>Already have an account? <a href="login.php">Login</a></p>

<script>
    let icon = document.getElementById('show');
    let inputPass = document.getElementById('pass');

    function Display(){
        if(inputPass.type === "password"){
            inputPass.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            inputPass.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
    
    icon.addEventListener('click', Display);
</script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['s_btn'])) {
    $mail = htmlspecialchars($_POST['UserEmail']);
    $name = $_POST['UserName'];
    $pass = $_POST['pass'];
    
    $clean_email = filter_var($mail, FILTER_SANITIZE_EMAIL);

    if (empty($clean_email) || empty($pass) || empty($name)) {
        echo "Error: Empty Field !";
    }
    elseif (!filter_var($clean_email, FILTER_VALIDATE_EMAIL)) {
        echo "Wrong Email Format";
    }
    else {
        header('Location: login.php');
        exit();
    }
}
?>
