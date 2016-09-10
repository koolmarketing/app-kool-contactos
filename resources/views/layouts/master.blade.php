<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" id="token" content="<?php echo csrf_token(); ?>">
    <meta name="msapplication-tap-highlight" content="no" />

    <title>KOOLKONTACT</title>

    {!! HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! HTML::style('bower_components/font-awesome/css/font-awesome.min.css') !!}
    {!! HTML::style('bower_components/mdi/css/materialdesignicons.min.css') !!}
    {!! HTML::style('bower_components/metisMenu/dist/metisMenu.min.css') !!}
    {!! HTML::style('bower_components/Waves/dist/waves.min.css') !!}
    {!! HTML::style('bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') !!}
    {!! HTML::style('js/selects/cs-select.css') !!}
    {!! HTML::style('js/selects/cs-skin-elastic.css') !!}
    {!! HTML::style('bower_components/c3/c3.min.css') !!}
    {!! HTML::style('bower_components/zabuto_calendar/zabuto_calendar.min.css') !!}
    {!! HTML::style('css/style.css') !!}
    {!! HTML::script('js/menu/modernizr.custom.js') !!}
    {!! HTML::style('fontello/css/fontello.css') !!}
    {!! HTML::style('bower_components/sweetalert/dist/sweetalert.css') !!}
    {!! HTML::style('css/main.css') !!}




    <link rel="icon" href="{!! URL::to('img/favicon.ico')!!}" type="image/x-icon" />
    <link rel="shortcut icon" href="{!! URL::to('img/favicon.ico')!!}"  type="image/x-icon" />
    <!--[if lt IE 9]>
    {!! HTML::script('bower_components/html5shiv/dist/html5shiv.min.js') !!}
    {!! HTML::script('bower_components/respondJs/dest/respond.min.js') !!}

    <![endif]-->
    @yield('add_styles')

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
                                <input placeholder="Buscar" type="search" class="gn-search">
                                <a class="search-icon"><i class="fa fa-search"></i><span>Buscar</span></a>
                            </li>

                            <li>
                                <a href="{!! URL::to('empresas') !!}"><i class="fa fa-building-o"></i> Contactos
                                </a>
                            </li> 
                           {{--  <li>
                                <a href="{!! URL::to('crm') !!}"><i class="fa fa-child"></i> CRM</a>
                            </li> --}}
                           
                            <li>
                                <a href="{!! URL::to('nuevo-reporte') !!}"><i class="fa fa-bar-chart"></i> Reportes</a>
                            </li>
                     
                            <li>
                                <a href="{!! URL::to('mi_cuenta') !!}"><i class="icon-user-3"></i> Mi Cuenta</a>
                            </li>
                            <li>
                                <a href="{!! URL::to('usuarios') !!}"><i class="fa fa-wrench"></i> Configuración</a>
                            </li>



                     <!--    <li>
                            <a href="#"><i class="fa fa-calendar-o"></i>Calendar<span class="label label-warning pull-right">9</span></a>
                        </li> -->


                    </ul>
                </div>
                <!-- /gn-scroller -->
                <div class="bottom-bnts">
                    <a class="profile" href="#"><i class="mdi mdi-account"></i></a>
                    <a class="fix-nav" href="#"><i class="mdi mdi-pin"></i></a>
                    <a class="logout" href="{!! URL::to('/logout') !!}"><i class="mdi mdi-power"></i></a>
                </div>
            </nav>
        </li>
        <li>
            <a href="{!! URL::to('/') !!}" class="logo text-uppercase">KoolKontact<i class="fa fa-toggle-on"></i></a>
        </li>
        <li class="top-clock">
            <span class="current-time"></span>
        </li>

        <li class="container-fluid pull-right">
            <ul class="nav navbar-right right-menu">       
              <li class="lang">
                  <div class="cs-select cs-skin-elastic" tabindex="0">Hola {!! Auth::user()->name; !!} </div></li>      
              </ul>
          </li>

      </ul>

      <!--Content-->
      <div id="content" class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header col-md-10">
                    @if ($data->page=="Home")
                    <h2>{!! $data->page !!}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{!! URL::to('/') !!}">Home /</a></li>                      
                    </ol>
                    @else
                    <h2>{!! $data->page !!}</h2>
                    <ol class="breadcrumb">
                        <li><a href="{!! URL::to('/') !!}">Home</a></li>
                        <li>{!! $data->page !!}</li>
                    </ol>
                    @endif                 
                </div>
            </div>
        </div>

        <div class="row">
            @yield('content')
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
                            <h3 class="zero-m text-uppercase">Quieres Salir?</h3>
                            <a href="{!! URL::to('/logout') !!}" class="i-block" data-dismiss="modal">Si</a>
                            <a href="#" class="i-block" data-dismiss="modal">No</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Scripts-->
<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
{!! HTML::script('js/jquery-2.2.3.min.js') !!}
{!! HTML::script('bower_components\bootstrap\dist\js\bootstrap.min.js') !!}
{!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js') !!}
{!! HTML::script('bower_components/metisMenu/dist/metisMenu.min.js') !!}
{!! HTML::script('bower_components/Waves/dist/waves.min.js') !!}
{!! HTML::script('bower_components/moment/min/moment.min.js') !!}
{!! HTML::script('bower_components/jquery.nicescroll/jquery.nicescroll.min.js') !!}
{!! HTML::script('bower_components/slimScroll/jquery.slimscroll.min.js') !!}
{!! HTML::script('bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js') !!}
{!! HTML::script('bower_components/cta/dist/cta.min.js') !!}
{!! HTML::script('js/menu/classie.js') !!}
{!! HTML::script('js/menu/gnmenu.js') !!}
{!! HTML::script('js/selects/selectFx.js') !!}
{!! HTML::script('js/jquery.nicescroll.min.js') !!}
{!! HTML::script('js/common.js') !!}
{!! HTML::script('bower_components/sweetalert/dist/sweetalert.min.js') !!}

@yield('add_scripts')

</body>

</html>
