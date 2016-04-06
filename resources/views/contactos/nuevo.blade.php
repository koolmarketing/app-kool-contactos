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
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos Básicos</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Iformación Profesional</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Datos de Contacto</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Información Personal</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="content-box big-box box-shadow">

                    <div class="col-md-6">
                        <input type="file" name="thefile" id="thebox">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control material" id="" placeholder="">
                            <p class="help-text">Nombres.</p>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control material" id="" placeholder="">
                            <p class="help-text">Apellidos</p>
                        </div>
                    </div>


                    <div class="form-group col-md-3">
                        <input type="text" class="form-control material date" id="" placeholder="">
                        <p class="help-text">Fecha de Nacimiento</p>
                    </div>

                    <div class="form-group col-lg-3">

                        <div class="form-group">
                            <div class="radio radio-info radio-inline">
                                <input type="radio" id="inlineRadio1" value="male" name="gender" checked="">
                                <label for="inlineRadio1" class="text-p-orders"> Hombre </label>
                            </div>
                            <div class="radio radio-danger radio-inline">
                                <input type="radio" id="inlineRadio2" value="female" name="gender">
                                <label for="inlineRadio2" class="text-p-orders"> Mujer </label>
                            </div>
                        </div>

                    </div>
<br><br>

                    <div class="form-group col-md-6">
                        <input type="text" class="form-control material" id="input3" >
                        <p class="help-text">Ciudad Actual</p>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control material" id="input4" >
                        <p class="help-text">Ciudad Natal</p>
                    </div>
                </div>


            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="content-box big-box box-shadow">

                <div class="form-group col-md-4">
                    <input type="text" class="form-control material">
                    <p class="help-text">Profesión</p>
                </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material">
                        <p class="help-text">Empresa Actual</p>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material">
                        <p class="help-text">Cargo</p>
                    </div>




                    </div>

            </div>

            <div role="tabpanel" class="tab-pane" id="messages">
                <div class="content-box big-box box-shadow">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control material" data-mask="000-00-00" data-mask-clearifnotmatch="true">
                    <p class="help-text">Teléfono Oficina</p>
                </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material" data-mask="(000) 000-0000" data-mask-clearifnotmatch="true">
                        <p class="help-text">Teléfono Móvil</p>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material" data-mask="000-00-00" data-mask-clearifnotmatch="true">
                        <p class="help-text">Teléfono Casa</p>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material">
                        <p class="help-text">Email Corporativo</p>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material">
                        <p class="help-text">Email Personal</p>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material">
                        <p class="help-text">Skype</p>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="url" class="form-control material" placeholder="https://...">
                        <p class="help-text">Facebook</p>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material" placeholder="Usuario">
                        <p class="help-text">Twitter</p>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control material" placeholder="https://...">
                        <p class="help-text">Linkedin</p>
                    </div>

                    </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="content-box big-box box-shadow">

                <div class="form-group col-md-6">
                    <input type="text" class="form-control material  form_tags" placeholder="">
                    <p class="help-text">Intereses</p>
                </div>

                    <div class="form-group col-md-6">
                        <input type="text" class="form-control material  form_tags" placeholder="">
                        <p class="help-text">Hobbits</p>
                    </div>

                    <div class="form-group col-md-4">
                        <select name="" id="" class="form-control material">
                            <option value="">Catolico</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                        <p class="help-text">Religión</p>
                    </div>

                    <div class="form-group col-md-4">
                        <select name="" id="" class="form-control material">
                            <option value="">Casado</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                        <p class="help-text">Situación Sentimental</p>
                    </div>

                    <div class="form-group col-md-4">
                        <select name="" id="" class="form-control material">
                            <option value="">Heterosexual</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                            <option value="">1</option>
                        </select>
                        <p class="help-text">Orientación S.</p>
                    </div>

                    <br>

                    <button class="btn btn-lg btn-info pull-right">Guardar</button>
                    </div>



            </div>
        </div>







    </div>

    <!---  COMENTARIOS  -->
<div class="col-lg-5 hidden-xs hidden-sm">
    <div class="col-lg-12">
        <div class="content-box biggest-box blue-bg">
            <div class="pull-left">
                <span class="block">Pageviews</span>
                <h1 class="text-uppercase zero-m">28,473,585</h1>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="content-box biggest-box green-bg">
            <div class="pull-left">
                <span class="block">Visitors</span>
                <h1 class="text-uppercase zero-m">19,594,958</h1>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="content-box biggest-box red-bg">
            <div class="pull-left">
                <span class="block">Sales</span>
                <h1 class="text-uppercase zero-m">$274,392,374</h1>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


</div>
    @stop

@section('add_scripts')
{!! HTML::script('vendor\picEdit-master\dist\js\picedit.min.js') !!}
{!! HTML::script('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.js') !!}
{!! HTML::script('js/mask.js') !!}

{!! HTML::script('vendor\select2-master\dist\js\select2.min.js') !!}

    <script>
        $(document).ready(function() {
            //Mascara
            $('.date').mask('00/00/0000');

                $('#thebox').picEdit();

            $(".form_tags").tagsinput('items');
            $(".multi_tags").select2();

        });
    </script>



@stop