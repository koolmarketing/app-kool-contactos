<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no" />

  <title>KoolKontact - Login</title>


  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Waves/dist/waves.min.css">


  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
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
                  <h4 class="text-center">Login</h4>
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="form-group">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                       
                                <input type="email" placeholder="Correo" class="form-control material" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">                            
                            <input type="password" placeholder="Contraseña" class="form-control material" name="password">

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            
                        </div>

                    </div>
                    

                  <button type="submit" class="btn btn-block btn-info text-uppercase waves">Ingresar</button>

              </form>
              <a href="{{ url('/password/reset') }}" class="green i-block">Olvidaste tu contraseña?</a>
              <!-- <p>Do not have an account?</p> -->
<!--               <a class="btn btn-block btn-warning text-uppercase waves waves-button">Create an account</a>
-->            </div>
</div>
</div>
</div>
</div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/Waves/dist/waves.min.js"></script>
<script>

    Waves.attach('.waves', ['waves-float']);
    Waves.init();
</script>

</body>


</html>




