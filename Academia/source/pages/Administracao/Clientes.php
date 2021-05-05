<?php

require __DIR__ ."/../../../vendor/autoload.php";
use Source\Models\Protection;
Protection::Protect();


?>

<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Academia </title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" type="image/png" href="../../../FavIcon/favicon-32x32.png"/>

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="../../../plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="../../../plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="../../../plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="../../../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../../../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../../plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="../../../plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="../../../plugins/c3/c3.min.css">
        <link rel="stylesheet" href="../../../plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="../../../plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="../../../dist/css/theme.min.css">
        <script src="../../../src/js/vendor/modernizr-2.8.3.min.js"></script>

         <!-- Sweetalert JS -->
         <script src="../../Plugins/Sweetalert/Js/sweetalert2.all.min.js"></script>

         <!-- Sweetalert CSS -->
         <script src="../../Plugins/Sweetalert/Css/sweetalert2.min.css"></script>

    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                            
                            <a href=""></a>

                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <!-- <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a> -->
                                <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                    <h4 class="header">Notifications</h4>
                                    <div class="notifications-wrap">
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Invitation accepted</span> 
                                                <span class="media-content">Your have been Invited ...</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Steve Smith</span> 
                                                <span class="media-content">I slowly updated projects</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-calendar"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">To Do</span> 
                                                <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                                </div>
                            </div>
                            <!-- <button type="button" class="nav-link ml-10 right-sidebar-toggle"><i class="ik ik-message-square"></i><span class="badge bg-success">3</span></button> -->
                            <div class="dropdown">

                                <?php if($_SESSION['user'][0]['nivel_acesso_fk'] == 1){?>

                            <a href="#" class="badge badge-info mb-1">Administrador - <?= $_SESSION['user'][0]['nome']?></a>

                                <?php }else if($_SESSION['user'][0]['nivel_acesso_fk'] == 2){ ?>

                            <a href="#" class="badge badge-info mb-1">Vendedor - <?= $_SESSION['user'][0]['nome']?></a>

                                <?php }else{?>

                            <a href="#" class="badge badge-info mb-1"><?= $_SESSION['user'][0]['nome']?></a>

                                    <?php } ?>

                                <!-- <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-plus"></i></a> -->
                                
                            </div>
                            <!-- <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button> -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../../../img/avatar.png" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <!-- <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="ik ik-mail dropdown-icon"></i> Inbox</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-navigation dropdown-icon"></i> Message</a> -->
                                    <a class="dropdown-item" href="../../Actions/logout2.php"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="#">
                            <div class="logo-img">
                            <img src="../../../FavIcon/MOVE FIT 9.png" class="header-brand-img" alt="lavalite" style="width: 30px;"> 
                           </div>
                            <span class="text">Move Fit</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">

                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Centro de operações</div>
                                <div class="nav-item active">
                                    <a href="../../index.php"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <!-- Parte com uso de php -->
                                <!-- Gerar os acessos as configurações no menu lateral -->

                              
                                
                            </nav>
                        </div>
                    </div>
                </div>


                    
              
<!-- inicio menu superior que fica dentro da div principal -->
                <div class="main-content">
                    <div class="container-fluid">
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
                    </div>
<!-- fim menu superior -->



<!-- Dashboards  -->

<div class="col-md-3">
                        <a href="Clientes-Adicionar.php"><button type="button" class="btn btn-outline-success">Adicionar Cliente</button></a>
</div> 
<br>

<div class="container-fluid"> <!--div da tabela-->
        <div class="table-responsive">
            <div class="col-md-12">
                <table id="table" class="table">
                <thead class="thead-dark">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Nascimento</th>
                  <th scope="col">Idade</th>
                  <th scope="col">n_ficha</th>
                  <th scope="col">inicio</th>
                  <th scope="col">reavaliacao</th>
                  <th scope="col">Objetivos</th>
                  
                  <th scope="col"></th>
                  <th scope="col"></th>

                 </tr>
                </thead>
                <tbody id="carregar_tabela_clientes">
               
                </tbody>
                </table>
            </div>
        </div>
    </div> <!-- fecha div da tabela-->





   <?php
   
// var_dump($_SESSION['user'][0]['id_login_academia']);   

   ?>

<input type="hidden" id="id_de_acordo_com_a_loja" value="<?=$_SESSION['user'][0]['id_login_academia']?>">
  

    <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="demoModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
         <form role="form">
               <div class="form-group">
                  <input type="hidden" id="editar_id">
                  <label for="name">
                  Nome do Cliente
                  </label>
                  <input type="text" class="form-control" autocomplete="off" id="editar_nome" />
               </div>

               <br>
               <div class="form-group">
                  <label for="exampleInputPassword1">
                  Data de nascimento
                  </label>
                  <input type="date" class="form-control" id="editar_nascimento" />
               </div>

               <br>
               <div class="form-group">
                  <label for="exampleInputPassword1">
                  Idade
                  </label>
                  <input type="text" class="form-control" id="editar_idade" />
               </div>

               <br>
               <div class="form-group">
                  <label for="exampleInputPassword1">
                  Inicio
                  </label>
                  <input type="date" class="form-control" id="editar_inicio" />
               </div>

               <br>
               <div class="form-group">
                  <label for="exampleInputPassword1">
                  Reavaliação
                  </label>
                  <input type="date" class="form-control" id="editar_reavaliacao" />
               </div>
                  
               <div class="form-group">
                <label for="exampleFormControlTextarea1">Objetivos</label>
                <textarea class="form-control" rows="3" id="editar_objetivos"></textarea>
              </div>

              <br>
               <div class="form-group">
                  <label for="exampleInputPassword1">
                  Email
                  </label>
                  <input type="text" class="form-control" id="editar_email" />
               </div>

               <br>
               <div class="form-group">
                  <label for="exampleInputPassword1">
                  Senha
                  </label>
                  <input type="password" class="form-control" id="editar_senha" placeholder="digite a nova chave de treino"/>
               </div>


               <br>
               <button onclick="UpdateClient()" type="button" class="btn btn-primary">
               Editar
               </button>
            </form>
         </div>
         <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button> -->
         </div>
      </div>
   </div>
</div>
                

                
                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2021 RedTag All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Jv and Company</a></span>
                    </div>
                </footer>
                
            </div>
        </div>
        
        
        

        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>slokdfjloç
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                    
                </div>
            </div>
        </div>






        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="../../../plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../../../plugins/screenfull/dist/screenfull.js"></script>
        <script src="../../../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../../../plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../../../plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="../../../plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="../../../plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../../../plugins/moment/moment.js"></script>
        <script src="../../../plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="../../../plugins/d3/dist/d3.min.js"></script>
        <script src="../../../plugins/c3/c3.min.js"></script>
        <script src="../../../plugins/axios/axios.js"></script>
        
        <script src="../../Mains/administrador_main.js"></script>

        <script src="../../../js/tables.js"></script>
        <script src="../../../js/widgets.js"></script>
        <script src="../../../js/charts.js"></script>
        <script src="../../../dist/js/theme.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       

<script>

carregar_Clientes();

</script>

    </body>
</html>
