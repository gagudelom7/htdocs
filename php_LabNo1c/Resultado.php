<html>
<head>
<title>Quetelet</title>
</head>
<body>
<p>RESULTADOS</p>

<?php 

$TxtNombre= $_POST ["TxtNombre"];
$TxtPeso= $_POST ["TxtPeso"];
$TxtEstaturaMetros= $_POST ["TxtEstaturaMetros"];


echo "El Nombre del Paciente es: " .$TxtNombre."<br>";
echo "El peso es de: " .$TxtPeso."<br>";
echo "La estatura es de: " .$TxtEstaturaMetros."<br>";

$imc=$TxtPeso/($TxtEstaturaMetros*$TxtEstaturaMetros);

echo "el índice de masa corporal es : " .round($imc, 2)."<br>";

if($imc<=18.5){
    echo "Se encuentra por debajo del Peso";
}elseif($imc<=24.9){
    echo "Es Saludable";
}elseif($imc<=29.9){
    echo "Tiene Sobrepeso";
}elseif($imc<=39.9){
    echo "Esta Obeso";
}else{
    echo "Tiene Obesidad Morbida";
}
?>

<br><br>
<a href="index.html"><input type="button" value="Volver"></a>

</html>
</head>