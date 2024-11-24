<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
    background-image: url(login.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    }
</style>
<body>
    <h1>Registration</h1>
    <form action="register.php" method="post">
        <label for="First name">First name:</label><br>
        <input type="text" id="First name" name="First name"><br><br>
        <label for="Last name">Last name:</label><br>
        <input type="Last name" id="Last name" name="Last name"><br><br>
        <label for="Password">Password:</label><br>
        <input type="Password" id="Password" name="Password"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="gender">Gender:</label><br>
        <input type="radio" id="Male" name="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="Female" name="Female">
        <label for="Female">Male</label><br><br>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>