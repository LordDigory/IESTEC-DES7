<?php 
include "../controllers/validar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Estadísticas del Congreso</title>

    <script src="../js/Chart.js-2.9.1/dist/Chart.min.js"></script>
    <script src="../js/Chart.js-2.9.1/samples/utils.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="../js/Chart.js-2.9.1/dist/Chart.min.css">


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.png">
    <!-- Pignose Calender 
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">-->
    <!-- Chartist -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../css/estadistica css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="Estadisticas.php">
                    <b class="logo-abbr"><h5 style="color:white">I</h5><!--<img src="../img/logo.png" alt="">--> </b>
                    <span class="logo-compact"><h5 style="color:white">I</h5><!--<img src="../img/logo-compact.png" alt="">--></span>
                    <span class="brand-title">
                        <h4 style="color:white">Estadísticas del Congreso</h4>
                        <!--<img src="../img/logo_transparent.png" alt="" height="30%" width="50%">-->
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Español</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./Estadisticas.php">Estadísticas</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-label">Tabla</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Tabla</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-datatable.php" aria-expanded="false">Tabla de Datos</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Regresar</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Inicio</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../controllers/salir.php" aria-expanded="false">Regresar al inicio</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Entradas Vendidas</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <p class="text-white mb-0">Octubre 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Ganancias</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">$ 8541</h2>
                                    <p class="text-white mb-0">Octubre 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Nuevos Clientes</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <p class="text-white mb-0">Octubre 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Servicio al Cliente</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                                    <p class="text-white mb-0">Octubre 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Asistencia General al Congreso</h4>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="lineChart2" style="padding: 28.8px;"></canvas>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Asistencia a las Distintas Charlas</h4>
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Asistencia de Extranjeros y Nacionales al Congreso</h4>
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>     
                 </div>  
                 <div class="row">         
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                        <h4>Asistencia de Estudiantes Ordenados por Facultad </h4>
                                    <canvas id="horizontalBar"></canvas>
                                </div>
                                <div class="card-body border-top pt-4">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <ul>
                                                <li>86 - Mayor Cantidad de Estudiantes (FII)</li>
                                                <li>12 - Menor Cantidad de Estudiantes (FIE)</li>
                                            </ul>
                                            <div>
                                                <h5>Asistencia Total </h5>
                                                <h3>385749</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                        <h4>Área Laboral de los Participantes</h4>
                                        <canvas id="pieChart"></canvas>
                                </div>
                                <div class="card-body border-top pt-4">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <ul>
                                                <li>300 - Mayor Cantidad de Puntos</li>
                                                <li>40 -  Menor Cantidad de Puntos</li>
                                            </ul>
                                            <div>
                                                <h5>Total de Puntos por Área</h5>
                                                <h3>385749</h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="chart_widget_3_1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
        </div>
    </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>

    <!-- Chartjs 
    <script src="../plugins/chart.js/Chart.bundle.min.js"></script>-->
    <!-- Circle progress 
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>-->
    <!-- Datamap 
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    Morrisjs 
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>-->
    <!-- Pignose Calender 
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>-->
    <!-- ChartistJS -->
    <script src="../plugins/chartist/js/chartist.min.js"></script>
    <script src="../plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="../js/grafica1.js"></script>
    <script src="../js/grafica2.js"></script>
    <script src="../js/grafica3.js"></script>
    <script src="../js/grafica4.js"></script>
    <script src="../js/grafica5.js"></script>



    <script src="../js/dashboard/dashboard-1.js"></script>

</body>

</html>