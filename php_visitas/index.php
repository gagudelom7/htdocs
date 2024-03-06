<?php

//SESSION son variables globales que me permiten capturar informacion de usuario
//Definimos inicio de sesion
session_start();

//Verificamos que la variable contador exista
if(isset($_SESSION['contador'])){

    //Incrementa el contador en 1
    $_SESSION['contador']++; 

}else{

    //Si la variable no existe, Crea la variable y le asigna 1
    $_SESSION['contador']=1;
}

    echo"tiene ".$_SESSION['contador']." ingresos al sistema";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>