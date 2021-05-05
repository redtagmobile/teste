<?php

namespace Source\Controllers;
use Source\Models\Destinos;
use Source\Database\Connect;

Class ControllerDestinos
{

    /**
     * Controller Create
     */

    public function create(Destinos $d){
        $sql = 'INSERT INTO destinos (nome_destino, endereco) VALUES (?,?)';

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1, $d->getNomeDestino());
        $stmt->bindValue(2, $d->getEndereco());

        if($stmt -> execute()){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Destino Cadastrado com sucesso';
            header('Location:../pages/Administracao/Destino.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Erro ao Cadastrar Destino';
            header('Location:../pages/Administracao/Destino.php');
        }

    }

    /**
     * Controller Read
     */
    public function read(){
    
        if(isset($_GET['idDestino'])){
            $idDestino = $_GET['idDestino'];
            $sql = "SELECT * FROM destinos WHERE id_destino = '$idDestino'";
        
            $stmt = Connect::getInstance()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }

        }else{

            $sql = 'SELECT * FROM destinos';
        
            $stmt = Connect::getInstance()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }
        }

    }


    public function update(Destinos $d){

        $sql = 'UPDATE destinos SET 
        nome_destino = ?,
        endereco = ?
        

          WHERE id_destino = ?';

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1, $d->getNomeDestino());
        $stmt->bindValue(2, $d->getEndereco());
        $stmt->bindValue(3, $d->getIdDestino());

        if($stmt -> execute()){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Destino Editado com Sucesso';
            header('Location:../pages/Administracao/Destino.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Erro ao Editar Destino';
            header('Location:../pages/Administracao/Destino.php');
        }  

    }



    /**
     * Controller Delete
     */

    public function delete($id){

        $sql = 'DELETE FROM destinos WHERE id_destino = ?';
        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1,$id);

        if($stmt -> execute()){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Destino Deletado com Sucesso';
            header('Location:../pages/Administracao/Destino.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Erro ao Deletar Destino';
            header('Location:../pages/Administracao/Destino.php');
        }

    }



  
}

