<?php

namespace Source\api2;
use \Source\api2\Swtadmin;
// use \Source\api2\PersonalClass;
// use \Source\api2\ClientClass;

Class Session Extends Sql {

    public function SelectController($action, $values) {
        // session_start(); // não precisa estartar pois no controller já foi estartada
        $cmd = "SELECT nivel_acesso_fk FROM `login_academia` WHERE id_login_academia=?";
        $response = Sql::line($cmd, [$_SESSION['user'][0]['id_login_academia']]);
        if ($response['nivel_acesso_fk'] == 1) {
            
            return Swtadmin::switch($action, $values);

        } else if ($response['nivel_acesso_fk'] == 2) {

            return Swtpersonal::switch($action, $values);
            
        } else if ($response['nivel_acesso_fk'] == 3){

            return Swtclient::switch($action, $values);

        }
    }
}
