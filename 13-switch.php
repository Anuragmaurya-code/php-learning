<?php
$grade='E';
switch($grade){
    case 'A':
        echo"Did great";
        break;
    case 'B':
        echo"Did very good";
        break;
    case 'C':
        echo"Did good";
        break;
    case 'D':
        echo"Did Fine";
        break;
    case 'E':
        echo"Did Poor";
        break;
    case 'F':
        echo"Failed";
        break;
    default:
        echo"not valid grade";
}
?>