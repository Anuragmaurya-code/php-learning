
<?php
$db_server="localhost";// server name or host name
$db_user="root";
$db_pass="root";
$db_name="business_db";
$conn="";
try{
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);

}catch(mysqli_sql_exception){
    echo"could no connected";

}

?>