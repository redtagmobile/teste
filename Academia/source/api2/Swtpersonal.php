<?php

namespace Source\api2;
use \Source\api2\PersonalClass;

class Swtpersonal{
    public function switch($action, $value){
        switch($action){
            case "get-treino-all":
                echo json_encode(PersonalClass::GetTreino($value));
            break;

            case "get-sub-treino-all":
                echo json_encode(PersonalClass::GetSubTreino($value));
            break;

            case "get-clients":
                echo json_encode(PersonalClass::GetClients($value));
            break;

            case "cadastro-treino-cliente":
                echo json_encode(PersonalClass::CadastroTreinoCliente($value));
            break;

            case "mostrar-clientes-com-treino":
                echo json_encode(PersonalClass::MostrarClientesComTreino($value));
            break;

            case "deletar-treinos-cliente":
                echo json_encode(PersonalClass::DeletarTreinosCliente($value));
            break;

        }
    }
} 