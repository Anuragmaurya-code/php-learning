<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">Taco<br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>
<?php
if(isset($_POST["submit"])){
    if(isset($_POST["Pizza"])){
    echo"You like Pizza <br>";
    }
    if(isset($_POST["Hamburger"])){
        echo"You like Hamburger <br>";
    }
    if(isset($_POST["Hotdog"])){
        echo"You like Hotdog <br>";
    }
    if(isset($_POST["Taco"])){
        echo"You like Taco <br>";
    }
    if(empty($_POST["Pizza"])){
        echo"You DONT like Pizza <br>";
    }
    if(empty($_POST["Hamburger"])){
       echo"You DONT like Hamburger <br>";
    }
    if(empty($_POST["Hotdog"])){
        echo"You DONT like Hotdog <br>";
    }
    if(empty($_POST["Taco"])){
        echo"You DONT like Taco <br>";
    }
}
if(isset($_POST['submit'])){
    $foods=$_POST['foods'];
    foreach($foods as $food){
        echo $food.'<br>';
    }
}
?>