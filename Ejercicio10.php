<?php
    if($_POST["opcion"] == "Traer Ciudades")
    {
        $string = file_get_contents("./city.list.min.json");
        $decodeo = json_decode($string, true);
    }
    else
    {
       header("Location: ./Ejercicio10.html");
    }
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
    <th>Name</th>
    <th>Country</th>
    <th>Cord Longitud</th>
    <th>Cord Latitud</th>
  </tr>
  
      <?php
        for($i = 0; $i < count($decodeo); $i++)
        {
            echo "<tr>";
            echo "<td>".$decodeo[$i]["_id"]."</td>";
            echo "<td>".$decodeo[$i]["name"]."</td>";
            echo "<td>".$decodeo[$i]["country"]."</td>";
            echo "<td>".$decodeo[$i]["coord"]["lon"]."</td>";
            echo "<td>".$decodeo[$i]["coord"]["lat"]."</td>";
            echo "</tr>";
        }
      ?>
</body>
</html>