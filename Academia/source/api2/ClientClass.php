<?php

namespace Source\api2;
use \Source\api2\Sql;

Class ClientClass extends Sql
{
    public static function GetTreino($array){
        $cmd = "SELECT DISTINCT treino.id_treino, treino.nome as treino_nome
        FROM `pessoa_treino` 
        INNER JOIN sub_treino ON sub_treino.id_sub_treino = pessoa_treino.id_subtreino_fk
        INNER JOIN login_academia ON login_academia.id_login_academia = pessoa_treino.id_login_fk
        INNER JOIN treino ON treino.id_treino = sub_treino.id_treino_fk
        WHERE pessoa_treino.id_login_fk = ?";

        return SQL::use($cmd, $array);

        // return SQL::use($cmd, $array);
    }

    public static function GetSubTreino($array){
        $cmd = "SELECT treino.id_treino,
        sub_treino.nome,
        pessoa_treino.series,
        pessoa_treino.repeticoes,
        pessoa_treino.carga,
        pessoa_treino.sequencia
                FROM `pessoa_treino` 
                INNER JOIN sub_treino ON sub_treino.id_sub_treino = pessoa_treino.id_subtreino_fk
                INNER JOIN login_academia ON login_academia.id_login_academia = pessoa_treino.id_login_fk
                INNER JOIN treino ON treino.id_treino = sub_treino.id_treino_fk
                WHERE pessoa_treino.id_login_fk = ? AND sub_treino.id_treino_fk = ?";
        return SQL::use($cmd, $array);
    }
}