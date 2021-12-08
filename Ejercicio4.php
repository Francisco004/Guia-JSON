<?php

    $datos = file_get_contents("php://input");
    var_dump($datos);

    $object = json_decode($datos, true);
    var_dump($object);

    $object2 = json_encode($datos, true);
    var_dump($object2);

?>