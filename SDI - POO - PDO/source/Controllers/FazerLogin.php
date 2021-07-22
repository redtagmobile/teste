<?php

namespace Source\Controllers;

use \Source\Models\Login;
use Source\Database\Connect;

class FazerLogin
{
    public function Logar(Login $login)
    {

        $sql = 'SELECT * FROM users
        INNER JOIN niveis_de_acesso ON niveis_de_acesso.id_niveis_de_acesso = users.nivel_acesso
        WHERE email = ? AND pass = ?';

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1, $login->getEmail());
        $stmt->bindValue(2, $login->getPass());
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['user'] = $resultado;

            header('Location:../index.php');
        } else {
            header('Location:../../index.php');
        }
    }
}
