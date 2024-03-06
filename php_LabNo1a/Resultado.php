
<html>
<head>
<title>Ejercicio Nota final</title>
</head>
<body>
<p>RESULTADOS</p>

<?php echo $_POST ['TxtNombre'];
$nota1= $_POST ["TxtParcial1"];
$nota2= $_POST ["TxtParcial2"];
$nota3= $_POST ["TxtParcial3"];
$nota4= $_POST ["TxtExamen"];
$nota5= $_POST ["TxtTrabajo"];
$Def1=(($nota1+$nota2+$nota3)/3)*1.35;
$Def2=$nota4*1.35;
$Def3=$nota5*1.30;
$DefTotal=($Def1+$Def2+$Def3)/3;
if ($DefTotal>=3)
{
 $mensaje = "APROBADO";
}
else
{
 $mensaje="REPROBADO";
}
?>
&nbsp; SU DEFINITIVA ES: &nbsp; <?php  echo round($DefTotal, 2), " - ", $mensaje ?>
<br><br>
<a href="index.html"><input type="button" value="Volver"></a>

</html>
</head>