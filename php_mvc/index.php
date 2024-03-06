<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

require_once 'view/html/plantilla.php';

require_once 'controller/Controlador.php';
require_once 'Model/GestorCita.php';
require_once 'Model/Cita.php';
require_once 'Model/Paciente.php';
require_once 'Model/Conexion.php';

$controlador = new Controlador();

if( isset($_GET["accion"])){
    if($_GET["accion"] == "asignar"){
        $controlador->verPagina('view/html/asignar.php');
    }
    if($_GET["accion"] == "consultar"){
        $controlador->verPagina('view/html/consultar.php');
    }
    if($_GET["accion"] == "cancelar"){
        $controlador->verPagina('view/html/cancelar.php');
    }
    elseif($_GET["accion"] == "agregarCita"){
        $controlador->agregarCita($_POST["asignarDocumento"],
        $_POST["medico"], $_POST["fecha"], $_POST["hora"],
        $_POST["consultorio"]);
        }
    } else {
        $controlador->verPagina('view/html/inicio.php');
    }


?>

</body>
</html>