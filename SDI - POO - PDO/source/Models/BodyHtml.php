<?php

namespace Source\Models;

class BodyHtml
{
    public function header()
    {
        include "../../../includes/head.php";
    }

    public function footer(){
        echo "<script src = '../../../plugins/Mensagens/Message.js'>";
        echo "</script>"; 
    }
}
