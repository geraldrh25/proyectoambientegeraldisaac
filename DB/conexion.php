<?php

function Conecta()
{
    $base = new PDO("mysql:host=localhost:3306; dbname=db_restaurantes", "root", "soraraper1");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    return $base;
}

function Desconecta($conexion)
{
    mysqli_close($conexion);
}