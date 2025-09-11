<?php
//Készíts egy fgv-t ami átvesz egy string tömböt és visszadja nagybetűsként
function capitalizAll(array $names): array{
/*    $tempArray=[];
    foreach ($names as $name) 
    {
        $tempArray[]=mb_strtoupper($name);
    }
    return $tempArray;*/
    return array_map("mb_strtoupper",$names);
}

$names=["Pista","Jóska","Éva"];
$capitalizedNames=capitalizAll($names);
print_r($capitalizedNames);
?>