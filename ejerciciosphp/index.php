<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    
    <form action="index.php" method="POST">
    
    <label for="">Identificacion</label><input type="'text'" name="id">
    <br>
    <label for="">Nombre</label><input type="'text'" name="nombre">
    <br>
    <label for="">Apellido</label><input type="'text'" name="apellido">
    <br>
    <label for="">Email</label><input type="'text'" name="email">
    <br>
    <input type="submit" value="enviar" name="enviar">
    
    </form>

    <?php

    if(isset($_POST['enviar'])){

        include("conexion.php");

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

        $operacion = "insert into $tabla (id,nombre,apellido,email) values ('$id',' $nombre','$apellido','$email')";

        $resultado = mysqli_query($conexion, $operacion);

        echo "Datos insertados correctamente";
    }

    ?>

</body>
</html>