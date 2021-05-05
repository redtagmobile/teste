<?php

require __DIR__ .'/../../vendor/autoload.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$login = new \Source\Models\Login();
$login->setEmail($email);
$login->setSenha(md5($senha));

$controllerLogin = new \Source\Controllers\FazerLogin();
$controllerLogin->Logar($login);