<?php
// mysqli extention
// pdo (php data objects)
include("database.php");
$sql="insert into users(user,password) values('rounak','pass123')";


try{
    mysqli_query($conn,$sql);
    echo"user registered";
}catch(mysqli_sql_exception){
    echo"could not register ";
}

mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>