<?php
    include('db.php');
?>

<form action="" method="POST">
    Name: <input type="text" name="nm"> <br><br>
    Email: <input type="email" name="mail"> <br><br>
    Password: <input type="password" name="pass"> <br><br>

    <button type="submit">Create Account!</button>
</form>

<?php
    // echo "<pre>";
    // print_r($_SERVER);

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // echo "hello";
        echo $_POST['nm'];
        echo $_POST['mail'];
        echo $_POST['pass'];

        $name = trim(htmlspecialchars($_POST['nm']));
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];

        $hashPass = password_hash($pass, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(name, email, password, hash_pass ) 
        VALUES ('$name', '$mail', '$pass', '$hashPass')";

        $run = mysqli_query($conn, $query);
            if($run){
        echo "Data has been Inserted!";
    }else{
        echo "Error: Data not Inserted in DB!";
    }
    
    }
    else{
        echo "Form Not Submitted!";
    }
?>

 
