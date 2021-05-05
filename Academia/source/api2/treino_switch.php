<?php
use \Source\api2\TreinosClass;
switch($action){
    case "mostrar":
        echo json_encode(TreinosClass::Read($values));
    break;

}

?>