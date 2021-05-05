<?php
class Administrador Extends SQL{

    public static function Read(){
        $cmd = "SELECT nome_destino, endereco FROM destinos";
        return SQL::use($cmd,[]);
    }

  

}