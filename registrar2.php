<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
    $nom=$_POST['nombre'];
    $ape=$_POST['fechahecho'];
    $nomp=$_POST['nombrepadres'];
    $dui=$_POST['dui'];
    $observacioneS=$_POST['observaciones'];
    $solicitudP = isset($_POST["solicitud"]) ? $_POST["solicitud"] : array();
    $otroS = isset($_POST["otros"]) ? $_POST["otros"] : array();
    $solicitudP_str = implode(", ", $solicitudP);
    $otroS_str = implode(", ", $otroS);
    /*if (isset($_POST["solicitud"])) {
        $solicitudP = $_POST["solicitud"];
            // Resto del código aquí
    } else {
        $solicitudP = "";
    }
    if (isset($_POST["otros"])) {
        $otroS = $_POST["otros"];
            // Resto del código aquí
    } else {
        $otroS = "";
    }

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h4>Hemos conectado al servidor</h45</b>" ;
        }*/
        //indicamos el nombre de la base datos
        $datab = "reff";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;

        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos 
        $instruccion_SQL = "INSERT INTO datos (nombre, fechahecho, nombrepadres, dui, solicitud, otros, observaciones)       
                             VALUES ('$nom','$ape','$nomp','$dui','$solicitudP_str','$otroS_str','$observacioneS')";
                                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        $consulta = "SELECT * FROM datos ";//nombre de la tabla a consultar
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h5>id</th></h5>";
echo "<th><h5>Nombre</th></h5>";
echo "<th><h5>Fecha del hecho</th></h5>";
echo "<th><h5>Nombre de los padres</th></h5>";
echo "<th><h5>DUI</th></h5>";
echo "<th><h5>Solicitud de partida</th></h5>";
echo "<th><h5>Otros</th></h5>";
echo "<th><h5>Observaciones</th></h5>";
echo "</tr>";
while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";    
    echo "<td><h6>" . $colum['id']. "</td></h6>";
    echo "<td><h6>" . $colum['nombre']. "</td></h6>";
    echo "<td><h6>" . $colum['fechahecho']. "</td></h6>";    
    echo "<td><h6>" . $colum['nombrepadres']. "</td></h6>";
    echo "<td><h6>" . $colum['dui']. "</td></h6>";
    echo "<td><h6>" . $colum['solicitud'] . "</td></h6>";
    echo "<td><h6>" . $colum['otros'] . "</td></h6>";    
    echo "<td><h6>" . $colum['observaciones'] . "</td></h6>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <title>consulta db</title>
    <style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>
</body>
</html>




