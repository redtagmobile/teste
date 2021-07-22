<?php

namespace Source\api\classes;

use Source\api\Session;
use \Source\api\Sql;

class AdministradorClass
{
    /**
     * Função resposnavel por retornar as disciplinas separadas por escola
     * @return disciplinas reference id_school from schools
     */
    public static function getDisciplinas($array)
    {
        $cmd = "SELECT * FROM `disciplina` WHERE disciplina.id_school_fk = ?";
        return SQL::use($cmd, $array);
    }

    public static function cadastrarDisciplinas($array)
    {
        $cmd = "INSERT INTO `disciplina` (`id_disciplina`, `nome`, `id_school_fk`)
        VALUES (NULL, ?, ?)";
        $response = SQL::returnInsert($cmd, $array);

        if ($response[1]) {
            return true;
        } else {
            return false;
        }
    }

    public static function deletarDisciplina($array)
    {
        $cmd = "DELETE FROM `disciplina` WHERE `disciplina`.`id_disciplina` = ?";
        
        $response = SQL::returnInsert($cmd, $array);

        if ($response[1]) {
            return true;
        } else {
            return false;
        }
    }

    public static function getOneDisciplina($array)
    {
        $cmd = "SELECT * FROM `disciplina` WHERE disciplina.id_disciplina = ?";
        return SQL::use($cmd, $array);
    }

    public static function updateDisciplina($array)
    {
        $cmd = "UPDATE `disciplina` SET `nome` = ? WHERE `disciplina`.`id_disciplina` = ?;";
        $response = SQL::returnInsert($cmd, $array);

        if ($response[1]) {
            return true;
        } else {
            return false;
        }
    }

    

}
