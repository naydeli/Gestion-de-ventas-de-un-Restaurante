<?php
$servidor = "localhost";
$usuario = "";
$password ="";
$bd = "informatica";
$conecta =mysqli_cannect($servidor, $usuario, $password, $bd);
if($conecta->connet_error){
    die("Error al conectar la base de datos de la pagina".$conecta->connet_error);
}
?>