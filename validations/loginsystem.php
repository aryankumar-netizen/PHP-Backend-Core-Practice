<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        User Name: <input type="text" name="userName">
        User Password: <input type="text" name="pass">

        <button type="submit">login</button>
    </form>
</body>
</html>
<?php



if($_GET){
    //     print_r($_GET);
    //     echo  $_GET['userName']; //ali
    //     echo  $_GET['pass']; // 123

    if($_GET['userName'] == "asp" && $_GET['pass'] == "aptech"){
        echo "<script>alert('Login Successful')</script>";
    }else{
        echo "Wrong Credentials";
    }

}
else{
    echo "Form Not Submit";
}
?>
