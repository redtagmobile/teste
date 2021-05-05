<?php

use Source\Database\Connect;

$data = json_decode(file_get_contents('php://input'), true);

$action = $data['action']; // mostrar 
$values= $data['values']; // [(manda/ou vem sei la) um array] aqui ele ta recebendo um array vazio

include "classes/database.class.php";
include "classes/pessoa.class.php";
include "classes/pessoa.switch.php";


?>
