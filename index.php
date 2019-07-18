<?php 

/* SE MANDAN A LLAMAR TODOS LOS CONTROLADORES*/
require_once "controllers/usuarios.controlador.php";
require_once "controllers/sistema.controlador.php";



/* SE MANDAN A LLAMAR TODOS LOS MODELOS*/
require_once "models/usuarios.modelo.php";

$acceder = new sistemaControlador();
$acceder -> accederGrovice();