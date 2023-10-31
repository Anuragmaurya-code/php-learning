<?php
// isset() = returns TRUE if a variable is declared and not null
// empty() = return TRUE if a variable is not declared,false,null,""
$username=false;
if(isset($username)){
    echo "var set";
}else{
    echo "not set";
}
echo"<br>";
if(empty($username)){
    echo "empty var";
}
else{
    echo "not empty var";
}



?>