@extends('layouts.master')
@section('add_styles')

{!! HTML::style('css\awesome-bootstrap-checkbox.css') !!}
{!! HTML::style('vendor\picEdit-master\dist\css\picedit.min.css') !!}
{!! HTML::style('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.css') !!}
{!! HTML::style('vendor\select2-master\dist\css\select2.css') !!}
{!! HTML::style('bower_components/ion.rangeslider/css/ion.rangeSlider.css') !!}
@stop
@section('content')

<div class="container-fluid">
<div class="col-md-8 col-md-offset-2">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#datos" aria-controls="datos" role="tab" data-toggle="tab">Datos Básicos</a></li>
      <li role="presentation"><a href="#representante" aria-controls="representante" role="tab" data-toggle="tab">Representante</a></li>
      <li role="presentation"><a href="#comercial" aria-controls="comercial" role="tab" data-toggle="tab">Comercial</a></li>
      <li role="presentation"><a href="#soporte" aria-controls="soporte" role="tab" data-toggle="tab">Soporte</a></li>
      <li role="presentation"><a href="#filosofia" aria-controls="filosofia" role="tab" data-toggle="tab">Filosofia</a></li>
      <li role="presentation"><a href="#redes" aria-controls="redes" role="tab" data-toggle="tab">Redes</a></li>
      <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Guardar</a></li>
    </ul>


    <!-- Tab panes -->
    {!!Form::open(array('action' => 'ContactoController@SaveCompany', 'method' => 'post', 'id' => 'save_company','files'=>true));!!}
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="datos">
        <div class="content-box big-box box-shadow">
                  <!--   <div class="col-md-6">
                        <input type="file" name="imagen" id="thebox">
                      </div> -->

                      <div class="col-md-6"><br>
                       <div class="col-md-12">
                        <input type="file" name="foto">
                        <p class="help-text">Una foto</p>
                      </div>
                      <br>
                      <div class="form-group col-md-12">
                        <input type="text" name="fecha_fundacion" class="form-control material date" id="" placeholder="">
                        <p class="help-text">Fundacion (dd-mm-aaaa)</p>
                      </div>

                    </div>                
                    <div class="col-md-6">
                      <div class="row item">
                        <div class="col-md-12">
                          <input type="text" id="range" name="rango" value="">
                          <p class="help-text">Rango</p> 
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <input type="text" name="nombre_comercial" class="form-control material" id="" placeholder="">
                      <p class="help-text">Nombre Comercial</p>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" name="razon_social" class="form-control material" id="" placeholder="">
                      <p class="help-text">Razón Social</p>
                    </div>

                    <div class="form-group col-md-4">
                      <input type="text" name="nit" class="form-control material" id="" placeholder="">
                      <p class="help-text">NIT</p>
                    </div>
                    <div class="form-group col-md-6">
                      <select  id="servicios" name="servicios[]" class="form-control material" multiple="multiple">
                        <optgroup label="Arte y Marketing">
                          <option value="Diseño Gráfico">Diseño Gráfico</option>
                          <option value="Editor">Editor</option>
                          <option value="Fotógrafo">Fotógrafo</option>
                          <option value="Radiodifusión y Producción">Radiodifusión y Producción</option>
                          <option value="Servicio de Entretenimiento">Servicio de Entretenimiento</option>
                        </optgroup>
                        <optgroup label="Bricolage">
                          <option value="Artículos de Cocina">Artículos de Cocina</option>
                          <option value="Caravanas">Caravanas</option>
                          <option value="Centro de jardinería">Centro de jardinería</option>
                          <option value="Colchones y ropa de cama">Colchones y ropa de cama</option>
                          <option value="Contratista">Contratista</option>
                          <option value="Decoración de interiores">Decoración de interiores</option>
                          <option value="Diseñador de interiores">Diseñador de interiores</option>
                          <option value="Electricista">Electricista</option>
                          <option value="Mudanza">Mudanza</option>
                          <option value="Paisajismo">Paisajismo</option>
                          <option value="Pintor">Pintor</option>
                          <option value="Plomero">Plomero</option>
                          <option value="Servicio de limpieza">Servicio de limpieza</option>
                          <option value="Terrazas y patios">Terrazas y patios</option>
                          <option value="Utensilios domésticos">Utensilios domésticos</option>
                        </optgroup>
                        <optgroup label="Medicina y Salud">
                          <option value="Atención prenatal y partos">Atención prenatal y partos</option>
                          <option value="Cirugía plástica">Cirugía plástica</option>
                          <option value="Clínica">Clínica</option>
                          <option value="Consulta psicológica y salud">Consulta psicológica y salud</option>
                          <option value="Dentista">Dentista</option>
                          <option value="Doctor">Doctor</option>
                          <option value="Farmacia">Farmacia</option>
                          <option value="Hospital">Hospital</option>
                          <option value="Medicina alternativa">Medicina alternativa</option>
                          <option value="Nutricionista">Nutricionista</option>
                          <option value="Salud de la mujer">Salud de la mujer</option>
                          <option value="Terapeuta físico">Terapeuta físico</option>
                        </optgroup>
                        <optgroup label="Organización de eventos">
                          <option value="Animador">Animador</option>
                          <option value="Bandas y músicos">Bandas y músicos</option>
                          <option value="DJ">DJ</option>
                          <option value="Organización de bodas">Organización de bodas</option>
                          <option value="Organización de eventos">Organización de eventos</option>
                          <option value="Salón de eventos">Salón de eventos</option>
                          <option value="Servicio de comidas a domicilio">Servicio de comidas a domicilio</option>
                        </optgroup>
                        <optgroup label="Sector Automotriz">
                          <option value="Autopartes y accesorios">Autopartes y accesorios</option>
                          <option value="Autos de Carreras">Autos de Carreras</option>
                          <option value="Concesionaria">Concesionaria</option>
                          <option value="Lavado y encerado de autos">Lavado y encerado de autos</option>
                          <option value="Motocicletas">Motocicletas</option>
                          <option value="Personalización de automóviles">Personalización de automóviles</option>
                          <option value="Reparación automotriz">Reparación automotriz</option>
                        </optgroup>
                        <optgroup label="Servicio para mascotas">
                          <option value="Caballos">Caballos</option>
                          <option value="Criador de mascotas">Criador de mascotas</option>
                          <option value="Entrenamiento de perros">Entrenamiento de perros</option>
                          <option value="Peluquería para mascotas">Peluquería para mascotas</option>
                          <option value="Refugio de animales">Refugio de animales</option>
                          <option value="Tienda de mascotas">Tienda de mascotas</option>
                          <option value="Veterinario">Veterinario</option>
                        </optgroup>
                        <optgroup label="Servicio de estilo de vida">
                          <option value="Autopartes y accesorios">Autopartes y accesorios</option>
                          <option value="Autos de carreras">Autos de carreras</option>
                          <option value="Cuidado de niños">Cuidado de niños</option>
                          <option value="Entrenamiento personal"></option>
                          <option value="Psíquico">Psíquico</option>
                          <option value="Servicio de citas">Servicio de citas</option>
                        </optgroup>
                        <optgroup label="Servicios empresariales">
                          <option value="Agencia de empleos">Agencia de empleos</option>
                          <option value="Asesor comercial">Asesor comercial</option>
                          <option value="Proveedor de servicios de internet">Proveedor de servicios de internet</option>
                          <option value="Servicio de entretenimieno">Servicio de entretenimieno</option>
                          <option value="Servicio de impresión">Servicio de impresión</option>
                          <option value="Servicio de publicidad">Servicio de publicidad</option>
                          <option value="Servicio de transporte">Servicio de transporte</option>
                          <option value="Servicio de informática">Servicio de informática</option>  
                        </optgroup>
                        <optgroup label="Servicios financieros">
                          <option value="Agente de seguros">Agente de seguros</option>
                          <option value="Agentes hipotecarios">Agentes hipotecarios</option>
                          <option value="Contador">Contador</option>
                          <option value="Intercambio de divisas">Intercambio de divisas</option>
                          <option value="Planificación financiera">Planificación financiera</option>
                          <option value="Preparación de la declaración de renta"></option>
                          <option value="Préstamos">Préstamos</option>
                        </optgroup>
                        <optgroup label="Spa, belleza y cuidado personal">
                          <option value="Cosmeticos y productos de belleza">Cosmeticos y productos de belleza</option>
                          <option value="Cuidado de la piel">Cuidado de la piel</option>
                          <option value="Estética">Estética</option>
                          <option value="Masaje">Masaje</option>
                          <option value="Peluquería">peluquería</option>
                          <option value="Salón de belleza">Salón de belleza</option>
                          <option value="Salón de uñas">Salón de uñas</option>
                          <option value="Spa">Spa</option>
                          <option value="Tatuajes y piercings"></option>
                        </optgroup>

                      </select>
                      <p class="help-text">Servicios</p>
                    </div>

                    <div class="form-group col-md-6">
                      <select id="sector" name="sector" class="form-control material">
                        @foreach ($data->sectores as $sectores)
                        <option value="{!! $sectores->nombre !!}">{!! $sectores->nombre !!}</option>
                        @endforeach
                      </select>
                      <p class="help-text">Sector Economico</p>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group col-md-4">
                        <input type="text" class="form-control material" name="telefono_1" id="" placeholder="">
                        <p class="help-text">1er. Teléfono de la empresa</p>
                      </div>   
                      <div class="form-group col-md-4">
                        <input type="text" class="form-control material" name="telefono_2" id="" placeholder="">
                        <p class="help-text">2do. Teléfono de la empresa</p>
                      </div>  
                      <div class="form-group col-md-4">
                        <input type="text" class="form-control material" name="sitio_web" id="" placeholder="">
                        <p class="help-text">Sitio Web</p>
                      </div>  
                    </div>

                    <div class="form-group col-md-5">
                      <input type="text" class="form-control material" name="ciudad_pais" id="geocomplete" >
                      <p class="help-text">Ciudad, País</p>
                    </div>
                    <div class="form-group col-md-5">
                      <input type="text" class="form-control material" name="direccion" id="" placeholder="">
                      <p class="help-text">Dirección</p>
                    </div>
                    <br><br>
                  </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="representante">
                  <div class="content-box big-box box-shadow">
                   <div class="form-group col-md-2">                            
                     <select name="representante[sexo][]" id="" class="form-control material">
                      <option value="hombre">Hombre</option>
                      <option value="mujer">Mujer</option>
                    </select>
                    <p class="help-text">Sexo</p>
                  </div>
                  <div class="form-group col-md-2">                            
                    <select name="representante[trato][]" id="" class="form-control material">
                      <option value="Srta.">Srta.</option>  
                      <option value="Sra.">Sra.</option>  
                      <option value="Sr.">Sr.</option>                                
                      <option value="Dr.">Dr.</option>
                      <option value="Dra.">Dra.</option>
                      <option value="Lic.">Lic.</option>
                    </select>
                    <p class="help-text">Trato</p>
                  </div>
                  <div class="form-group col-md-4">
                    <input name="representante[nombre][]" type="text" class="form-control material">
                    <p class="help-text">Nombre</p>
                  </div>
                  <div class="form-group col-md-4">
                    <input name="representante[cargo][]" type="text" class="form-control material">
                    <p class="help-text">Cargo</p>
                  </div>
                  <div class="form-group col-md-4">
                    <input name="representante[email][]" type="text" class="form-control material">
                    <p class="help-text">Email</p>
                  </div>
                  <div class="form-group col-md-4">
                    <input name="representante[celular][]" type="text" class="form-control material">
                    <p class="help-text">Celular</p>
                  </div>
                  <div class="form-group col-md-4">
                    <input name="representante[telefono][]" type="text" class="form-control material">
                    <p class="help-text">Teléfono Fijo</p>
                  </div>
                </div>

              </div>

              <div role="tabpanel" class="tab-pane" id="comercial">
                <div class="content-box big-box box-shadow">

                  <div class="form-group col-md-2">                            
                    <select name="comercial[sexo][]" id="" class="form-control material">
                      <option value="hombre">Hombre</option>
                      <option value="mujer">Mujer</option>
                    </select>
                    <p class="help-text">Sexo</p>
                  </div>

                  <div class="form-group col-md-2">                            
                    <select name="comercial[trato][]" id="" class="form-control material">
                      <option value="Srta.">Srta.</option>  
                      <option value="Sra.">Sra.</option>  
                      <option value="Sr.">Sr.</option>                                
                      <option value="Dr.">Dr.</option>
                      <option value="Dra.">Dra.</option>
                      <option value="Lic.">Lic.</option>
                    </select>
                    <p class="help-text">Trato</p>
                  </div>

                  <div class="form-group col-md-4">
                    <input name="comercial[nombre][]" type="text" class="form-control material">
                    <p class="help-text">Nombre</p>
                  </div>
                  <div class="form-group col-md-4">
                    <input name="comercial[cargo][]" type="text" class="form-control material">
                    <p class="help-text">Cargo</p>
                  </div>

                  <div class="form-group col-md-4">
                    <input name="comercial[email][]" type="text" class="form-control material">
                    <p class="help-text">Email</p>
                  </div>
                  <div class="form-group col-md-4">
                    <input name="comercial[celular][]" type="text" class="form-control material">
                    <p class="help-text">Celular</p>
                  </div>
                  <div class="form-group col-md-4">
                    <input name="comercial[telefono][]" type="text" class="form-control material">
                    <p class="help-text">Teléfono Fijo</p>
                  </div>
                </div>
              </div>


              <div role="tabpanel" class="tab-pane" id="soporte">
                <div class="content-box big-box box-shadow">

                  <div class="form-group col-md-2">                            
                    <select name="soporte[sexo][]" id="" class="form-control material">
                      <option value="hombre">Hombre</option>
                      <option value="mujer">Mujer</option>

                    </select>
                    <p class="help-text">Sexo</p>
                  </div>

                  <div class="form-group col-md-2">                            
                    <select name="soporte[trato][]" id="" class="form-control material">
                     <option value="Srta.">Srta.</option>  
                     <option value="Sra.">Sra.</option>  
                     <option value="Sr.">Sr.</option>                                
                     <option value="Dr.">Dr.</option>
                     <option value="Dra.">Dra.</option>
                     <option value="Lic.">Lic.</option>
                   </select>
                   <p class="help-text">Trato</p>
                 </div>

                 <div class="form-group col-md-4">
                  <input type="text" name="soporte[nombre][]" class="form-control material">
                  <p class="help-text">Nombre</p>
                </div>
                <div class="form-group col-md-4">
                  <input type="text" name="soporte[cargo][]" class="form-control material">
                  <p class="help-text">Cargo</p>
                </div>

                <div class="form-group col-md-4">
                  <input type="text" name="soporte[email][]" class="form-control material">
                  <p class="help-text">Email</p>
                </div>
                <div class="form-group col-md-4">
                  <input type="text" name="soporte[celular][]" class="form-control material">
                  <p class="help-text">Celular</p>
                </div>
                <div class="form-group col-md-4">
                  <input type="text" name="soporte[telefono][]" class="form-control material">
                  <p class="help-text">Teléfono Fijo</p>
                </div>

              </div>

            </div>


            <div role="tabpanel" class="tab-pane" id="filosofia">
              <div class="content-box big-box box-shadow">
                <div class="form-group col-md-12">
                  <select id="valores" name="valores[]" class="form-control" multiple="multiple" style="width: 100%;">
                   @foreach ($data->valores as $valor)
                   <option value="{!! $valor !!}">{!! $valor !!}</option>
                   @endforeach
                 </select>
                 <p class="help-text">Valores Corporativos</p>
               </div>

               <div class="col-md-12">
                <textarea id="input" name="mision" class="form-control material" rows="3" ></textarea>
                <p class="help-text">Misión</p>
              </div>

              <div class="col-md-12">
                <textarea name="vision" id="input"  class="form-control material" rows="3" ></textarea>
                <p class="help-text">Visión</p>
              </div>

              <div class="form-group col-md-12">
                <select id="intereses" name="intereses[]" class="form-control material" multiple="multiple" style="width: 100%;">
                 @foreach ($data->intereses as $interes)
                 <option value="{!! $interes !!}">{!! $interes !!}</option>
                 @endforeach
               </select>
               <p class="help-text">Intereses</p>
             </div>
           </div>
         </div>



         <div role="tabpanel" class="tab-pane" id="redes">
          <div class="content-box big-box box-shadow"><br>
            <div class="col-lg-12">
              <div class="col-lg-10"> <select id="lista_redes" class="form-control material"></select></div>
              <div class="col-lg-2"><button id="add_red" class="btn btn-primary">Agregar Medio</button></div>
              <br><br><br>
            </div>
            @for ($i = 1; $i <= 5; $i++)
            <div class="col-lg-12 Gmail" id="gmail_{!!$i!!}" attr-visible="">
              <div class="form-group col-md-2">
                <h4><i class="icon-gmail"></i> Gmail</h4>
              </div>
              <div class="form-group col-md-4">
                <input type="text" name="gmail_{!!$i!!}[usuario][]" class="form-control material">
                <p class="help-text">Usuario</p>
              </div>
              <div class="form-group col-md-4">
                <input type="text" name="gmail_{!!$i!!}[contraseña][]" class="form-control material">
                <p class="help-text">Contraseña</p>
              </div>
              <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
            </div>
            @endfor


            @for ($i = 1; $i <= 5; $i++)
            <div class="col-lg-12 Zohomail" id="zohomail_{!!$i!!}" attr-visible="">
              <div class="form-group col-md-2">
                <h4><i class="icon-mail"></i> Zohomail</h4>
              </div>
              <div class="form-group col-md-4">
                <input type="text" name="zohomail_{!!$i!!}[usuario][]" class="form-control material">
                <p class="help-text">Usuario</p>
              </div>

              <div class="form-group col-md-4">
                <input type="text" name="zohomail_{!!$i!!}[contraseña][]" class="form-control material">
                <p class="help-text">Contraseña</p>
              </div>
              <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
            </div>
            
            @endfor

            <div class="col-lg-12 Facebook" id="facebook" attr-visible="">
             <div class="form-group col-md-2">
              <h4><i class="icon-facebook-2"></i> Facebook</h4>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="facebook[usuario][]"  class="form-control material">
              <p class="help-text">Usuario</p>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="facebook[contraseña][]" class="form-control material">
              <p class="help-text">Contraseña</p>
            </div>
            <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
          </div>

          <!-- Twitter -->
          <div class="col-lg-12 Twitter" id="twitter" attr-visible="">
            <div class="form-group col-md-2">
              <h4><i class="icon-twitter-2"></i> Twitter</h4>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="twitter[usuario][]" class="form-control material">
              <p class="help-text">Usuario</p>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="twitter[contraseña][]" class="form-control material">
              <p class="help-text">Contraseña</p>
            </div>

            <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
          </div>
          
          <div class="col-lg-12 Youtube" id="youtube" attr-visible="">
            <div class="form-group col-md-2">
              <h4><i class="icon-youtube-2"></i> Youtube</h4>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="youtube[usuario][]" class="form-control material">
              <p class="help-text">Usuario</p>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="youtube[contraseña][]" class="form-control material">
              <p class="help-text">Contraseña</p>
            </div>
            <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
          </div>

          <div class="col-lg-12 Instagram" id="instagram" attr-visible="">
            <div class="form-group col-md-2">
              <h4><i class="icon-instagram"></i> Instagram</h4>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="instagram[usuario][]" class="form-control material">
              <p class="help-text">Usuario</p>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="instagram[contraseña][]" class="form-control material">
              <p class="help-text">Contraseña</p>
            </div>
            <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
          </div>

          <div class="col-lg-12 Linkedin" id="linkedin" attr-visible="">
            <div class="form-group col-md-2">
              <h4><i class="icon-linkedin-2"></i> Linkedin</h4>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="linkedin[usuario][]" class="form-control material">
              <p class="help-text">Usuario</p>
            </div>

            <div class="form-group col-md-4">
              <input type="text" name="linkedin[contraseña][]" class="form-control material">
              <p class="help-text">Contraseña</p>
            </div>
            <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
          </div>

          <!-- Pinterest -->
          <div class="col-lg-12 Pinterest" id="pinterest" attr-visible="">
           <div class="form-group col-md-2">
            <h4><i class="icon-pinterest-2"></i> Pinterest</h4>
          </div>

          <div class="form-group col-md-4">
            <input type="text" name="pinterest[usuario][]" class="form-control material">
            <p class="help-text">Usuario</p>
          </div>

          <div class="form-group col-md-4">
            <input type="text" name="pinterest[contraseña][]" class="form-control material">
            <p class="help-text">Contraseña</p>
          </div>
          <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
        </div>

        <!-- Hootsuite -->

        <div class="col-lg-12 Hootsuite" id="hootsuite" attr-visible="">
         <div class="form-group col-md-2">
          <h4>Hootsuite</h4>
        </div>

        <div class="form-group col-md-4">
          <input type="text" name="hootsuite[usuario][]" class="form-control material">
          <p class="help-text">Usuario</p>
        </div>

        <div class="form-group col-md-4">
          <input type="text" name="hootsuite[contraseña][]" class="form-control material">
          <p class="help-text">Contraseña</p>
        </div>
        <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
      </div>
      <!-- Amarillas Internet -->
      <div class="col-lg-12 Amarillas_Internet" id="amarillas_internet" attr-visible="">
       <div class="form-group col-md-2">
        <h4>A.I</h4>
      </div>
      <div class="form-group col-md-4">
        <input type="text" name="amarillas_internet[usuario][]" class="form-control material">
        <p class="help-text">Usuario</p>
      </div>
      <div class="form-group col-md-4">
        <input type="text" name="amarillas_internet[contraseña][]" class="form-control material">
        <p class="help-text">Contraseña</p>
      </div>
      <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
    </div>      


    <div class="col-lg-12 Photosnack" id="photosnack" attr-visible="">
      <div class="form-group col-md-2">
        <h4>Photosnack</h4>
      </div>

      <div class="form-group col-md-4">
        <input type="text" name="photosnack[usuario][]" class="form-control material">
        <p class="help-text">Usuario</p>
      </div>

      <div class="form-group col-md-4">
        <input type="text" name="photosnack[contraseña][]" class="form-control material">
        <p class="help-text">Contraseña</p>
      </div>
      <div class="col-md-2"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
    </div>

    <div class="col-lg-12 FTP" id="ftp" attr-visible="">    
      <div class="form-group col-md-2">
        <h4>FTP</h4>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="ftp[server][]" class="form-control material">
        <p class="help-text">Server</p>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="ftp[usuario][]" class="form-control material">
        <p class="help-text">Usuario</p>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="ftp[contraseña][]" class="form-control material">
        <p class="help-text">Contraseña</p>
      </div>
      <div class="col-md-1"> <button class="btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div>
    </div>


  </div>
</div>
<div role="tabpanel" class="tab-pane" id="settings">
  <div class="content-box big-box box-shadow">
    {!! Form::button('Guardar Empresa', array('type'=> 'submit','class' => 'btn btn-lg btn-info pull-right')); !!}
  </div>
</div>
</div>
{!! Form::close() !!}
</div>
</div>
@stop

@section('add_scripts')
{!! HTML::script('vendor\picEdit-master\dist\js\picedit.min.js') !!}
{!! HTML::script('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.js') !!}
{!! HTML::script('js/mask.js') !!}
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
{!! HTML::script('vendor\select2-master\dist\js\select2.min.js') !!}
{!! HTML::script('vendor/ubilabs-geocomplete-4124db8/jquery.geocomplete.min.js') !!}
{!! HTML::script('bower_components/ion.rangeslider/js/ion.rangeSlider.min.js') !!}



<script>
  $(document).ready(function() {
    $("#range").ionRangeSlider({
      min: 0,
      max: 6,
      from: 0.5
    });

    $("#valores").select2();
    $("#sector").select2();
    $("#servicios").select2();
    $("#intereses").select2();

            //Mascara
            $('.date').mask('00/00/0000');

            $('#thebox').picEdit();

            $(".form_tags").tagsinput('items');
            $(".multi_tags").select2();

          });
        </script>

        <script>
         $.log = function(message){
          var $logger = $("#logger");
          $logger.html($logger.html() + "\n * " + message );
        }
        $(function(){

          $("#geocomplete").geocomplete()
          .bind("geocode:result", function(event, result){
            $.log("Result: " + result.formatted_address);
          })
          .bind("geocode:error", function(event, status){
            $.log("ERROR: " + status);
          })
          .bind("geocode:multiple", function(event, results){
            $.log("Multiple: " + results.length + " results found");
          });

          $("#find").click(function(){
            $("#geocomplete").trigger("geocode");
          });


          $("#examples a").click(function(){
            $("#geocomplete").val($(this).text()).trigger("geocode");
            return false;
          });

        });
      </script>
      <script>
        var redes = ["Gmail", "Zohomail", "Facebook", "Twitter", "Youtube", "Instagram", "Linkedin", "Pinterest", "Hootsuite", "Amarillas_Internet", "Photosnack", "FTP"];
        var obj_redes= new Object;

        obj_redes.gmail_1 = {title:"Gmail", name:"gmail_1", position:1, active:false};
        obj_redes.gmail_2 = {title:"Gmail", name:"gmail_2", position:2, active:false};
        obj_redes.gmail_3 = {title:"Gmail", name:"gmail_3", position:3, active:false};
        obj_redes.gmail_4 = {title:"Gmail", name:"gmail_4", position:4, active:false};
        obj_redes.gmail_5 = {title:"Gmail", name:"gmail_5", position:5, active:false};

        obj_redes.zohomail_1 = {title:"Zohoomail", name:"zohomail_1", position:1, active:false};  
        obj_redes.zohomail_2 = {title:"Zohoomail", name:"zohomail_2", position:2, active:false}; 
        obj_redes.zohomail_3 = {title:"Zohoomail", name:"zohomail_3", position:3, active:false}; 
        obj_redes.zohomail_4 = {title:"Zohoomail", name:"zohomail_4", position:4, active:false}; 
        obj_redes.zohomail_5 = {title:"Zohoomail", name:"zohomail_5", position:5, active:false};

        obj_redes.facebook  = {title:"Facebook", name:"facebook", position:1, active:false};
        obj_redes.twitter   = {title:"Twitter", name:"twitter", position:1, active:false};
        obj_redes.youtube   = {title:"Youtube", name:"youtube", position:1, active:false};
        obj_redes.instagram = {title:"Instagram", name:"instagram", position:1, active:false};
        obj_redes.linkedin  = {title:"Linkedin", name:"linkedin", position:1, active:false};
        obj_redes.pinterest = {title:"Pinterest", name:"pinterest", position:1, active:false};
        obj_redes.hootsuite = {title:"Hootsuite", name:"hootsuite", position:1, active:false};
        obj_redes.amarillas_internet = {title:"Amarillas_Internet", name:"amarillas_internet", position:1, active:false};
        obj_redes.photosnack= {title:"Photosnack", name:"photosnack", position:1, active:false};
        obj_redes.ftp       = {title:"FTP",name:"ftp", position:1, active:false};

//  Arreglo redes
var arr_redes=(Object.keys(obj_redes));
// 
for (var i = 0; i < arr_redes.length; i++) {  
  $("#"+arr_redes[i]+"").attr('attr-visible', 'false');
  $("#"+arr_redes[i]+"").hide();
}
for (var i = 0; i < redes.length; i++) {
  $("#lista_redes").append("<option value='"+redes[i]+"'>"+redes[i]+"</option>");
}

$("body").on('click', '#add_red', function(event) {
  event.preventDefault();
  var val=$("#lista_redes").val();
  if (val=="Gmail") {
   x=1;
   encontrado=false;
   while (encontrado==false || x==5) {
    value = obj_redes["gmail_"+x+""].active;
    if (value==false) {
      obj_redes["gmail_"+x+""].active=true;
      encontrado=true;
      name_div = obj_redes["gmail_"+x+""].name;
      $("#"+name_div+"").show();
      console.log("entra a Gmail");
    } else {x+=1;}
  }
} else if(val=="Zohomail") {
  x=1;
  encontrado=false;
  while (encontrado==false || x==5) {
    value = obj_redes["zohomail_"+x+""].active;
    if (value==false) {
      obj_redes["zohomail_"+x+""].active=true;
      encontrado=true;
      var name_div = obj_redes["zohomail_"+x+""].name;
      $("#"+name_div+"").show();
    } 
    else {x+=1;}
  }
}else{
  switch(val) {
    case "Facebook":$("#facebook").show(); obj_redes["facebook"].active=true;
    break;
    case "Twitter": $("#twitter").show(); obj_redes["twitter"].active=true;    
    break;
    case "Youtube": $("#youtube").show(); obj_redes["youtube"].active=true; 
    break;
    case "Instagram": $("#instagram").show(); obj_redes["instagram"].active=true; 
    break;
    case "Linkedin": $("#linkedin").show(); obj_redes["linkedin"].active=true; 
    break;
    case "Pinterest": $("#pinterest").show(); obj_redes["pinterest"].active=true; 
    break;
    case "Amarillas_Internet": $("#amarillas_internet").show(); obj_redes["amarillas_internet"].active=true; 
    break;
    case "Hootsuite": $("#hootsuite").show(); obj_redes["hootsuite"].active=true; 
    break;
    case "Photosnack": $("#photosnack").show(); obj_redes["photosnack"].active=true; 
    break;
    case "FTP": $("#ftp").show(); obj_redes["ftp"].active=true; 
    break;
    default: console.log("error");

  }
}
}
);



</script>



@stop