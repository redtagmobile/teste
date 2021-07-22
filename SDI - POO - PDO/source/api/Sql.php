<?php

namespace Source\api;

use \Source\Database\Connect;

class Sql
{

    public static function user()
    {
        return $_SESSION['user'][0]['id_users'];
    }

    public static function schoolUser()
    {
        return $_SESSION['user'][0]['id_school_fk'];
    }


    public static function use($cmd, $array)
    {
        $pdo = Connect::getInstance();
        $stmt = $pdo->prepare($cmd);
        $stmt->execute($array);
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }

    public static function line($cmd, $array)
    {

        $pdo = Connect::getInstance();
        $stmt = $pdo->prepare($cmd);
        $stmt->execute($array);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    public static function insert($cmd, $array)
    {
        $pdo = Connect::getInstance();
        $stmt = $pdo->prepare($cmd);
        @$stmt->execute($array);
        $result = $pdo->lastInsertId();
        return $result;
    }

    public static function returnInsert($cmd, $array)
    {
        $pdo = Connect::getInstance();
        $stmt = $pdo->prepare($cmd);

        if ($stmt->execute($array)) {
            return [
                $pdo->lastInsertId(), true
            ];
        } else {
            return [
                $pdo->lastInsertId(), false
            ];
        }
    }
}
