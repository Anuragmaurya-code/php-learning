<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value=start>
    </form>
    
</body>
</html>
<?php
$count=$_POST['counter'];
for($i=$count;$i>0;$i-=1){
echo"{$i}<br>";
}
?>