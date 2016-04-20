<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no" />

  <title>KoolKontact - Login</title>


  {!! HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! HTML::style('bower_components/font-awesome/css/font-awesome.min.css') !!}
      {!! HTML::style('bower_components/Waves/dist/waves.min.css') !!}
  



  {!! HTML::style('css/style.css') !!}
  <link rel="icon" href="/img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
  <!--[if lt IE 9]>
      <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
      <script src="bower_components/respondJs/dest/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>
      <div class="table-wrapper">
        <div class="table-row">
          <div class="table-cell text-center">
            <div class="login i-block">
              <div class="content-box">
                <div class="light-blue-bg biggest-box">

                  <h1 class="zero-m text-uppercase">Bienvenido</h1>

              </div>
              <div class="big-box text-left login-form">
                  <h4 class="text-center">Recuperación de Contraseña</h4>


                  @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input type="email" class="form-control material" name="email" placeholder="Correo" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-envelope"></i> Enviar recuperación
                            </button>
                        </div>
                    </div>
                </form>


                <!-- <p>Do not have an account?</p> -->
<!--               <a class="btn btn-block btn-warning text-uppercase waves waves-button">Create an account</a>
-->            </div>
</div>
</div>
</div>
</div>
</div>


{!! HTML::script('bower_components/jquery/dist/jquery.min.js') !!}
{!! HTML::script('bower_components/Waves/dist/waves.min.js') !!}

<script>

    Waves.attach('.waves', ['waves-float']);
    Waves.init();
</script>

</body>


</html>





