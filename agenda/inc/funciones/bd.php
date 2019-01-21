<?php

// credenciales de la base de datos
$servidor = "localhost";
$bd = "dump";
$usuario = "root";
$password = "";

$conn = new mysqli($servidor,$usuario,$password,$bd);

//if($conn->connect_errno)
//{
//    echo "no conecto";
//}
//else
//{
//    echo "conecto";
//}
