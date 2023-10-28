<?php
    $name="Anurag";// string
    $last="Maurya";
    $email="fake@gmail.com";

    $age=21; // integer

    $gpa=9.1;// float
    $money=1.2;

    $employed=true; // boolean
    $online=false; 

    echo "Hello {$name} {$last}";
    echo "<br> Email is {$email}";
    echo "<br> age is {$age}";
    echo "<br> gpa is {$gpa}";
    echo"<br> I have \${$money}";// \$ is an escape sequence
    echo"<br> Employee status : {$employed}";
    echo"<br> Online status : {$online}";

    $quantity=3;
    $food='Pizza';
    $total=null;
    $price=9.1;

    echo"You have ordered {$quantity} X {$food}s <br>";

    $total=$price*$quantity;

    echo"Your total is: \${$total}";




?>