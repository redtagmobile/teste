<?php
require __DIR__ . "../../vendor/autoload.php";

use Source\Models\Protection;

Protection::protect();
?>


<!doctype html>
<html class="no-js" lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>SDI</title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="favicon.ico" type="image/x-icon" />
   <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
   <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
   <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
   <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
   <link rel="stylesheet" href="../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap.css">
   <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
   <link rel="stylesheet" href="../plugins/weather-icons/css/weather-icons.min.css">
   <link rel="stylesheet" href="../plugins/c3/c3.min.css">
   <link rel="stylesheet" href="../plugins/owl.carousel/dist/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="../plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
   <link rel="stylesheet" href="../dist/css/theme.min.css">
   <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
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
                     <!-- Mostrar o nivel de acesso  -->
                     <?php include('../includes/mostranivel.php') ?>
                  </div>
                  <!-- <button type="button" class="nav-link ml-10" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button> -->
                  <div class="dropdown">
                     <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/avatar.png" alt=""></a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="Actions/logout.php"><i class="ik ik-power dropdown-icon"></i> Logout</a>
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
                     <!-- <img src="../src/img/brand-white.svg" class="header-brand-img" alt="lavalite">  -->
                  </div>
                  <span class="text">SDI</span>
               </a>
               <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
               <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
            </div>
            <div class="sidebar-content">
               <div class="nav-container">
                  <nav id="main-menu-navigation" class="navigation-main">
                     <div class="nav-lavel">Centro de operações</div>
                     <div class="nav-item active">
                        <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                     </div>
                     <!-- Parte com uso de php -->
                     <!-- Gerar os acessos as configurações no menu lateral -->
                     <?php
                     if ($_SESSION['user'][0]['nivel_acesso'] == 2) {
                        // Menu do administrador
                        include('../includes/administracao.php');
                        // }else if($_SESSION['user'][0]['nivel_acesso'] == 2){
                        //     // Menu do Vendedor
                        //     include('../includes/vendedor.php');
                        // }else if($_SESSION['user'][0]['nivel_acesso'] == 3){
                        //     // Menu do programmer
                        //     include('../includes/master.php');
                        // }else{
                        //     // Menu do administrador loja, mesma coisa não muda nada
                        //     include('../includes/administracao.php');
                     }
                     ?>
                     <div class="nav-item">
                        <div class="nav-lavel">Support</div>
                        <div class="nav-item">
                           <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Contatar Suporte</span></a>
                        </div>
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
           
            <!-- Colocar os ifs indicando os niveis de acesso -->
            <?php include("../includes/administracao-dash.php"); ?>

           


         </div>


      </div>
      <footer class="footer">
         <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block">Copyright © 2021 SDI All Rights Reserved.</span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Jv and Company</a></span>
         </div>
      </footer>
   </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script>
      window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')
   </script>
   <script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
   <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
   <script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
   <script src="../plugins/screenfull/dist/screenfull.js"></script>
   <script src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="../plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   <script src="../plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
   <script src="../plugins/jvectormap/jquery-jvectormap.min.js"></script>
   <script src="../plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
   <script src="../plugins/moment/moment.js"></script>
   <script src="../plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
   <script src="../plugins/d3/dist/d3.min.js"></script>
   <script src="../plugins/c3/c3.min.js"></script>
   <script src="../js/tables.js"></script>
   <script src="../js/widgets.js"></script>
   <script src="../js/charts.js"></script>
   <script src="../dist/js/theme.min.js"></script>
   <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
   <script src="../plugins/axios/axios.js"></script>
   <script src="Mains/administrador_main.js"></script>
   <script src="Mains/vendedor_main.js"></script>
   <script>

   </script>
</body>

</html>