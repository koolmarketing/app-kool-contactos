@extends('layouts.master')
@section('add_styles')

    {!! HTML::style('css\awesome-bootstrap-checkbox.css') !!}
    {!! HTML::style('vendor\picEdit-master\dist\css\picedit.min.css') !!}
    {!! HTML::style('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.css') !!}

    {!! HTML::style('vendor\select2-master\dist\css\select2.css') !!}
@stop
@section('content')

    <div class="container-fluid">





        <div class="col-lg-7">


            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#datos" aria-controls="datos" role="tab" data-toggle="tab">Datos Básicos</a></li>
                <li role="presentation"><a href="#representante" aria-controls="representante" role="tab" data-toggle="tab">Representante</a></li>
                <li role="presentation"><a href="#comercial" aria-controls="comercial" role="tab" data-toggle="tab">Comercial</a></li>
                <li role="presentation"><a href="#soporte" aria-controls="soporte" role="tab" data-toggle="tab">Soporte</a></li>
                <li role="presentation"><a href="#redes" aria-controls="redes" role="tab" data-toggle="tab">Redes</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Guardar</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="datos">
                    <div class="content-box big-box box-shadow">

                        <div class="col-md-6">
                            <input type="file" name="thefile" id="thebox">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control material" id="" placeholder="">
                                <p class="help-text">Nombre</p>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control material" id="" placeholder="">
                                <p class="help-text">NIT</p>
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <select name="" id="" class="form-control material">
                                <option value=""></option>
                                <option value="">Servicios</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                            <p class="help-text">Sector</p>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control material" id="input3" >
                            <p class="help-text">Ciudad, País</p>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control material" id="" placeholder="">
                            <p class="help-text">Dirección</p>
                        </div>


                        <br><br>



                    </div>


                </div>
                <div role="tabpanel" class="tab-pane" id="representante">
                    <div class="content-box big-box box-shadow">

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control material">
                            <p class="help-text">Nombre</p>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control material">
                            <p class="help-text">Cargo</p>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Email</p>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Celular</p>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Teléfono Fijo</p>
                        </div>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="comercial">
                    <div class="content-box big-box box-shadow">

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control material">
                            <p class="help-text">Nombre</p>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control material">
                            <p class="help-text">Cargo</p>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Email</p>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Celular</p>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Teléfono Fijo</p>
                        </div>
                    </div>
                </div>


                <div role="tabpanel" class="tab-pane" id="soporte">
                    <div class="content-box big-box box-shadow">

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control material">
                            <p class="help-text">Nombre</p>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control material">
                            <p class="help-text">Cargo</p>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Email</p>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Celular</p>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control material">
                            <p class="help-text">Teléfono Fijo</p>
                        </div>

                    </div>

                </div>



                <div role="tabpanel" class="tab-pane" id="redes">
                    <div class="content-box big-box box-shadow">
                        <div class="form-group col-md-2">
                            <h3>Gmail</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>


                        <div class="form-group col-md-2">
                            <h3>Zohomail</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>


                        <div class="form-group col-md-2">
                            <h3>Facebook</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>


                        <div class="form-group col-md-2">
                            <h3>Twitter</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>

                        <div class="form-group col-md-2">
                            <h3>Youtube</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>

                        <div class="form-group col-md-2">
                            <h3>Instagram</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>

                        <div class="form-group col-md-2">
                            <h3>Linkedin</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>

                        <div class="form-group col-md-2">
                            <h3>Hootsuite</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>

                        <div class="form-group col-md-2">
                            <h3>A.I</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>

                        <div class="form-group col-md-2">
                            <h3>Photosnack</h3>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>

                        <div class="form-group col-md-2">
                            <h3>FTP</h3>
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" class="form-control material">
                            <p class="help-text">Server</p>
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" class="form-control material">
                            <p class="help-text">Usuario</p>
                        </div>

                        <div class="form-group col-md-3">
                            <input type="text" class="form-control material">
                            <p class="help-text">Contraseña</p>
                        </div>

                </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="content-box big-box box-shadow">


                        <button class="btn btn-lg btn-info pull-right">Guardar Empresa</button>
                    </div>



                </div>
            </div>







        </div>


    </div>
@stop

@section('add_scripts')
    {!! HTML::script('vendor\picEdit-master\dist\js\picedit.min.js') !!}
    {!! HTML::script('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.js') !!}
    {!! HTML::script('js/mask.js') !!}






@stop