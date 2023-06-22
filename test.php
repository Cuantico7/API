<?php

//echo "Hola mundo Bienvenidos ADSO! / PMOV1";

require_once "bd/mysql.php";

require_once "modelo/usuariosModelo.php";

/*
$c = new mysql();
$c->conectar();
print_r("<pre>");
print_r($c);
*/

$u = new usuariosModelo();

$misDatos = $u->getAllUsuarios();

print_r("<pre>");
print_r($misDatos);

$resultado = $u->getById(3);

print_r("<pre>");
print_r($resultado);
