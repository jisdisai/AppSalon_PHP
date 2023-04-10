<?php

function obtenerServicios(): array
{

    try {
        //importar una conexion
        require 'includes/database.php';

        //codigo sql

        $consulta = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $consulta);

        //Obtener los resultados
        // echo "<pre>";
        // var_dump(mysqli_fetch_assoc($consulta)); // fetch_all nos retorna todo // fetch_array fetch_assoc
        // echo "</pre>";

        //arreglo Vacio
        $i = 0;
        $servicios = [];
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            $i++;
        }

        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}
