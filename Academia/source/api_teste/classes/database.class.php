<?php
@session_start();
class Env {

    public static $env;
    public static function Config(){
        if (!isset(self::$env)) {
            $parsed = parse_ini_file('.env');
            foreach ($parsed as $key => $value) {
               self::$env[$key]= $value;
            }    
        }
        
        return (object)self::$env;
    }
    

    
}



class Database extends Env {
    public static $instance;
    public static function Connect() {
        
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=' . Env::Config()->mysql_host . ';
              dbname=' . Env::Config()->mysql_dbname, Env::Config()->mysql_user, Env::Config()->mysql_pass, array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
        
        return self::$instance;
    }
}
class SQL Extends Database{
    public static function use($cmd,$array){
        $pdo = Database::Connect();
        $stmt = $pdo->prepare($cmd);
        $stmt->execute($array);
        $results = $stmt->fetchAll();
        return $results;
    }
    public static function line($cmd,$array){

        $pdo = Database::Connect();
        $stmt = $pdo->prepare($cmd);
        $stmt->execute($array);
        $result = $stmt->fetch();
        return $result;
    }
    public static function insert($cmd,$array){
        $pdo = Database::Connect();
        $stmt = $pdo->prepare($cmd);
        @$stmt->execute($array);
        $result = $pdo->lastInsertId();
        return $result;
    }
 
    // fiz ai, vamo vê se da. deu oh
    public static function delete($cmd,$array){
        $pdo = Database::Connect();
        $stmt = $pdo->prepare($cmd);
        $stmt ->execute($array);
        
    }



}
$data = new SQL();
var_dump($data);

?>