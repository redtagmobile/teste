<?php

namespace Source\Models;


class Login
{
    private $id_users;
    private $nome;
    private $email;
    private $pass;
    private $matricula;
    private $card;
    private $cpf;
    private $rj;
    private $nivel_acesso;
    private $id_school;



    /**
     * Get the value of id_users
     */
    public function getId_users()
    {
        return $this->id_users;
    }

    /**
     * Set the value of id_users
     *
     * @return  self
     */
    public function setId_users($id_users)
    {
        $this->id_users = $id_users;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of rj
     */
    public function getRj()
    {
        return $this->rj;
    }

    /**
     * Set the value of rj
     *
     * @return  self
     */
    public function setRj($rj)
    {
        $this->rj = $rj;

        return $this;
    }

    /**
     * Get the value of nivel_acesso
     */
    public function getNivel_acesso()
    {
        return $this->nivel_acesso;
    }

    /**
     * Set the value of nivel_acesso
     *
     * @return  self
     */
    public function setNivel_acesso($nivel_acesso)
    {
        $this->nivel_acesso = $nivel_acesso;

        return $this;
    }

    /**
     * Get the value of id_school
     */
    public function getId_school()
    {
        return $this->id_school;
    }

    /**
     * Set the value of id_school
     *
     * @return  self
     */
    public function setId_school($id_school)
    {
        $this->id_school = $id_school;

        return $this;
    }
}
