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


function carregar_treinos() {
    axios.post('api2/controller.php', {
            action: "mostrar",
            values: []
        })
        .then(function(response) {
            nomes = "";
            estrutura = 'onclick()';
            for (var i = 0; i < response.data.length; i++) {
            nomes += response.data[i].nome+ '<br>';
            }

        })

        

}

function infoTreino(){
    carregar_treinos();
    Swal.fire({
    title: "Nome dos treinos por categoria",
    text: "subtreinos",
    html:
     nomes
  })
  }



function carregar_personal() {
    axios.post('../../api2/controller.php', {
            action: "mostrar-personal",
            values: [
              $("#id_de_acordo_com_a_loja").val()
            ]
        })
        .then(function(response) {
            // nome = "Editar";
            estrutura_tabela = "";
            for (var i = 0; i < response.data.length; i++) {
                botao = "";
                botao2 = "";
                botao2 = `
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal" onclick="EditUser(` + response.data[i].id_login_academia + `)">
                Editar
                </button>
                `
                botao = `<button type="button" class="btn btn-danger" onclick="DeletPersonal(` + response.data[i].id_login_academia + `)">Excluir</button>`;
                estrutura_tabela += `<tr>
            <td>` + response.data[i].nome + `</td>
            
            <td>
            `+  botao + `
            ` + botao2 + `
            </td>
            </tr>`;

            }
            document.getElementById("carregar_tabela_personal").innerHTML = estrutura_tabela;
            load_tabela_main();
        })
}



// Função que cria um personal trainer
function CreatePersonal() {
    if(
    $("#cadastro_nome").val()!=""&&
    $("#cadastro_chave").val()!=""&&
    $("#cadastro_email").val()!=""
    ) {

    axios.post('../../api2/controller.php', {
            action: "create-personal",
            values: [
              $("#cadastro_nome").val(),
              $("#cadastro_email").val(),
              $("#cadastro_senha").val(),
              $("#fk_login_loja").val(),
            ]
           
        })
        .then(function(response) {
            Swal.fire(
                'Cadastrado',
                'Personal cadastrado!',
                'success'
              );
              $("#cadastro_nome").val("");
              $("#cadastro_chave").val("");
            //  GetAdmins();
  
             setTimeout(function() {
                    location.href = "Personal.php";
                  }, 1500);
  
        })
    }else{
        Swal.fire(
            'Erro',
            'complete os dados',
            'error'
          );
    }
  }

  var gambiarra = "";

// Função que preenche os valores nos inputs
  function EditUser(id){
    $("#editar_id").val(id);
    axios.post('../../api2/controller.php', {
            action: "get-one-personal",
            values: [
              
           id
                
            ]
        }).then(function(response){
            client = response.data[0];
            $("#editar_nome").val(client.nome);
            $("#editar_email").val(client.email);
            // $("#editar_chave").val(client.senha);
            gambiarra = client.senha;  
            // alert(gambiarra+" valor gambiara");
            // $("#editar_id").val(client.id_login_academia);
        })
  
  }

// Função que da um update
  function UpdatePersonal(){
    var adj="";
    adj = $("#editar_chave").val();
    // alert(adj);

if(adj == "" || adj == '' || adj == null){
        adj = gambiarra;
        // alert(adj+"valor gambiara se não tiver digitado nada")

    }else{

        adj = $("#editar_chave").val();
        // alert(adj+" Se ele tiver digitado")
    }

    // alert(adj+ "valor que vai ser passado pro axios")

    axios.post('../../api2/controller.php', {
      action: "update-personal",
      values: [
        $("#editar_nome").val(),
        $("#editar_email").val(),
        adj,
        $("#editar_id").val()
          
      ]
  })


  .then(function(response) {
   
    Swal.fire(
        'atualizado',
        'Personal Atualizado!',
        'success'
      );
      



      setTimeout(function() {
        location.href = "Personal.php";
      }, 1500);



    
  }) 
  }

// Função que deleta um personal
  function DeletPersonal(id){

   
    Swal.fire({
        title: 'Tem certeza disso ?',
        text: "Você não poderá reverter isso!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, Deletar isso!'
      }).then((result) => {
        if (result.isConfirmed) {
            axios.post('../../api2/controller.php', {
                action: "delet-client",
                values: [
                 id
                ]
               
            }) .then(function(response) {
                Swal.fire(
                    'atualizado',
                    'Personal Deletado!',
                    'success'
                  );
                  setTimeout(function() {
                    location.href = "Personal.php";
                  }, 1500);
               
            })
        }
      })

}

  

 





















































// Função que carrega os clientes
  function carregar_Clientes() {
    axios.post('../../api2/controller.php', {
            action: "mostrar-clientes",
            values: [
              $("#id_de_acordo_com_a_loja").val()
            ]
        })
        .then(function(response) {
            nome = "Editar";
            estrutura_tabela = "";
            for (var i = 0; i < response.data.length; i++) {
              const dataNascimento = moment(response.data[i].data_nascimento, "DD/MM/YYYY");
                botao = "";
                botao2 = "";
                botao2 = `
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal" onclick="EditClient(` + response.data[i].id_login_academia + `)">
                Editar
                </button>
                `
                
                botao = `<button type="button" class="btn btn-danger" onclick="DeletClient(` + response.data[i].id_login_academia + `)">Excluir</button>`;
                estrutura_tabela += `<tr>
                <td>` + response.data[i].id_login_academia + `</td>
            <td>` + response.data[i].nome + `</td>
            <td>` + moment(response.data[i].data_nascimento).format("DD/MM/YYYY") + `</td>
            <td>` + response.data[i].idade + `</td>
            <td>` + response.data[i].n_ficha + `</td>
            <td>` + moment(response.data[i].inicio).format("DD/MM/YYYY") + `</td>
            <td>` + moment(response.data[i].reavaliacao).format("DD/MM/YYYY") + `</td>
            <td>` + response.data[i].objetivos + `</td>
            <td>
            `+  botao + `
            </td>
            <td>
            ` + botao2 + `
            </td>
            </tr>`;

            }
            document.getElementById("carregar_tabela_clientes").innerHTML = estrutura_tabela;
            load_tabela_main();
        })
}



  function DeletClient(id){

   
        Swal.fire({
            title: 'Tem certeza disso ?',
            text: "Você não poderá reverter isso!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, Deletar isso!'
          }).then((result) => {
            if (result.isConfirmed) {
                axios.post('../../api2/controller.php', {
                    action: "delet-client",
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
                        location.href = "Clientes.php";
                      }, 1500);
                   
                })
            }
          })
  
  }

function CreateClient() {
  if(
  $("#cadastro_nome").val()!=""&&
  $("#cadastro_nascimento").val()!=""&&
  $("#cadastro_idade").val()!=""&&
  $("#cadastro_inicio").val()!=""&&
  $("#cadastro_reavaliacao").val()!=""&&
  $("#cadastro_email").val()!=""&&
  $("#cadastro_senha").val()!=""
  ) {

  axios.post('../../api2/controller.php', {
          action: "create-client",
          values: [
            $("#cadastro_nome").val(),
            $("#cadastro_nascimento").val(),
            $("#cadastro_idade").val(),
            $("#cadastro_inicio").val(),
            $("#cadastro_reavaliacao").val(),
            $("#cadastro_objetivos").val(),
            $("#cadastro_email").val(),
            $("#cadastro_senha").val(),
            $("#fk_login_loja").val(),

          ]
         
      })
      .then(function(response) {
          Swal.fire(
              'Cadastrado',
              'Cliente cadastrado!',
              'success'
            );
            $("#cadastro_nome").val("");
            $("#cadastro_chave").val("");
          //  GetAdmins();

           setTimeout(function() {
                  location.href = "Clientes.php";
                }, 1500);

      })
  }else{
      Swal.fire(
          'Erro',
          'complete os dados',
          'error'
        );
  }
}




var gambiarra2 = "";



// Função que preenche os valores nos inputs
function EditClient(id){
  $("#editar_id").val(id);
  axios.post('../../api2/controller.php', {
          action: "get-one-client",
          values: [
            
         id
              
          ]
      }).then(function(response){
          client = response.data[0];
          $("#editar_nome").val(client.nome);
          $("#editar_nascimento").val(client.data_nascimento);
          $("#editar_idade").val(client.idade);
          $("#editar_inicio").val(client.inicio);
          $("#editar_reavaliacao").val(client.reavaliacao);
          $("#editar_objetivos").val(client.objetivos);
          $("#editar_email").val(client.email);
          // $("#editar_senha").val(client.senha);

          gambiarra2 = client.senha;  
            // alert(gambiarra2+" valor gambiara");
          // $("#editar_id").val(client.id_login_academia);
      })

}







// Função que da um update
function UpdateClient(){

  var adx="";
  adx = $("#editar_senha").val();
  // alert(adx);

if(adx == "" || adx == '' || adx == null){
      adx = gambiarra2;
      // alert(adx+"valor gambiara se não tiver digitado nada")

  }else{

      adx = $("#editar_senha").val();
      // alert(adx+" Se ele tiver digitado")
  }

  // alert(adx+ "valor que vai ser passado pro axios")







  axios.post('../../api2/controller.php', {
    action: "update-client",
    values: [
      $("#editar_nome").val(),
      $("#editar_nascimento").val(),
      $("#editar_idade").val(),
      $("#editar_inicio").val(),
      $("#editar_reavaliacao").val(),
      $("#editar_objetivos").val(),
      $("#editar_email").val(),
      // $("#editar_senha").val(),
      adx,
      $("#editar_id").val()
        
    ]
})


.then(function(response) {
 
  Swal.fire(
      'atualizado',
      'Personal Atualizado!',
      'success'
    );
    setTimeout(function() {
      location.href = "Clientes.php";
    }, 1500);


  
}) 
}





















// functions para carregar ficha de treino


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
              <th><span class="badge badge-pill badge-dark mb-1">`+response.data[i].nome+`</span></th>
              <th>Séries</th>
              <th>Repetições</th>
              <th>Carga</th>
              <th>Sequência</th>
          </tr>
      </thead>
      <tbody id="carrega_sub_treinos`+response.data[i].id_treino+`">
      </tbody>
      
  </table>
      `; 

          }

document.getElementById("div_table").innerHTML = estrutura2;            
              
      })
}


function get_sub_treinos(id_treino){




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
          <th scope="row">`+response.data[i].nome+`</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      </tbody>
          `;

      }
      nomeId = id_treino;
      // alert(nomeId)
document.getElementById("carrega_sub_treinos"+nomeId).innerHTML = estrutura;
          
  })

}










function getClientComTreino() {
  axios.post('../../api2/controller.php', {
          action: "get-clients",
          values: [
            $("#id_loja").val()
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




function pegaIdDoSelect(j) {

var id_do_cliente = j.value;

if (id_do_cliente == "xyk"){
  alert("selecione um cliente antes");
}


axios.post('../../api2/controller.php', {
  action: "get-treino",
  values: [
    id_do_cliente
  ]
})
.then(function(response) {
  id = "";
  estrutura2 = "";
  for (var i = 0; i < response.data.length; i++) {

      get_sub_treinos2(id_do_cliente,response.data[i].id_treino);



  estrutura2 += `
<table class="table table-hover" id="aTable">
<thead>
  <tr>
      <th><span class="badge badge-pill badge-dark mb-1">`+response.data[i].treino_nome+`</span></th>
      <th>Séries</th>
      <th>Repetições</th>
      <th>Carga</th>
      <th>Sequência</th>
  </tr>
</thead>
<tbody id="carrega_sub_treinos`+response.data[i].id_treino+`">

</tbody>

</table>
`; 

  }

document.getElementById("div_table").innerHTML = estrutura2;            
      
})







}















function get_sub_treinos2(id_cliente,id_treino){



  axios.post('../../api2/controller.php', {
      action: "get-sub-treino",
      values: [
          id_cliente,
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
          <th scope="row">`+response.data[i].nome+`</th>
          <td>`+response.data[i].series+`</td>
          <td>`+response.data[i].repeticoes+`</td>
          <td>`+response.data[i].carga+`</td>
          <td>`+response.data[i].sequencia+`</td>
      </tr>
      </tbody>
          `;

        
          

          

      }
      nomeId = id_treino;
      // alert(nomeId)
document.getElementById("carrega_sub_treinos"+nomeId).innerHTML = estrutura;
          
  })

}








function TotalClientes(){
  axios.post('api2/controller.php', {
    action: "total-clientes",
    values: [
      $("#id_loja").val()
    ]
})
.then(function(response) {

    totalClientes = response.data[0];

    document.getElementById("total_clientes").innerHTML = totalClientes.total_clientes;

})
}


function TotalPersonal(){
  axios.post('api2/controller.php', {
    action: "total-personal",
    values: [
      $("#id_loja").val()
    ]
})
.then(function(response) {

    totalPersonal = response.data[0];

    document.getElementById("total_personal").innerHTML = totalPersonal.total_personal;

})
}
