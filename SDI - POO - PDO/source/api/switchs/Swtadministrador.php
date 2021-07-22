<?php

namespace Source\api\switchs;

use Source\api\Session;
use \Source\api\classes\AdministradorClass;
use Source\api\Sql;

class Swtadministrador{
    public function switch($action, $values){
        switch($action){

            // chama todoas as disciplinas
            case"get-disciplinas":
                array_push($values,Sql::schoolUser());
                echo json_encode(AdministradorClass::getDisciplinas($values));
            break; 
            // cadastra uma nova disciplina
            case"cadastrar-disciplinas":
                array_push($values,Sql::schoolUser());
                echo json_encode(AdministradorClass::cadastrarDisciplinas($values));
            break; 
            // exclui uma disciplina
            case"deletar-disciplina":
                echo json_encode(AdministradorClass::deletarDisciplina($values));
            break;
            //chama apenas uma disciplina para edição
            case"get-one-disciplina":
                echo json_encode(AdministradorClass::getOneDisciplina($values));
            break;

            //atualiza
            case"update-disciplina":
                echo json_encode(AdministradorClass::updateDisciplina($values));
            break;
            
            

            
           
        }
    }
}