<?php

$filter ="Evo";
$thisArray = scandir("images/proyectos");

foreach($thisArray as $item){
    echo "<p>$item</p>";

    $result = stripos($item,$filter);
    
    if($result !==false){
        echo "<b>$result</b>";   
    }
}







?>