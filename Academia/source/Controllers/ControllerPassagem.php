<?php

namespace Source\Controllers;
use Source\Models\Passagem;
use Source\Database\Connect;

Class ControllerPassagem
{
    public function create(Passagem $p,$cat){
        var_dump($p);
        echo "<hr>";
        var_dump($cat);
        $sql1 = 'INSERT INTO passagem (id_destino_fk, id_categoria_fk, valor) VALUES (?,?,?)';
        $stmt1 = Connect::getInstance()->prepare($sql1);
        $stmt1->bindValue(1,$p->getIdDestinoFk());
        $stmt1->bindValue(2,$cat[0]);
        $stmt1->bindValue(3,$cat[1]);

        $sql2 = 'INSERT INTO passagem (id_destino_fk, id_categoria_fk, valor) VALUES (?,?,?)';
        $stmt2 = Connect::getInstance()->prepare($sql2);
        $stmt2->bindValue(1,$p->getIdDestinoFk());
        $stmt2->bindValue(2,$cat[2]);
        $stmt2->bindValue(3,$cat[3]);
        
        if(($stmt1 -> execute()) && ($stmt2 -> execute())){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Passagem Cadastrado com sucesso';
            header('Location:../pages/Administracao/Passagem.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Erro ao Cadastrar Passagem';
            header('Location:../pages/Administracao/Passagem.php');
        }

    }

    public function read(){
    
        if(isset($_GET['idPassagem'])){
            $idPassagem = $_GET['idPassagem'];
            $sql = "SELECT 
            passagem.id_passagem,
            passagem.id_destino_fk,
            passagem.id_categoria_fk,
            destinos.id_destino,
            destinos.nome_destino,
            destinos.endereco,
            categoria.id_categoria,
            categoria.nome_categoria,
            passagem.valor
            FROM passagem
            
            INNER JOIN destinos ON passagem.id_destino_fk = destinos.id_destino
            INNER JOIN categoria ON passagem.id_categoria_fk = categoria.id_categoria
            
            WHERE id_passagem = ?
           " ; // arrumar ainda
        
            $stmt = Connect::getInstance()->prepare($sql);
            $stmt->bindValue(1,$idPassagem);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }

        }else{

            $sql = "SELECT 
            passagem.id_passagem,
            passagem.id_destino_fk,
            passagem.id_categoria_fk,
            destinos.id_destino,
            destinos.nome_destino,
            destinos.endereco,
            categoria.id_categoria,
            categoria.nome_categoria,
            passagem.valor
            FROM passagem
            
            INNER JOIN destinos ON passagem.id_destino_fk = destinos.id_destino
            INNER JOIN categoria ON passagem.id_categoria_fk = categoria.id_categoria";
        
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

    public function update(Passagem $p){

        $sql = 'UPDATE passagem SET valor = ? WHERE id_passagem = ?';

        $stmt = Connect::getInstance()->prepare($sql);
   
        $stmt->bindValue(1, $p->getValor());
        $stmt->bindValue(2, $p->getIdPassagem());

        if($stmt -> execute()){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Passagem Editada com Sucesso';
            header('Location:../pages/Administracao/Passagem.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Erro ao Editar Passagem';
            header('Location:../pages/Administracao/Passagem.php');
        }  

    }


     /**
     * Controller Delete
     */

    public function delete($id){

        $sql = 'DELETE FROM passagem WHERE id_passagem = ?';
        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindValue(1,$id);

        if($stmt -> execute()){
            session_start();
            $_SESSION['typeMessage'] = 'success';
            $_SESSION['mensagem'] = 'Passagem Deletada com Sucesso';
            header('Location:../pages/Administracao/Passagem.php');
        }else{
            $_SESSION['typeMessage'] = 'error';
            $_SESSION['mensagem'] = 'Erro ao Deletar Destino';
            header('Location:../pages/Administracao/Passagem.php');
        }

    }







}