<?php
include('./conexion/config.php');
include('./conexion/conexion.php');
include('barra.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
   
       
    
<table>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Ciudad</td>
    </tr>
    <?php
     foreach ($resultado as $equipo) {
         echo "<tr>";
         echo "<td>".$equipo['id_equipo']."</td>";
         echo "<td>".$equipo['nombre']."</td>";
         echo "<td>".$equipo['ciudad']."</td>";
         echo "</tr>";
     }
    ?>
 </table>
 </div>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>