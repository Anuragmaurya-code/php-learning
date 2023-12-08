<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        username:
        <input type="text" name="username">
        <input type="submit" name="login">
    </form>
    
</body>
</html>
<?php
// foreach($_SERVER as $key=>$value){
//     echo "{$key} = {$value}<br>";
// }

// htmlspecialchars($_SERVER["PHP_SELF"]) it is basically used to get the self file or the current file
// htmlspecialchars is used to prevent some malicious injection

    // if (isset($_POST["login"])){
    //     echo "submited";
    // }

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        echo "hello";
    }
    elseif($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "world";
    }

?>
