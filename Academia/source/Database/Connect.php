<?php

namespace Source\Database;

use \PDO;
use \PDOException;

class Connect
{
    //  const HOST = "localhost";
    //  const USER = "wwserv_turismouser";
    //  const DBNAME = "wwserv_turismo";
    //  const PASSWD = "7pN!Nga4-^KK";

     const HOST = "localhost";
     const USER = "root";
     const DBNAME = "academia";
     const PASSWD = "";

     const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // pega por padrao utf-8 general_ci
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // sempre trata a exeption como erro 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // trara todos os resultados como objeto
        PDO::ATTR_CASE => PDO::CASE_NATURAL // existe o case upper e case lower que tras os nomes das colunas do banco de dados em letras maiuscula e minusculas e o natual, da forma como esta escrito no banco
    ];

    private static $instance;

    public static function getInstance():PDO
    
    {
        if(empty(self::$instance)){
            try{
                self::$instance = new PDO(
                    // o nome =>*mysql* se refere ao banco de dados. depois mudar caso seja outro "drive", tipo PostGreeSQL
                    "mysql:host=".self::HOST.";dbname=".self::DBNAME,
                    self::USER,
                    self::PASSWD,
                    self::OPTIONS
                      
                ); 
            }catch(PDOException $exception){
                die("<h1>Whoops, erro ao Conectar...</h1>");
            }
        }
        return self::$instance;
    }

    /** 
     * dessa forma o usuario não cria mais de um construtor e não o clona.
    */
    // final private function __construct(){

    // }

    // final private function __clone(){

    // }
}



