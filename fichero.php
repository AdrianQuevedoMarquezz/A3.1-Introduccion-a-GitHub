<?php

// Ejercicio 1:
// Crear un array indexado llamado "nombres" que almacene los nombres completos de cinco compañeros de clase.
$nombres = array("Hugo Padilla", "Doramas Estévanez", "Néstor Llop", "Sofía Vega", "Aarón González");

// Imprimir cada nombre en la pantalla utilizando un bucle "while". Haz lo mismo utilizando un bucle "foreach".
// BUCLE CON WHILE
$i = 0;
while ($i < count($nombres)){
    echo $nombres[$i]."\n";
    $i++;
}

// BUCLE CON FOREACH
foreach ($nombres as $nombre){
    echo $nombres."\n";
    $i++;
}

?>