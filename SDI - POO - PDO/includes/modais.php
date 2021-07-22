<!-- Modal para adicionar disciplinas -->
<div class="modal fade" id="modal_add_disciplinas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar Disciplinas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="exampleInputUsername1">Nome da Disciplina</label>
                    <input type="text" class="form-control" id="cadastro_disciplina" placeholder="Ex: Português">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" onclick="cadastrarDiciplinas()">Adicionar</button>
            </div>
        </div>
    </div>
</div>








<!-- Modal para adicionar disciplinas -->
<div class="modal fade" id="modal_update_disciplinas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Disciplinas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Id da disciplina selecionada -->
                <input type="hidden" id="id_disciplina">

                <div class="form-group">
                    <label for="exampleInputUsername1">Nome da Disciplina</label>
                    <input type="text" class="form-control" id="editar_disciplina" placeholder="Ex: Português">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" onclick="update()">Editar</button>
            </div>
        </div>
    </div>
</div>