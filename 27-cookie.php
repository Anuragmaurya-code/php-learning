<?php
setcookie("fav_food","pizza",time()-0,"/");
setcookie("fav_animal","tiger",time()+86000*4,"/");
// setcookie("fav_animal","tiger",time()-0,"/");// to delte cookie
//(string $name, $value = "", $expires_or_options = 0, $path = "")

// foreach($_COOKIE as $key=>$value){
//     echo "{$key} = {$value}<br>";
// }

if(isset($_COOKIE["fav_food"])){
    echo "Buy some {$_COOKIE["fav_food"]}";
}
else{
    echo "idk your food";
}
?>