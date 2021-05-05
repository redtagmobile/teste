<?php

namespace Source\api2;
use \Source\api2\AdminClass;

class Swtclient{
    public function switch($action, $value){
        switch($action){
            case "get-treino":
                echo json_encode(ClientClass::GetTreino($value));
            break;

            case"get-sub-treino":
                echo json_encode(ClientClass::GetSubTreino($value));
            break;
        }
    }
}