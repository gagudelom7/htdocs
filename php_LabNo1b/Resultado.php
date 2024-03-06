<html>
<head>
<title>Vendedor Automoviles</title>
</head>
<body>
<p>RESULTADOS</p>

<?php 

$TxtNombre= $_POST ["TxtNombre"];
$TxtCantidad= $_POST ["TxtCantidad"];
$TxtPrecioTotal= $_POST ["TxtPrecioTotal"];


echo "El Nombre del vendedor es: " .$TxtNombre."<br>";
echo "La cantidad de automoviles vendidos fue: " .$TxtCantidad."<br>";
echo "El precio total de automoviles vendidos fue: " .$TxtPrecioTotal."<br>";

$salarioBasico=737000;
$comision=$TxtCantidad*50000;
$porcentajeVenta=($TxtCantidad*$TxtPrecioTotal)*0.05;

$salarioFinal=$salarioBasico+$comision+$porcentajeVenta;

?>

&nbsp; El salario fue de: &nbsp; <?php  echo $salarioFinal ?>
<br><br>
<a href="index.html"><input type="button" value="Volver"></a>

</html>
</head>