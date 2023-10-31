<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label>Username</label>
        <input type="text" name="username"><br><br>
        <label>Age</label>
        <input type="text" name="age"><br><br>
        <label>Email</label>
        <input type="text" name="email"><br><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
$username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
echo $username;

$age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
echo "<br>".$age;

$email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
echo "<br>".$email;
?>