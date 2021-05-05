<?php

require __DIR__ .'/../../../vendor/autoload.php';
use Source\Models\BodyHtml;
use Source\Models\Messages;
if(!function_exists("protect")){
    function protect(){
        if(!isset($_SESSION)){
            session_start();
            if(!isset($_SESSION['user'])){
                header('Location:../../index.php');
            }
        }   
    }
}

protect();
// $destinos = new Source\Controllers\ControllerDestinos();
?>
<?php 
// Cabeçalho ate a div principal
include('../../../includes/head.php');
?>


<div class="main-content"> <!-- Div principal que comporta tudo -->

                    <div class="container-fluid"> <!-- inicio menu superior que fica dentro da div principal -->
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

<!-- //////////// Começo das ações daqui, pode copiar e colar que da certo.  -->

<div class="container-fluid"> <!--div da tabela-->
        <div class="row">
            <div class="col-md-12">
                <table id="table" class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
               
                </tbody>
                </table>
            </div>
        </div>
    </div> <!-- fecha div da tabela-->








    <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"><h3>Form Repeater</h3></div>
                                    <div class="card-body">
                                        <p>Click the add button to repeat the form</p>
                                        <form class="form-inline repeater">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="d-flex mb-2">
                                                    <label class="sr-only" for="inlineFormInputGroup1">Users</label>
                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="tel" class="form-control" placeholder="Phone No">
                                                    </div>
                                                    <button data-repeater-delete type="button" class="btn btn-danger btn-icon ml-2" ><i class="ik ik-trash-2"></i></button>
                                                </div>
                                            </div>
                                            <button data-repeater-create type="button" class="btn btn-success btn-icon ml-2 mb-2"><i class="ik ik-plus"></i></button>
                                        </form>
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
