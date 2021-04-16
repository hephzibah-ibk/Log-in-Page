<!DOCTYPE html>
<html>
 <head>
  <title>Authentication Page</title>
 </head>
 <body>
    <h1>Sign Up</h1>
    <form action = "index.php" method = "post">
        <input type = "text" name = "first_name" placeholder = "first name" required><br><br>
        <input type = "text" name = "last_name" placeholder = "last name" required><br><br>
        <input type = "date" name = "dob" required><br><br>
        <input type = "email" name = "email" placeholder = "email" required><br><br>
        <input type = "text" name = "username"  placeholder = "username" required><br><br>
        <input type = "text" name = "password" placeholder = "password" required><br><br>
        <input type = "submit" name = "submit"><br><br>
  
         
    </form>
    <h2>Sign In</h2>
    <form action = "loginfile.php" method = "post">
        <input type = "text" name = "username" placeholder = "Username" required><br><br>
        <input type = "text" name = "password" placeholder = "Password" required><br><br>
        <input type = "submit" name = "login"><br><br>
        <input type="reset" name ="reset" placeholder = "password reset">
    </form>
 </body>
</html>