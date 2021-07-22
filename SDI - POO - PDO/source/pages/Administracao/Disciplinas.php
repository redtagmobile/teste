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
                                <a href="#">UI</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Inicio</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> <!-- fim menu superior -->





    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Disciplinas</h3>
                ⠀
                <a href="#">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_add_disciplinas">Adicionar</button>
                </a>
            </div>
            <div class="card-body">

                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome da disciplina</th>
                            <th class="nosort">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody id="table_disciplinas">
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modals -->
    <?php include  __DIR__ . '../../../../includes/modais.php'; ?>


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

<script>
    getDisciplinas()
    
</script>

<?php

BodyHtml::footer();
Messages::Mensagens();

?>