<?php

namespace Source\api2;
use \Source\api2\AdminClass;
use \Source\api2\PersonalClass;

class Swtadmin{
    public function switch($action, $value){
        switch($action){
            case "mostrar":
                echo json_encode(AdminClass::Read($value));
            break;

            case "mostrar-personal":
                echo json_encode(AdminClass::ReadPersonal($value));
            break;

            case "create-personal":
                echo json_encode(AdminClass::CreatePersonal($value));
            break;
            
            case "delet-personal":
                echo json_encode(AdminClass::DeletUser($value));
            break;

            case "get-one-personal":
                echo json_encode(AdminClass::GetOnePersonal($value));
            break;

            case "update-personal":
                echo json_encode(AdminClass::UpdatePersonal($value));
            break;

            case "mostrar-clientes":
                echo json_encode(AdminClass::MostrarClientes($value));
            break;

            case "create-client":
                echo json_encode(AdminClass::CriarClientes($value));
            break;

            case "delet-client":
                echo json_encode(AdminClass::DeletarCliente($value));
            break;

            case "get-one-client":
                echo json_encode(AdminClass::GetOneClient($value));
            break;

            case "update-client":
                echo json_encode(AdminClass::UpdateClient($value));
            break;
            
                // para pegar aparecer a ficha de treino na nivel de acesso adm
            case "get-treino-all":
                echo json_encode(PersonalClass::GetTreino($value));
            break;

            case "get-sub-treino-all":
                echo json_encode(PersonalClass::GetSubTreino($value));
            break;

                
            case "get-clients":
                echo json_encode(AdminClass::GetClients($value));
            break;

            case "get-treino":
                echo json_encode(ClientClass::GetTreino($value));
            break;
            
            case "get-sub-treino":
                echo json_encode(ClientClass::GetSubTreino($value));
            break;


            case "total-clientes":
                echo json_encode(AdminClass::TotalClientes($value));
            break;

            case "total-personal":
                echo json_encode(AdminClass::TotalPersonal($value));
            break;

        }
    }
}
