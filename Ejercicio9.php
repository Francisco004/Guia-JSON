<?php

    $string = file_get_contents("./autos.json");
    $decodeo = json_decode($string, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td 
    {
        padding-inline: 50px;
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
        
    }

  
    </style>
</head>
<body>
<table align="center">
<tr>
    <th>ID</th>
    <th>Marca</th>
    <th>Precio</th>
    <th>Color</th>
    <th>Modelo</th>
  </tr>
  
      <?php
        for($i = 0; $i < count($decodeo); $i++)
        {
            echo "<tr>";
            echo "<td>".$decodeo[$i]["Id"]."</td>";
            echo "<td>".$decodeo[$i]["Marca"]."</td>";
            echo "<td>".$decodeo[$i]["Precio"]."</td>";
            echo "<td>".$decodeo[$i]["Color"]."</td>";
            echo "<td>".$decodeo[$i]["Modelo"]."</td>";
            echo "</tr>";
        }
      ?>
</body>
</html>