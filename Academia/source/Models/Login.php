<?php

namespace Source\Models;


Class Login
{
    private $id_login_academia;
    private $nivelAcesso;
    private $nome;
    private $email;
    private $senha;
    
    private $nome_loja;
    private $fk_login_loja;
    private $status;


    public function getIdLoginAcademia(){
        return $this->id_login_academia;
    }

    public function setIdLogin($idLoginAcademia){
        $this->id_login_academia = $idLoginAcademia; 
    }

    public function getNivelAcesso(){
        return $this->nivelAcesso;
    }

    public function setNivelAcesso($nivelAcesso){
        $this->nivelAcesso = $nivelAcesso;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }



    
    public function getNomeLoja(){
        return $this->nome_loja;
    }

    public function setNomeLoja($nomeLoja){
        $this->nome_loja = $nomeLoja;
    }
    
    public function getFkLoginLoja(){
        return $this->fk_login_loja;
    }

    public function setFkLoginLoja($fkLoginLoja){
        $this->fk_login_loja = $fkLoginLoja;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }


}

