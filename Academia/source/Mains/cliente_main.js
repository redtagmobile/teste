
    

function chama_treino() {
    axios.post('../../api2/controller.php', {
            action: "get-treino",
            values: [
                $("#id_do_client").val()
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


function get_sub_treinos(id_treino){




    axios.post('../../api2/controller.php', {
        action: "get-sub-treino",
        values: [
            $("#id_do_client").val(),
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
            <td>`+response.data[i].sequencia+`<td>
        </tr>
        </tbody>
            `;

          
            

            

        }
        nomeId = id_treino;
        // alert(nomeId)
document.getElementById("carrega_sub_treinos"+nomeId).innerHTML = estrutura;
            
    })

}