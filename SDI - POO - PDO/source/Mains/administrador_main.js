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

/**
 * Fução responsavel por carregar a tabela de disciplinas
 * @return all_disciplinas
 */

function getDisciplinas() {
    axios.post('../../api/controller.php', {
        action: "get-disciplinas",
        values: []
    }).then(function (response) {
        html = "";
        for (var i = 0; i < response.data.length; i++) {
            html += `
             <tr>
               <td>`+ response.data[i].id_disciplina + `</td>
               <td>`+ response.data[i].nome + `</td>
               <td>
                <div class="table-actions">
                  

                    <button data-toggle="modal" data-target="#modal_update_disciplinas" onclick="editarDisciplina(`+ response.data[i].id_disciplina + `)" type="button" class="btn btn-icon btn-info"> <i class="ik ik-edit-2"></i></button>

                    <button onclick="deletarDisciplina(`+ response.data[i].id_disciplina + `)" type="button" class="btn btn-icon btn-danger">  <i class="ik ik-trash-2"></i></button>


                    </div>
            </td>
             </tr>`
        }

        document.getElementById("table_disciplinas").innerHTML = html
        load_tabela_main()

    })



}

/**
 * Fução responsavel por cadastrar novasDisciplinas
 * @return new diciplina
 */
function cadastrarDiciplinas() {

    if ($("#cadastro_disciplina").val() != "") {

        axios.post('../../api/controller.php', {
            action: "cadastrar-disciplinas",
            values: [
                $("#cadastro_disciplina").val()
            ]
        }).then(function (response) {
            if (response.data) {
                $('#modal_add_disciplinas').modal('hide')
                $("#cadastro_disciplina").val("")
                Swal.fire(
                    'Sucesso',
                    'Nova Disciplina cadastrada com sucesso !',
                    'success'
                );
                $("#table").DataTable().destroy()
                getDisciplinas()
            } else {
                Swal.fire(
                    'Ops :(',
                    'Não foi possivel cadastrar',
                    'error'
                );
            }
        })
    } else {
        Swal.fire(
            'Ops',
            'Preencha todos os campos !',
            'error'
        );
    }
}

function deletarDisciplina(id) {

    Swal.fire({
        title: 'Tem certeza disso ?',
        text: "Você não poderá reverter isso!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, faça isso!'
    }).then((result) => {
        if (result.isConfirmed) {
            axios.post('../../api/controller.php', {

                action: "deletar-disciplina",
                values: [
                    id
                ]

            }).then(function (response) {
                if (response.data) {
                    Swal.fire(
                        'Sucesso',
                        'Disciplina excluída com sucesso',
                        'success'
                    );
                    $("#table").DataTable().destroy()
                    getDisciplinas()


                } else {
                    Swal.fire(
                        'Ops :(',
                        'Não foi possivel excluir essa disciplina',
                        'error'
                    );
                    $("#table").DataTable().destroy()
                    getDisciplinas()
                }

            })
        }
    })
}

//Pega o id da disciplina e coloca em um input hiden

function editarDisciplina(id) {
    $("#id_disciplina").val(id)
    getOneDisciplina()
}

// seleciona a disciplina pelo id
function getOneDisciplina() {
    axios.post('../../api/controller.php', {
        action: "get-one-disciplina",
        values: [
            $("#id_disciplina").val()
        ]
    }).then(function (response) {
        $("#editar_disciplina").val(response.data[0].nome)
    })
}

// faz o update de fato
function update() {
    axios.post('../../api/controller.php', {
        action: "update-disciplina",
        values: [
            $("#editar_disciplina").val(),
            $("#id_disciplina").val()
        ]
    }).then(function (response) {
        if (response.data) {
            $('#modal_update_disciplinas').modal('hide')
            $("#editar_disciplina").val("")
            Swal.fire(
                'Sucesso',
                'Disciplina Editada com sucesso',
                'success'
            );
            $("#table").DataTable().destroy()
            getDisciplinas()


        } else {
            Swal.fire(
                'Ops :(',
                'Não foi possivel editar essa disciplina',
                'error'
            );
            $("#table").DataTable().destroy()
            getDisciplinas()
        }
    })
}

