<?php
switch($action){
    case "mostrar":
        echo json_encode(Administrador::Read());
    break;

    
}
?>