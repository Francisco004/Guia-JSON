<?php

    $string = file_get_contents("./auto.json");
    $decodeo = json_decode($string, true);
    $objJson = json_encode($decodeo, true);
    echo $objJson;

?>