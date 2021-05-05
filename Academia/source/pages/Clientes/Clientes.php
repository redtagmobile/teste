<?php

require __DIR__ ."/../../../vendor/autoload.php";
use Source\Models\Protection;
Protection::Protect();


?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Move Fit</title>
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

   
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#">Link</a> -->
      </li>
     
      <li class="nav-item">
        <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
      </li>
    </ul>
   
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <a href="../../Actions/logout.php">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
      </a>

  </div>
</nav>

<?php

// var_dump($_SESSION['user'][0]);

?>



<div class="card">
<input type="hidden" id="id_do_client" value="<?= $_SESSION['user'][0]['id_login_academia'] ?>">
                                    <div class="card-header d-block">
                                        <h3><?= $_SESSION['user'][0]['nome'] ?></h3>
                                        <span>Ficha de Treino</span><br>
                                        <span>Inicio: <?= date( 'd-m-Y' , strtotime( $_SESSION['user'][0]['inicio']) ) ?></span><br>
                                        <span>Reavaliação:<?= date( 'd-m-Y' , strtotime( $_SESSION['user'][0]['reavaliacao']) )?></span>
                                    </div>
                                    <div class="card-body p-0 table-border-style">
                                        <div class="table-responsive">
                                           

                                        <div id="div_table">
                                        
                                        </div>
                                        
                                            <!-- <table class="table table-hover" id="aTable">
                                                 <thead id="thead">
                                                    <tr>
                                                        <th><span class="badge badge-pill badge-dark mb-1">Peito</span></th>
                                                        <th>Séries</th>
                                                        <th>Repetições</th>
                                                        <th>Carga</th>
                                                    </tr>
                                                </thead>
                                                 <tbody id="carregar_subtreinos">
                                                   <tr>
                                                        <th scope="row">Supino Reto</th>
                                                        <td>3</td>
                                                        <td>10</td>
                                                        <td>120kg</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Cross Over</th>
                                                        <td>4</td>
                                                        <td>12</td>
                                                        <td>20kg</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pull Over</th>
                                                        <td>5</td>
                                                        <td>20</td>
                                                        <td>12kg</td>
                                                    </tr>
                                                </tbody>
                                            </table> -->

                                            



                                        </div>
                                    </div>
</div>






<div>
<h1 id="no_name"></h1>
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
        <script src="../../../js/tables.js"></script>
        <script src="../../../js/widgets.js"></script>
        <script src="../../../js/charts.js"></script>
        <script src="../../../dist/js/theme.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script src="../../../plugins/axios/axios.js"></script>
        
        <script src="../../Mains/cliente_main.js"></script>


<script>

chama_treino();
</script>


    </body>
</html>
