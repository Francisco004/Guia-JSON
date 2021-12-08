<?php

    $ejercicio5 = new stdClass();
    $ejercicio5->CodigoDeBarras[0] = 654646546;
    $ejercicio5->Nombre[0] = "Leche";
    $ejercicio5->Precio[0] = 100;

    $ejercicio5->CodigoDeBarras[1] = 444444444;
    $ejercicio5->Nombre[1] = "Pan";
    $ejercicio5->Precio[1] = 40;

    $ejercicio5->CodigoDeBarras[2] = 555555555;
    $ejercicio5->Nombre[2] = "Fideos";
    $ejercicio5->Precio[2] = 80;

    $objJson = json_encode($ejercicio5);
    echo $objJson;
?>