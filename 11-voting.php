<?php
$age=30;
$citizen=true;
// if($age>=18 && $citizen){
//     echo"you are a citizen";
// }

if($age!=18 || !$citizen){
    echo"you can't vote";
}else{
    echo"you can vote";
}
?>