<?php

namespace Source\api2;
use \Source\Database\Connect;
use \Source\api2\Sql;

Class PersonalClass extends Sql
{
    public static function GetTreino($array){
        $cmd = "SELECT * FROM `treino`";
        return SQL::use($cmd, $array);
    }

    public static function GetSubTreino($array){
        $cmd = "SELECT * FROM sub_treino WHERE id_treino_fk = ?";
        return SQL::use($cmd, $array);
    }

    public static function GetClients($array){
        $cmd ="SELECT * FROM `login_academia` WHERE nivel_acesso_fk = 3 AND tem_treino != 'SIM' AND fk_login_loja = ?";
        return SQL::use($cmd, $array);
    }


    public static function CadastroTreinoCliente($array){
        $cmd = "INSERT INTO `pessoa_treino` (`id_pessoa_treino`, `id_login_fk`, `id_subtreino_fk`, `series`, `repeticoes`, `carga`, `sequencia`, `aparel`,`fk_login_pessoatreino_loja`)
         VALUES (NULL, ? , ? , ? , ?, ?, ?, '-', ?)";
        
        $id_usuario = $array[0];
        $series = $array[1];
        $id_subtreino_fk = $array[2];
        $repeticoes = $array[3];
        $cargas = $array[4];
        $sequencia = $array[5];
        $id_loja_fk = $array[6];
        // var_dump($id_loja_fk);

        $explodeSeries = explode("///", $series);
        $explodeIdSubTreinoFk = explode("///", $id_subtreino_fk);
        $explodeRepeticoes = explode("///", $repeticoes);
        $explodeCargas = explode("///", $cargas);
        $explodeSequencias = explode("///", $sequencia);
        $sizeArray = count($explodeIdSubTreinoFk)-1;
        
        // var_dump($explodeSeries);

        for($i = 0; $i < $sizeArray; $i++){
          
      
        $array[$i] = [$id_usuario, $explodeIdSubTreinoFk[$i], $explodeSeries[$i], $explodeRepeticoes[$i], $explodeCargas[$i], $explodeSequencias[$i], $id_loja_fk];
       
        $pdo = Connect::getInstance();
        $stmt = $pdo->prepare($cmd);
    
        @$stmt->execute($array[$i]);

            

            // return SQL::insert($cmd, [15,1,10]);
        }

        $cmd2 = "UPDATE `login_academia` SET `tem_treino` = 'SIM' WHERE `login_academia`.`id_login_academia` = ?";
        return SQL::insert($cmd2,[$id_usuario]);

    }

    public static function MostrarClientesComTreino($array){
        $cmd = "SELECT id_login_academia, nome, data_nascimento,idade,inicio,reavaliacao,objetivos FROM `login_academia` WHERE nivel_acesso_fk = 3 AND tem_treino != 'NAO' AND fk_login_loja = ?";
        return SQL::use($cmd, $array);

    }

    public static function DeletarTreinosCliente($array){
        $a = "";
        $cmd = "DELETE FROM `pessoa_treino` WHERE `pessoa_treino`.`id_login_fk` = ?";
        $cmd2 = "UPDATE `login_academia` SET `tem_treino` = 'NAO' WHERE `login_academia`.`id_login_academia` = ?";
        $a = SQL::insert($cmd2, $array); // dar update    
        return SQL::delete($cmd, $array) . $a; // deletar
           
    }


}