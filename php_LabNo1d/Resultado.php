<html>
<head>
<title>Banco Cuota</title>
</head>
<body>
<p>RESULTADOS</p>

<?php 

$TxtCedula=$_POST ["TxtCedula"];
$TxtNombre= $_POST ["TxtNombre"];
$TxtMontoCredito= $_POST ["TxtMontoCredito"];
$TxtTasaInteresMensual= $_POST ["TxtTasaInteresMensual"];
$TxtPlazoMeses= $_POST ["TxtPlazoMeses"];

$TxtAbonoInteres=$_POST ["TxtAbonoInteres"];

echo "La Cedula del Cliente es: " .$TxtCedula."<br>";
echo "El Nombre del Cliente es: " .$TxtNombre."<br>";
echo "El Monto Solicitado de Credito es: " .$TxtMontoCredito."<br>";
echo "La Tasa de Interes es de: " .$TxtTasaInteresMensual."<br>";
echo "El plazo de meses es de: " .$TxtPlazoMeses."<br>";
echo "<br>";
echo "<br>";

$cuotaFija=($TxtMontoCredito*(0.02*pow(1+0.02,3)))/(pow(1+0.02,3)-1);

$abonoCapital=$TxtAbonoInteres;

$restante=$cuotaFija-$abonoCapital;
$subSaldo=$TxtMontoCredito-$restante;
$nuevoSaldo=$subSaldo-$abonoCapital;
//echo "el Valor de la Cuota fija en el Credito es : " .round($cuotaFija, 2)."<br>";

echo "<td> " . $TxtCedula . "</td>";
echo "<br>";
echo "<td> " . $TxtNombre . "</td>";
echo "<br>";

echo "<table border='1'>";
echo "<tr>";

echo "  <th> Monto Credito </th>";
echo "  <th> V. Cuota Fija </th>";
echo "  <th> Abono Interes </th>";
echo "  <th> Abono Capital </th>";
echo "  <th> Nuevo Saldo </th>";
echo "</tr>";
echo "<tr>";

echo "<td> " . $TxtMontoCredito . "</td>";
echo "<td> " . round($cuotaFija, 2) . "</td>";
echo "<td> " . $TxtAbonoInteres . "</td>";
echo "<td> " . $abonoCapital . "</td>";
echo "<td> " . round($nuevoSaldo, 2) . "</td>";
echo "</tr>";
echo "</table>";


?>

<br><br>
<a href="index.html"><input type="button" value="Volver"></a>

</html>
</head>