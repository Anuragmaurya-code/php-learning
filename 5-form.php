<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>quantity</label>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>
    
</body>
</html>
<?php
    $item="pizza";
    $price=9.4;
    $quantity=$_GET['quantity'];
    $total=null;

    $total=$quantity*$price;
    echo "You have ordered {$quantity} x {$item}<br>";

    echo "your total is: \${$total}";
?>