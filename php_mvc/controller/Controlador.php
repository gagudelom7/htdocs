<?php
class Controlador {
public function verPagina($ruta){
require_once $ruta;
}

public function agregarCita($num,$med,$fec,$hor,$con){
    $cita = new Cita(null, $fec, $hor, $num, $med, $con, "Solicitada",
    "Ninguna");
    $gestorCita = new GestorCita();
    $gestorCita->agregarCita($cita);
    }

}

?>