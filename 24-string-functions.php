<?php
$name="Anurag";
$name=strtolower($name);
echo "strtolower : $name <br>";
$name=strtoupper($name);
echo "strtoupper : $name <br>";
$username="     Anurag          ";
$username=trim($username);
echo "trim : $username <br>";
$username=str_pad($username,10,"0");
echo "str_pad : $username"."<br>";
$username=str_replace("A","@",$username);
echo "str_replace : $username"."<br>";
$username=strrev($username);
echo "strrev : $username <br>";
$username=str_shuffle($username);
echo "str_shuffle :  $username <br>";
echo "strcmp : ".strcmp($username,$username)."<br>";
echo "strlen : ".strlen($username)."<br>";
echo "@ position - strpos : ".strpos($username,"@")."<br>";
echo "substr : ". substr($username,0,3)."<br>";
$username_array=explode(" ","Anurag Maurya is at Mumbai");
echo"explode ";
foreach($username_array as $a){
    echo "$a<br>";
}
$username=implode("-",$username_array);
echo $username;






?>