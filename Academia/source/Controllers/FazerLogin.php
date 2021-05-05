<?php

namespace Source\Controllers;
use \Source\Models\Login;
use Source\Database\Connect;

class FazerLogin
{
    public function Logar(Login $login){
        
        $sql = 'SELECT
        login_academia.id_login_academia,
        login_academia.nivel_acesso_fk,
        login_academia.nome,
        login_academia.email,
        login_academia.inicio,
        login_academia.reavaliacao,
        login_academia.nome_loja,
        login_academia.fk_login_loja,
        login_academia.status,

        login_academia.senha FROM login_academia 
        
        INNER JOIN nivel_acesso ON login_academia.nivel_acesso_fk = nivel_acesso.id_nivel_acesso
        
        WHERE email = ? AND senha = ?';

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1, $login->getEmail());
        $stmt->bindValue(2, $login->getSenha());
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
               
                    session_start();
                       $_SESSION['user'] = $resultado;
                       
                         header('Location:../index.php');
            
          }else{
            header('Location:../../index.php');
        }
    }
}