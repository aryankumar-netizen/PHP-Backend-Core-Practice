<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Contact Form</title>
</head>
<body>

    <h2>Contact Us</h2>
    
 
    <form action="submit-form.php" method="POST">
        
        
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="3" cols="15" required></textarea><br><br>
        
   
        <button type="submit">Submit</button>
        
    </form>

</body>
</html>
