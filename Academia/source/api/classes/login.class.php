<?php
class Session Extends SQL{
    public static function User() {

    return $_SESSION['system_id_login'];

    }
    public static function SelectController() {

        $cmd = "SELECT user_type FROM `users` WHERE id=? AND status=1";
        $response = SQL::line($cmd,[$_SESSION['system_id_login']]);
        if($response['user_type']==1){
            return "classes/client.switch.php";
        }else if ($response['user_type']==2){
            return "classes/admin.switch.php";
        }
        
    }
    public static function Login($email,$pass) {
        //$array= ["honassislopes@gmail.com","admin"];
        $pass= md5($pass);
        $cmd = "SELECT id,user_type FROM `users` WHERE email=? AND password=? AND status=1";
        $response = SQL::line($cmd,[$email,$pass]);
        if($response['id']!=null){
            $_SESSION['system_id_login'] = $response['id'];
            return $response['user_type'];
        }else{
            return false;
        }
        
    }

}
?>