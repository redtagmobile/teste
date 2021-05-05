<?php

@$n = $_GET['n']; // valores das series
@$id_usuario = $_GET['id_usuario'];
@$j = $_GET['j']; // valores dos subtreinos
@$k = $_GET['k']; // volores das repetições
@$f = $_GET['f']; // valores das cargas 
@$g = $_GET['g'];
@$fk_login_lojaValue = $_GET['fk_login_lojaValue']; // valor do fk da loja
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- Sweetalert JS -->
     <script src="../../Plugins/Sweetalert/Js/sweetalert2.all.min.js"></script>

    <!-- Sweetalert CSS -->
    <script src="../../Plugins/Sweetalert/Css/sweetalert2.min.css"></script>


</head>
<body onload="jogaValorProaxios()">
    
<script>

function jogaValorProaxios(){
    var x = $("#ValorfinalIdUsuario").val(); // valor do id do usuario 
    var y = $("#valorFinalSeries").val(); // valores das series
    var z = $("#ValorfinalSubtreino").val(); // valores dos subtreinos
    var p = $("#ValorfinalRepeticoes").val(); // valores da repeticoes
    var f = $("#ValorfinalCargas").val(); // valores das cargas 
    var d = $("#ValorfinalSequencia").val() // valores das cargas
    var v = $("#ValorfinalLojaFk").val(); // valor do id da loja 

    enviaaxiosCadastroCliente(x,y,z,p,f,d,v)
                // idUsuario,
                // idSubTreinos,
                // arraySeries
                // arrayRepeticoes
                // arrayCargas
                // arraySequencias
                // idLoja


}

</script>

<input type="hidden" id="valorFinalSeries" value="<?=$n?>" placeholder="Series:"><br><br>
<input type="hidden" id="ValorfinalIdUsuario" value="<?=$id_usuario?>" placeholder="Id usuario"><br><br>
<input type="hidden" id="ValorfinalSubtreino" value="<?=$j?>" placeholder="Id dos Subtreinos:"><br><br>
<input type="hidden" id="ValorfinalRepeticoes" value="<?=$k?>" placeholder="Valores das repetiçõs: "><br><br>
<input type="hidden" id="ValorfinalCargas" value="<?=$f?>" placeholder="Valores das cargas:"><br><br>
<input type="hidden" id="ValorfinalSequencia" value="<?=$g?>" placeholder="Valores das sequencias:"><br><br>
<input type="hidden" id="ValorfinalLojaFk" value="<?=$fk_login_lojaValue?>" placeholder="Valor fk Loja:"><br><br>

<script src="../../../plugins/axios/axios.js"></script>
        
<!-- <script src="../../Mains/personal_main.js"></script> -->

<script>

function enviaaxiosCadastroCliente(idUsuario, idSubTreinos, arraySeries, arrayRepeticoes, arrayCargas, arraySequencias, idLoja){
  axios.post('../../api2/controller.php', {
            action: "cadastro-treino-cliente",
            values: [
                idUsuario,
                idSubTreinos,
                arraySeries,
                arrayRepeticoes,
                arrayCargas,
                arraySequencias,
                idLoja
            ]
        }).then(function(response){
      Swal.fire(
      'Cadastrado !',
      'Treino para cliente Criado!',
      'success'
    );
    setTimeout(function() {
      location.href = "CadastroTreinoCliente.php";
    }, 1500);
        })
}

</script>





</body>
</html>