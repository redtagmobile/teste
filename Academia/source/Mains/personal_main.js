function chama_treino() { 
    axios.post('api2/controller.php', {
            action: "get-treino-all",
            values: [

            ]
        })
        .then(function(response) {
            id = "";
            estrutura2 = "";
            for (var i = 0; i < response.data.length; i++) {
                // id += response.data[i].id_treino;
                get_sub_treinos(response.data[i].id_treino);
                // alert(response.data[i].id_treino);


                estrutura2 += `
    <table class="table table-hover" id="aTable">
        <thead>
            <tr>
                <th><span class="badge badge-pill badge-dark mb-1">` + response.data[i].nome + `</span></th>
                <th>Séries</th>
                <th>Repetições</th>
                <th>Carga</th>
            </tr>
        </thead>
        <tbody id="carrega_sub_treinos` + response.data[i].id_treino + `">

        </tbody>
        
    </table>
        `;

            }

            document.getElementById("div_table2").innerHTML = estrutura2;

        })

        
}


function get_sub_treinos(id_treino) {
    axios.post('api2/controller.php', {
            action: "get-sub-treino-all",
            values: [
                // $("#id_do_client").val(),
                id_treino
            ]
        })
        .then(function(response) {

            estrutura = "";
            for (var i = 0; i < response.data.length; i++) {
                // id += response.data[i].id_treino;
                // alert(response.data[i].nome);
                // alert(id_treino);

                estrutura += `
            
        <tr>
            <th scope="row">` + response.data[i].nome + `</th>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
            `;

            }
            nomeId = id_treino;
            // alert(nomeId)
            document.getElementById("carrega_sub_treinos" + nomeId).innerHTML = estrutura;

        })

}




function getClient() {
    axios.post('../../api2/controller.php', {
            action: "get-clients",
            values: [
                $("#fk_login_loja").val()
            ]
        })
        .then(function(response) {
            id = "";
            estrutura = "";
            option = "";
            for (var i = 0; i < response.data.length; i++) {

                // alert(response.data[i].nome);
                estrutura += `
            <option onclick="" value="` + response.data[i].id_login_academia + `">` + response.data[i].nome + `</option>
        `;

                option = `<option value="xyk">Selecione um Cliente</option>` + estrutura;
            }

            document.getElementById("select_clients").innerHTML = option;

        })
}



function limpaCabecalho() {
    document.getElementById('cabecalho_client').innerHTML = "";
}




function chama_treino() {
    axios.post('../../api2/controller.php', {
            action: "get-treino-all",
            values: [

            ]
        })
        .then(function(response) {
            id = "";
            estrutura2 = "";

            BotaoCadastrar = `

            <button disabled="disabled" id="disabledButtonToActive" type="submit" class="btn btn-info btn-block" onclick="teste9()">Cadastrar</button>
     `;

            for (var i = 0; i < response.data.length; i++) {
                // id += response.data[i].id_treino;
                get_sub_treinos(response.data[i].id_treino);
                // alert(response.data[i].id_treino);


                estrutura2 += `
            <div class="table-responsive">
    <table class="table table-hover" id="aTable">
        <thead>
            <tr>
            <th>#</th>
                <th><span class="badge badge-pill badge-dark mb-1">` + response.data[i].nome + `</span></th>
                <th>Séries</th>
                <th>Repetições</th>
                <th>Carga</th>
                <th>Sequência</th>
            </tr>
        </thead>
        <tbody id="carrega_sub_treinos` + response.data[i].id_treino + `">

        </tbody>
        
    </table>
    </div>
        `;

            }

            document.getElementById("div_table2").innerHTML = estrutura2;

            document.getElementById("de_baixo_da_tabela").innerHTML = BotaoCadastrar;            

        })
}




function get_sub_treinos(id_treino) {

    axios.post('../../api2/controller.php', {
            action: "get-sub-treino-all",
            values: [
                // $("#id_do_client").val(),
                id_treino
            ]
        })
        .then(function(response) {

            estrutura = "";
            for (var i = 0; i < response.data.length; i++) {



                estrutura += `
            
        <tr>
            <td>
                <label class="custom-control custom-checkbox">
                    <input onchange="mudarBotao(this)" value="` + response.data[i].id_sub_treino + `" name="Pacote" type="checkbox" class="custom-control-input">
                    <span class="custom-control-label">&nbsp; </span>
                </label>
            </td>

            <th scope="row">` + response.data[i].nome + `</th>
            <td>
                
                    <input type="text" name="series[]" id="series` + response.data[i].id_sub_treino + `" class="form-control">
               
            </td>
            <td>
               
                    <input type="text" name="repeticoes[]" id="repeticoes` + response.data[i].id_sub_treino + `" class="form-control">
               
            </td>
            <td>
                
                    <input type="text" name="carga[]" id="carga`+ response.data[i].id_sub_treino +`" class="form-control">
               
            </td>
            <td>

            <input type="text" name="sequencia[]" id="sequencia`+ response.data[i].id_sub_treino +`" class="form-control">

            </td>


        </tr>
        </tbody>
            `;

            }
            nomeId = id_treino;
            // alert(nomeId)
            document.getElementById("carrega_sub_treinos" + nomeId).innerHTML = estrutura;

        })


}




function pegaIdDoSelect() {
    var x = $("#select_clients").val();
    $("#id_da_porra_do_cliente").val(x)

    if(x == "xyk"){
        alert("selecione um cliente antes")
    }else if(x == null){
        alert("sem clientes para cadastrar treinos")
    }else{
        chama_treino();
        
    }

}




function teste9() {


    var pacote = document.querySelectorAll('[name=Pacote]:checked');
    var valuesSeries = "";
    var values = [];


    var a = "";
    var b = "";
    var c = "";
    var d = "";
    var e = "";


    for (var i = 0; i < pacote.length; i++) {
        values = pacote[i].value; // chechbox
        $("#series" + values).prop('required', true); // coloca o required de acordo com o checkbox clicado nos "series"
        $("#repeticoes" + values).prop('required', true); // coloca o required de acordo com o checkbox clicado nos "repetições"
        $("#carga" + values).prop('required', true); // coloca o required de acordo com o checkbox clicado nos "carga"
        $("#sequencia" + values).prop('required', true) // coloca o required de acordo com o checkbox clicado nos "sequencia"


        a += $("#series" + values).val() + "///"; // valor das series cocatenado
        b += values + "///"; // valor dos subtreinos cocatenado  
        c += $("#repeticoes" + values).val() + "///";  // valor repetições cocatenado
        d += $("#carga" + values).val() + "///";  // valor carga cocatenado
        e += $("#sequencia" + values).val() + "///" // valor sequencia cocatenado 
        
        // ? = $("#fk_login_lojaValue") // não precisa pois ele tá pegando por session 

        $("#numbers").val(a); // pega os valores de series, taca em uma variavel e joga no input hidden 
        $("#sudTreinosValues").val(b); // pega os valores de series, taca em uma variavel e joga no input hidden 
        $("#repeticoesValues").val(c); // pega os valores das repetições
        $("#cargaValues").val(d); // pega os valores das cargas 
        $("#sequenciaValues").val(e); // pega os valores das sequencias



    }

    

    var x = $("#valorFinal").val();

}

function mudarBotao(j){
    console.log("testando");
    $('#disabledButtonToActive').prop('disabled', false);
 }




 function load_tabela_main() {
    $('#table').DataTable({
        lengthMenu: [
            [10, 20, 50, -1],
            [10, 20, 50, "Todos"]
        ],
        "bJQueryUI": true,
        "oLanguage": {
            "sProcessing": "Processando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "Não foram encontrados resultados",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando de 0 até 0 de 0 registros",
            "sInfoFiltered": "",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "Primeiro",
                "sPrevious": "Anterior",
                "sNext": "Seguinte",
                "sLast": "Último"
            }
        }
    });
}














// Função que carrega os clientes
function carregar_Clientes_Com_Treino() {
    axios.post('../../api2/controller.php', {
            action: "mostrar-clientes-com-treino",
            values: [
                $("#login_loja").val()
            ]
        })
        .then(function(response) {
            nome = "Editar";
            estrutura_tabela = "";
            for (var i = 0; i < response.data.length; i++) {
              const dataNascimento = moment(response.data[i].data_nascimento, "DD/MM/YYYY");
                botao = "";
         
                botao2 = `
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal" onclick="EditClient(` + response.data[i].id_login_academia + `)">
                Editar
                </button>
                `
                
                botao = `<button type="button" class="btn btn-success" onclick="NovoTreino(` + response.data[i].id_login_academia + `)"><i class="ik ik-clipboard"></i>Novo Treino</button>`;
                estrutura_tabela += `<tr>
                <td>` + response.data[i].id_login_academia + `</td>
            <td>` + response.data[i].nome + `</td>
            <td>` + moment(response.data[i].data_nascimento).format("DD/MM/YYYY") + `</td>
            <td>` + response.data[i].idade + `</td>
            <td>` + moment(response.data[i].inicio).format("DD/MM/YYYY") + `</td>
            <td>` + moment(response.data[i].reavaliacao).format("DD/MM/YYYY") + `</td>
            <td>` + response.data[i].objetivos + `</td>
            <td>
            `+  botao + `
            </td>
           
            </tr>`;

            }
            document.getElementById("carregar_tabela_clientes_com_treino").innerHTML = estrutura_tabela;
            load_tabela_main();
        })
}








function NovoTreino(id){
    
    Swal.fire({
        title: 'Tem certeza disso ?',
        text: "A ficha de treino desse cliente será apagada para um nova ser criada !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim faça isso!'
      }).then((result) => {
        if (result.isConfirmed) {
            axios.post('../../api2/controller.php', {
                action: "deletar-treinos-cliente",
                values: [
                 id
                ]
               
            }) .then(function(response) {
                Swal.fire(
                    'atualizado',
                    'Cliente Deletado!',
                    'success'
                  );
                  setTimeout(function() {
                    location.href = "TreinoClientes.php";
                  }, 1500);
               
            })
        }
      })
}
