<?php

namespace Source\Models;

class Messages{
    public function Mensagens(){
        if(isset($_SESSION['mensagem'])){
       
              echo "<script>";
                echo "Message('";
                 echo $_SESSION['mensagem']['msg']."',"."'".$_SESSION['typeMessage']['type']."";
                echo "')";
              echo "</script>"; 
            
              unset($_SESSION['mensagem']);    
        }
    }
}
