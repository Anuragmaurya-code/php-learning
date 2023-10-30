<?php
$child=false;
$senior=false;
$ticket=null;
if($child || $senior){
    $ticket=10;
}
else{
    $ticket=15;
}
echo"<br>ticket price is \${$ticket}";

?>