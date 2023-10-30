<?php
$foods=array("apple","orange","banana","coconut");
// $foods[0]="sanatara";
array_push($foods,"pinnaple");
array_pop($foods);
$foods=array_reverse($foods);
foreach($foods as $food){
    echo "{$food}<br>";
}
?>