<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <form method="POST">
        Email: <input type="text" name="UserEmail"> <br> <br>
        Password: <input type="text" name="pass"> <br> <br>

        <button type="submit" name="s_btn">Login</button>
    </form>
</body>

</html>

<?php

$password = "aptech";
$hashPassword = password_hash($password, PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['s_btn'])) {
    // print_r($_POST);

    $mail = $_POST['UserEmail'];
    $clean_email = filter_var($mail, FILTER_SANITIZE_EMAIL);

    $pass = $_POST['pass'];

    // 1. Validations: empty
    if (empty($clean_email) || empty($pass)) {
        echo "Error: Empty Field !";
    }
    // 2. Email Format 
    elseif (!filter_var($clean_email, FILTER_VALIDATE_EMAIL)) {
        echo "Wrong Email Format";
    }
    // 3. Credentail Check
elseif ($clean_email == "asp@gmail.com") {
    if (password_verify($pass, $hashPassword)) {
        echo "<script>
            alert('Login!');
        </script>";
    } else {
        echo "Login Successful";
    }
}

    // 4. Error 
    else {
        echo "<script> 
                alert('Login Failed!');
            </script>";
    }
} else {
    echo "Form Not submit!";
}
?>