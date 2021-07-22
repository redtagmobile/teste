<?php

namespace Source\Models;

class Filter
{
    // função dedicada a limpar caracteres ruins, pode ser melhor
    // fazer super filtro de sanitatização
    public static function inputPost($name_input){
        $input = filter_input(INPUT_POST, $name_input, FILTER_SANITIZE_SPECIAL_CHARS);
        return $input;
    }
}
