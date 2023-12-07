<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <form action="18-associated-array.php" method="post">
        <label>Enter country</label>
        <input type="text" name="capital_name">
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
$capitals = array(
    'USA' => "Washing ton DC",
    "India" => "New Delhi",
    "Japan" => "Seoul",
);
foreach($capitals as $key=>$value){
    echo"{$key} = {$value}<br>";
}
echo $capitals[$_POST['capital_name']]
?>