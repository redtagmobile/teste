<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Source\Models\BodyHtml;
use Source\Models\Messages;
use Source\Models\Protection;

Protection::protect();

?>
<?php
// Cabeçalho ate a div principal
include('../../../includes/head.php');
?>


<div class="main-content">
    <!-- Div principal que comporta tudo -->

    <div class="container-fluid">
        <!-- inicio menu superior que fica dentro da div principal -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-bar-chart-2 bg-blue"></i>
                        <div class="d-inline">
                            <h5>Dashboard</h5>
                            <span>aba destinada para o controle das operações</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Disciplinas</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Cadastrar</a>
                            </li>
                            <!-- <li class="breadcrumb-item active" aria-current="page">Dashboard</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!-- fim menu superior -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3>Editar Disciplinas</h3>
                    </div>
                    <div class="card-body">

                        <input type="text" value="<?= $_GET['id_disciplina']; ?>">

                        <div class="form-group">
                            <label for="exampleInputUsername1">Nome da Disciplina</label>
                            <input type="text" class="form-control" id="editar_disciplina" placeholder="Ex: Português">
                        </div>

                    </div>
                    <div class="card-body template-demo">
                        <button type="button" class="btn btn-info btn-block" onclick="cadastrarDiciplinas()">Cadastrar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>


    <!-- /////////// termina aqui as ações -->
</div> <!-- Fim Div Principal -->
<?php
// resto das coisas depois do "fecha div principal" 
include('../../../includes/footer.php'); ?>

<script src="../../../plugins/select2/dist/js/select2.min.js"></script>
<script src="../../../plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="../../../plugins/jquery.repeater/jquery.repeater.min.js"></script>
<script src="../../../plugins/mohithg-switchery/dist/switchery.min.js"></script>
<script src="../../../js/form-advanced.js"></script>

<?php

BodyHtml::footer();
Messages::Mensagens();

?>