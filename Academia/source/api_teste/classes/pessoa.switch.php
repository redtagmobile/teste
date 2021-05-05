<?php
switch($action){
    case "mostrar":
        echo json_encode(Product::Read());
    break;

    
    
    
}
?>