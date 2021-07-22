<?php

namespace Source\api;
use \Source\api2\switchs\Swtadministrador;
use \Source\api\Sql;
use Source\api\switchs\Swtadministrador as SwitchsSwtadministrador;

Class Session Extends Sql {

    public function SelectController($action, $values) {
     
        $cmd = "SELECT nivel_acesso FROM `users` WHERE id_users = ?";
        $response = Sql::line($cmd, [$_SESSION['user'][0]['id_users']]);


        if (($response['nivel_acesso'] == 1) || ($response['nivel_acesso'] == 4)) {
            
           

        } else if ($response['nivel_acesso'] == 2) {

             return SwitchsSwtadministrador::switch($action, $values);
            
        } else if ($response['nivel_acesso'] == 3){

            // return Swtclient::switch($action, $values);

        }
    }
}
