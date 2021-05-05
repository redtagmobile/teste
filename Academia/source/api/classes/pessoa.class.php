<?php

class Product Extends SQL{

    public static function Read(){
        $cmd = "SELECT id_destino, nome_destino, endereco FROM destinos";
        return SQL::use($cmd,[]);
    }

   

}