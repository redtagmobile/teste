<?php

namespace Source\api2;
use \Source\api2\Sql;

Class AdminClass extends Sql
{
    public static function Read($array){
        $cmd = "SELECT id_treino, nome FROM `treino`";
        return SQL::use($cmd, $array);
    }

    public static function ReadPersonal($array){
        $cmd = "SELECT id_login_academia, nome FROM `login_academia` WHERE nivel_acesso_fk = 2 AND fk_login_loja = ?";
        return SQL::use($cmd, $array);
    }

    public static function CreatePersonal($array){

        $array[2] = md5($array[2]);
        $cmd = "INSERT INTO `login_academia` (`id_login_academia`, `nivel_acesso_fk`, `nome`, `email`, `senha`, `fk_login_loja`)
         VALUES (NULL, 2, ?, ?, ?, ?)";
        return SQL::insert($cmd, $array);
    } 

    public static function DeletUser($array){
        $cmd = "DELETE FROM `login_academia` WHERE `id_login_academia` = ?";
        return SQL::delete($cmd, $array);
    }

    public static function GetOnePersonal($array){
        $cmd = "SELECT id_login_academia,nome,email,senha FROM login_academia WHERE id_login_academia =?";
        return SQL::use($cmd, $array);
    }


    public static function UpdatePersonal($array){
        // var_dump($array);

        $pass = $array[2];
        $cmd = "SELECT id_login_academia, senha FROM login_academia WHERE id_login_academia = ? AND senha = ?";
        // $verific = SQL::use([$array[3],$pass]);
        $response = Sql::line($cmd, [$array[3],$pass]);


        // var_dump($pass);


        if ($response['senha'] == $pass){
          $cmd = "UPDATE `login_academia` SET `nome` = ?, `email` = ? WHERE `login_academia`.`id_login_academia` = ?";
          return SQL::insert($cmd, [$array[0],$array[1],$array[3]]);
        

 
        }else{
            $array[2] = md5($array[2]); 
           
            echo "valores diferentes"; 
            $cmd = "UPDATE `login_academia` SET `nome` = ?, `email` = ?,`senha` = ? WHERE `login_academia`.`id_login_academia` = ?";
            return SQL::insert($cmd, $array);
        }
            
        
    }

    public static function MostrarClientes($array){
        $cmd = "SELECT id_login_academia, nome, data_nascimento,idade,n_ficha,inicio,reavaliacao,objetivos FROM `login_academia` WHERE nivel_acesso_fk = 3 AND fk_login_loja = ?";
        return SQL::use($cmd, $array);
    }

    public static function CriarClientes($array){
        $array[7] = md5($array[7]); 
        $cmd = "INSERT INTO `login_academia` 
        (`id_login_academia`, `nivel_acesso_fk`, `nome`, `data_nascimento`,
         `idade`, `n_ficha`, `inicio`, `reavaliacao`, `objetivos`, `email`, `senha`,`tem_treino`,`fk_login_loja`)
        VALUES (NULL, '3', ?, ? , ? , '123', ?, ?, ?, ?, ?, 'NAO',?)";
        return SQL::insert($cmd, $array);
    }

    public static function DeletarCliente($array){

        $cmd = "SELECT COUNT(id_login_fk) as id_do_cliente_ainda FROM pessoa_treino WHERE pessoa_treino.id_login_fk = ?";
        $response = Sql::use($cmd, $array);

        if($response[0]['id_do_cliente_ainda']>0){
            $cmd = "DELETE FROM `pessoa_treino` WHERE `pessoa_treino`.`id_login_fk` = ?";
            $cmd2 = "DELETE FROM `login_academia` WHERE `id_login_academia` = ?";
            $a =  SQL::delete($cmd, $array);
            return SQL::delete($cmd2, $array).$a;
        }else{
            $cmd = "DELETE FROM `login_academia` WHERE `id_login_academia` = ?";
            return SQL::delete($cmd, $array);
        }
        
    }

            

    public static function GetOneClient($array){
        $cmd = "SELECT id_login_academia,nome,data_nascimento,idade,inicio,reavaliacao,objetivos,email, senha FROM login_academia WHERE id_login_academia =?";
        return SQL::use($cmd, $array);
    }

    public static function UpdateClient($array){
        $pass = $array[7];
        // var_dump($array);
        $cmd = "SELECT id_login_academia, senha FROM login_academia WHERE id_login_academia = ? AND senha = ?";
       
        $response = Sql::line($cmd, [$array[8],$pass]);



        if ($response['senha'] == $pass){
            // var_dump($array);
        $cmd = "UPDATE `login_academia` SET `nome` = ?, `data_nascimento` = ?, `idade` = ?, `inicio` = ?, `reavaliacao` = ?, `objetivos` = ?, `email` = ? WHERE `login_academia`.`id_login_academia` = ?";
        return SQL::insert($cmd, [$array[0],$array[1],$array[2],$array[3],$array[4],$array[5],$array[6],$array[8]]);
          
   
          }else{
            
              $array[7] = md5($array[7]); 
            //   var_dump($array);
             
              $cmd = "UPDATE `login_academia` SET `nome` = ?, `data_nascimento` = ?, `idade` = ?, `inicio` = ?, `reavaliacao` = ?, `objetivos` = ?, `email` = ?, `senha` = ? WHERE `login_academia`.`id_login_academia` = ?";
        
               return SQL::insert($cmd, $array);
          }
      
        // $cmd = "UPDATE `login_academia` SET `nome` = ?, `data_nascimento` = ?, `idade` = ?, `inicio` = ?, `reavaliacao` = ?, `objetivos` = ?, `email` = ?, `senha` = ? WHERE `login_academia`.`id_login_academia` = ?";
        // return SQL::insert($cmd, $array);

    }

    public static function GetClients($array){
        $cmd ="SELECT * FROM `login_academia` WHERE nivel_acesso_fk = 3 AND tem_treino != 'NAO' AND fk_login_loja = ?";
        return SQL::use($cmd, $array);
    }

    public static function TotalClientes($array){
        $cmd = " SELECT COUNT(login_academia.id_login_academia) as total_clientes FROM login_academia WHERE login_academia.nivel_acesso_fk = 3 AND fk_login_loja = ?";
        return SQL::use($cmd, $array);
    }

    public static function TotalPersonal($array){
        $cmd = " SELECT COUNT(login_academia.id_login_academia) as total_personal FROM login_academia WHERE login_academia.nivel_acesso_fk = 2 AND fk_login_loja = ?";
        return SQL::use($cmd, $array);
    }

}