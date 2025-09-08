<?php 
/*
1.if else elseif
2.switch
3.Ciklusok for,while
4.Ternary operator
5.Tömbök (indexelt asszociat  v,tömbök tömbje)
*/ 
$number=8;
echo "a {$number} ";
if($number%2)
{
    echo "nem páros";
}
else
{
    echo "páros";
}
//1-10 ig szám
for ($i=1; $i < 11; $i++) 
{ 
    echo "<br>$i";
}
//hozz létre egy indexelt tömböt 5 gyüm névvel.
$fruits =["apple","apricot","banana","orange","plum",];
$things=array("this","that");
for ($i=0; $i <count($fruits) ; $i++) 
{ 
    echo "<br>$fruits[$i]";
}
//hozz létre user t. kor névvel
$users=
[
    "Kiss Pista" =>20,
    "Nagy István" =>32,
    "Lakatos Kolompár" =>16
];
foreach ($users as $name => $age) 
{
    echo "<br>$name $age";
}
$students=
[
    ["name" => "Kovács Jözsi","age" => 21],
    ["name" => "Nagy Pista","age" => 31],
    ["name" => "Lakatos Armando","age" =>16]
];
echo "<br>";
foreach ($students as $student) 
{
    echo "<br>$student[name] $student[age]";
}
//hf : users tömb ami majd lehetővé teszi az authentikációt forechhel írd ki
?>