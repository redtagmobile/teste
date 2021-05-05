<?php

namespace Source\Controllers;
use Source\Models\Veiculos;
use Source\Database\Connect;

Class ControllerVeiculos
{

     /**
     * Controller Create
     */

    public function create(Veiculos $v){
        $sql = 'INSERT INTO veiculo (nome_veiculo, capacidade) VALUES (?,?)';

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1,$v->getNomeVeiculo());
        $stmt->bindValue(2,$v->getCapacidade());

        if($stmt -> execute()){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Veiculo Cadastrado com sucesso';
            header('Location:../pages/Administracao/Veiculo.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Erro ao Cadastrar Veiculo';
            header('Location:../pages/Administracao/Veiculo.php');
        }

    }

    /**
     * Controller Read
     */
    public function read(){
    
        if(isset($_GET['idVeiculo'])){
            $idVeiculo = $_GET['idVeiculo'];
            $sql = "SELECT * FROM veiculo WHERE id_veiculo = '$idVeiculo'";
        
            $stmt = Connect::getInstance()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }

        }else{

            $sql = 'SELECT * FROM veiculo';
        
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

    public function update(Veiculos $v){

        $sql = 'UPDATE veiculo SET 
        nome_veiculo = ?,
        capacidade = ?
        

          WHERE id_veiculo = ?';

        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1, $v->getNomeVeiculo());
        $stmt->bindValue(2, $v->getCapacidade());
        $stmt->bindValue(3, $v->getIdVeiculo());

        if($stmt -> execute()){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Veiculo Editado com Sucesso';
            header('Location:../pages/Administracao/Veiculo.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Veiculo ao Editar Destino';
            header('Location:../pages/Administracao/Veiculo.php');
        }  

    }

    /**
     * Controller Delete
     */

    public function delete($id){

        $sql = 'DELETE FROM veiculo WHERE id_veiculo = ?';
        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1,$id);

        if($stmt -> execute()){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Veiculo Deletado com Sucesso';
            header('Location:../pages/Administracao/Veiculo.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Erro ao Deletar Destino';
            header('Location:../pages/Administracao/Veiculo.php');
        }

    }

}
