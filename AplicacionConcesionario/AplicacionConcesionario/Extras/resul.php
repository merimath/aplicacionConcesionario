<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect ("localhost","root","","concesionario") or die ("No se puede conectar a la base de datos");

        $opcion=$_REQUEST["consulta"];

        switch($opcion)
        {
            case 1:
                    $consulta = "SELECT * FROM propietarios WHERE Edad > 22";
                    // Envío de la consulta
                    $res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");
                    
                    // Procesamiento de los datos
                    $n_filas = mysqli_num_rows($res);
                    
                    // Generación de código HTML
                    echo "<center><h1> Propietarios mayores de 22 años</h1></center>";
                    echo "<table align=center>\n";
                    echo "<tr bgcolor=#ffffaa>
                        <th>ID Propietario</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Dirección</th>
                        </tr>\n";
                    
                    for ($i = 0; $i < $n_filas; $i++) {
                        $fila = mysqli_fetch_array($res);
                        echo "<tr>\n";
                        echo "<td>" . $fila['IdPropietario'] . "</td>\n";
                        echo "<td>" . $fila['Nombre'] . "</td>\n";
                        echo "<td>" . $fila['Edad'] . "</td>\n";
                        echo "<td>" . $fila['Direccion'] . "</td>\n";
                        echo "</tr>";
                    }
                    
                    echo "</table>";
                    mysqli_free_result($res);
                    
                    // Se cierra la conexión
                    mysqli_close($conexion);
                    break;
                 case 2:
                        $consulta = "SELECT * FROM propietarios ORDER BY Nombre ASC";
                        
                        // Envío de la consulta
                        $res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");
                    
                        // Procesamiento de los datos
                        $n_filas = mysqli_num_rows($res);
                    
                        // Generación de código HTML
                        echo "<center><h1>Propietarios ordenados alfabéticamente</h1></center>";
                        echo "<table align=center>\n";
                        echo "<tr bgcolor=#ffffaa>
                            <th>ID Propietario</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Dirección</th>
                            </tr>\n";
                    
                        for ($i = 0; $i < $n_filas; $i++) {
                            $fila = mysqli_fetch_array($res);
                            echo "<tr>\n";
                            echo "<td>" . $fila['IdPropietario'] . "</td>\n";
                            echo "<td>" . $fila['Nombre'] . "</td>\n";
                            echo "<td>" . $fila['Edad'] . "</td>\n";
                            echo "<td>" . $fila['Direccion'] . "</td>\n";
                            echo "</tr>";
                        }
                    
                        echo "</table>";
                        mysqli_free_result($res);
                    
                        // Se cierra la conexión
                        mysqli_close($conexion);
                        break;
                    case 3:
                          $consulta = "SELECT p.IdPropietario, p.Nombre, p.Edad, p.Direccion
                                         FROM propietarios p
                                         JOIN vehiculos v ON p.IdPropietario = v.IdPropietario
                                         WHERE v.Marca = 'Mercedes'";
                        
                            // Envío de la consulta
                            $res = mysqli_query($conexion, $consulta) or die("Consulta incorrecta");
                        
                            // Procesamiento de los datos
                            $n_filas = mysqli_num_rows($res);
                        
                            // Generación de código HTML
                            echo "<center><h1>Propietarios con coches de marca Mercedes</h1></center>";
                            echo "<table align=center>\n";
                            echo "<tr bgcolor=#ffffaa>
                                <th>ID Propietario</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Dirección</th>
                                </tr>\n";
                        
                            for ($i = 0; $i < $n_filas; $i++) {
                                $fila = mysqli_fetch_array($res);
                                echo "<tr>\n";
                                echo "<td>" . $fila['IdPropietario'] . "</td>\n";
                                echo "<td>" . $fila['Nombre'] . "</td>\n";
                                echo "<td>" . $fila['Edad'] . "</td>\n";
                                echo "<td>" . $fila['Direccion'] . "</td>\n";
                                echo "</tr>";
                            }
                        
                            echo "</table>";
                            mysqli_free_result($res);
                        
                            // Se cierra la conexión
                            mysqli_close($conexion);
                            break;
        }  
    ?>

    <a href="../principal.html"><center>Volver a la página principal</center></a>
    <a href="../principal.html"><center>Volver a consultas</center></a>
</body>
</html>