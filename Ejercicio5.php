<?php

    $ejercicio5 = new stdClass();
    $ejercicio5->CodigoDeBarras = 654646546;
    $ejercicio5->Nombre = "Leche";
    $ejercicio5->Precio = 100;

    $objJson = json_encode($ejercicio5);
    echo $objJson;
?>