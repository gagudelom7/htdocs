<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <form action="index.php" method="post">

    <label for="">Identificacion:</label><input type="text" name="id"><br>
    <label for="">Nombre:</label><input type="text" name="nombre"><br>
    <label for="">Apellido:</label><input type="text" name="apellido"><br>
    <label for="">direccion:</label><input type="text" name="direccion"><br>

    <input type="submit" value="enviar" name="enviar">
    <input type="submit" value="consultar" name="consultar">
    <input type="submit" value="eliminar" name="eliminar">    
</form>

<?php

 //Codgio para insertar registro en la BBDD

if(isset($_POST['enviar'])){

    include("conexion.php");

    $iden = $_POST['id'];
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
    $dir = $_POST['direccion'];

    $operacion = "insert into $tabla (id,nombre,apellido,direccion) values('$iden','$nom','$ape','$dir')";

    $resultado = mysqli_query($conexion,$operacion);

    echo "Datos insertados correctamente";

}

// Codigo para Consultar registros en la BBDD

if(isset($_POST['consultar'])){

    include("conexion.php");

    $iden = $_POST['id'];
    if($iden==''){
        echo "El campo ID No puede estar vacio";
        echo "<br>";
    }
    else
    {
        $operacion = "select * from $tabla where id = $iden";
        $resultado = mysqli_query($conexion,$operacion);

        while($fila = mysqli_fetch_array($resultado)){

            echo "

                    <br>
                    <table border='1'>
                    
                    <tr>
                    <td>".$fila['nombre']."</td>
                    <td>".$fila['apellido']."</td>
                    <td>".$fila['direccion']."</td>

                    </tr>
                    </table>
                    ";

        }
    }
}

//Eliminar registro de la BBDD
// Isset es una funcion PHP para validar si una variable esta definida

if(isset($_POST['eliminar'])){

    include("conexion.php");

    $iden = $_POST['id'];
    if($iden==''){
        echo "El campo ID No puede estar vacio";
        echo "<br>";
    }
    else
    {
        $operacion = "delete from $tabla where id = $iden";

        //Para ejecutar la operacion en la BBDD

        $resultado = mysqli_query($conexion,$operacion);
    }

    echo"EL proceso de eliminacion fue correcto";

    echo"<br>";
}

?>

</body>
</html>