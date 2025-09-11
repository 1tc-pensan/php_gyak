<?php
/*
fgv def paraméterek,visszatérisiérték
*/
function sum(int $a,int $b){
return $a+$b;
}
$s1=sum(5,4);
echo "{$s1} <br>";
echo sum("1","2");
echo "<br>";
function sayHello($name="Guest")
{
    return "Hello {$name}";
}
echo sayHello("anyad");
?>