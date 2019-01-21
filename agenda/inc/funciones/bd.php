<?php

// credenciales de la base de datos
$servidor = "127.0.0.1";
$bd = "dump.sql";
$usuario = "root";
$password = "";

$conn = new mysqli($servidor,$usuario,$password,$bd);

/*if($conn->connect_errno)
{
    echo "no conecto";
    echo  $conn->connect_error;
}
else
{
    echo "conecto";
}*/
