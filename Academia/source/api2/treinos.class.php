<?php

class Treinos Extends SQL {
    public static function Read($array){
        $cmd = "SELECT id_treino, nome FROM `treino`";
        return SQL::use($cmd, $array);
   }
}