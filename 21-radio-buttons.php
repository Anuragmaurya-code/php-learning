<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="21-radio-buttons.php" method="post">
        <input type="radio" name="credit_card" value="visa">Visa<br>
        <input type="radio" name="credit_card" value="Master card">Master card<br>
        <input type="radio" name="credit_card" value="American Express">Americal Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>

</body>

</html>
<?php
// if (isset($_POST["confirm"])) {
//     if (isset($_POST["credit_card"])) {
//         $credit_card = $_POST["credit_card"];
//         echo "you selected {$credit_card}";
//     }
//     else{
//         echo"Please, select an option";
//     }
// }
if(isset($_POST['confirm'])){
    $credit_card=null;
if(isset($_POST['credit_card'])){
    $credit_card=$_POST['credit_card'];
}
switch ($credit_card){
    case 'visa':
        echo "You selected Vise card";
        break;
    case 'Master card':
        echo "You selected Master card";
        break;
    case 'American Express':
        echo "You selected American Express card";
        break;
    default:
        echo "select a carrd";
}

}

?>