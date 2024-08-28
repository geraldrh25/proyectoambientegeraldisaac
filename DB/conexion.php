<?php

function Conecta()
{
    $base = new PDO("mysql:host=localhost:3309; dbname=miercoles_bd", "root", ""); //OJO CAMBIAR PUERTO EN "mysql:host=localhost:3309;" DEBIDO A QUE EL PUERTO UTILIZADO POR MI PERSONA ES DIFERENTE
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $base->exec("USE db_restaurantes");  

    return $base;
}

function Desconecta($conexion)
{
    mysqli_close($conexion);
}