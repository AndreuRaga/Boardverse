<?php
require_once "autoload.php";

$gestor = new GestorPDO();

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    default:
        //echo "Acción no reconocida";
        break;
}