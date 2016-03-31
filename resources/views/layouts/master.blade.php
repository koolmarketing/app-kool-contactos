<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no" />

    <title>KOOLKONTACT</title>


    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="bower_components/metisMenu/dist/metisMenu.min.css">
    <link rel="stylesheet" href="bower_components/Waves/dist/waves.min.css">
    <link rel="stylesheet" href="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="js/selects/cs-select.css">
    <link rel="stylesheet" href="js/selects/cs-skin-elastic.css">

    <link rel="stylesheet" href="bower_components/c3/c3.min.css">
    <link rel="stylesheet" href="bower_components/zabuto_calendar/zabuto_calendar.min.css">
    <script src="js/menu/modernizr.custom.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 9]>
    <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="bower_components/respondJs/dest/respond.min.js"></script>
    <![endif]-->
</head>


<body>
<!--Preloader-->
<div id="preloader" class="preloader table-wrapper">
    <div class="table-row">
        <div class="table-cell">
            <div class="la-ball-scale-multiple la-3x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>

<div id="main-wrapper" class="main-wrapper">

    <ul id="gn-menu" class="navbar gn-menu-main">
        <li class="gn-trigger">
            <a id="menu-toggle" class="menu-toggle gn-icon gn-icon-menu">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="cross">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <nav class="gn-menu-wrapper">
                <div class="gn-scroller">
                    <ul class="gn-menu metismenu">
                        <li class="gn-search-item">
                            <input placeholder="Search" type="search" class="gn-search">
                            <a class="search-icon"><i class="fa fa-search"></i><span>Buscar</span></a>
                        </li>
                        <li>
                            <a href="grids.html">
                                <i class="fa fa-desktop"></i>Contactos
                            </a>
                        </li>
                        <li>
                            <a href="grids.html">
                                <i class="fa fa-desktop"></i>Empresas
                            </a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-calendar-o"></i>Calendar<span class="label label-warning pull-right">9</span></a>
                        </li>


                    </ul>
                </div>
                <!-- /gn-scroller -->
                <div class="bottom-bnts">
                    <a class="profile" href="#"><i class="mdi mdi-account"></i></a>
                    <a class="fix-nav" href="#"><i class="mdi mdi-pin"></i></a>
                    <a class="logout" href="#"><i class="mdi mdi-power"></i></a>
                </div>
            </nav>
        </li>
        <li>
            <a href="index.html" class="logo text-uppercase">KoolKontact<i class="fa fa-toggle-on"></i></a>
        </li>
        <li class="top-clock">
            <span class="current-time"></span>
        </li>

    </ul>

    <!--Content-->
    <div id="content" class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Dashboards</li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>





        <!--Footer-->
        <div class="footer">© Koolmarketing - 2016 Copyright</div>
    </div>

    <!--Welcome notification-->
    <div id="welcome"></div>

    <!--Members Sidebar-->


</div>

<div class="login-modal modal fade">
    <div class="table-wrapper">
        <div class="table-row">
            <div class="table-cell text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="login i-block">
                    <div class="content-box">
                        <div class="light-blue-bg biggest-box">

                            <h1 class="zero-m text-uppercase">Welcome</h1>

                        </div>
                        <div class="big-box text-left login-form">
                            <h4 class="text-center">Login</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control material" id="login" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control material" id="password" placeholder="Password">
                                </div>

                                <button type="submit" class="btn btn-block btn-info text-uppercase waves">Login</button>

                            </form>
                            <a href="#" class="green i-block">Forgot password?</a>
                            <p>Do not have an account?</p>
                            <a class="btn btn-block btn-warning text-uppercase waves waves-button">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="logout-modal modal fade">
    <div class="table-wrapper">
        <div class="table-row">
            <div class="table-cell text-center">
                <div class="login i-block">
                    <div class="content-box">
                        <div class="light-blue-bg biggest-box">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3 class="zero-m text-uppercase">Do you want to exit?</h3>
                            <a href="#" class="i-block" data-dismiss="modal">Yes</a>
                            <a href="#" class="i-block" data-dismiss="modal">No</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Scripts-->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="bower_components/Waves/dist/waves.min.js"></script>
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
<script src="bower_components/slimScroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
<script src="bower_components/cta/dist/cta.min.js"></script>

<!--Menu-->
<script src="js/menu/classie.js"></script>
<script src="js/menu/gnmenu.js"></script>

<!--Selects-->
<script src="js/selects/selectFx.js"></script>



<!--Custom Scripts-->
<script src="js/common.js"></script>



</body>

</html>
