@extends('layouts.master')
@section('add_styles')

{!! HTML::style('css\awesome-bootstrap-checkbox.css') !!}
{!! HTML::style('vendor\picEdit-master\dist\css\picedit.min.css') !!}
{!! HTML::style('vendor\bootstrap-tagsinput-latest\dist\bootstrap-tagsinput.css') !!}
{!! HTML::style('vendor\select2-master\dist\css\select2.css') !!}
{!! HTML::style('bower_components/ion.rangeslider/css/ion.rangeSlider.css') !!}
@stop
@section('content')

<!-- Edición datos -->

<?php
$nombre_comercial = $data_actual->nombre_comercial;
$razon_social     = $data_actual->razon_social;
$nit              = $data_actual->nit;
$telefono_1       = $data_actual->telefono_1;
$telefono_2       = $data_actual->telefono_2;
$sitio_web        = $data_actual->sitio_web;
$ciudad_pais      = $data_actual->ciudad_pais;
$direccion        = $data_actual->direccion;
$representante    = json_decode($data_actual->representante);
$comercial        = json_decode($data_actual->comercial);
$soporte          = json_decode($data_actual->soporte);
$valores          = json_decode($data_actual->valores);
$mision           = $data_actual->mision;
$vision           = $data_actual->vision;
$intereses        = json_decode($data_actual->intereses);
$gmail            = json_decode($data_actual->gmail);
$redes_adicionales= json_decode($data_actual->redes_adicionales);
$zohomail         = json_decode($data_actual->zohomail);
$facebook         = json_decode($data_actual->facebook);
$twitter          = json_decode($data_actual->twitter);
$youtube          = json_decode($data_actual->youtube);
$instagram        = json_decode($data_actual->instagram);
$linkedin         = json_decode($data_actual->linkedin);
$pinterest        = json_decode($data_actual->pinterest);
$hootsuite        = json_decode($data_actual->hootsuite);
$amarillas_internet  = json_decode($data_actual->amarillas_internet);
$photosnack       = json_decode($data_actual->photosnack);
$ftp              = json_decode($data_actual->ftp);
$wordpress        = json_decode($data_actual->wordpress);
$prestashop       = json_decode($data_actual->prestashop);
$foto             = $data_actual->foto;
$fecha_fundacion  = $data_actual->fecha_fundacion;
$servicios        = json_decode($data_actual->servicios);
$sector           = $data_actual->sector;
$rango           = $data_actual->rango;
$tipo_empresa     = $data_actual->tipo_empresa;
$numero_empleados = $data_actual->numero_empleados;
 //var_dump($gmail);
?>


<div class="container-fluid">
  {{-- <pre>
    {!! var_dump($gmail) !!}
  </pre> --}}
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
    {!!Form::open(array('action' => 'ContactoController@UpdateCompany', 'method' => 'post', 'id' => 'save_company','files'=>true));!!}
    {!! Form::hidden('id', $data_actual->id); !!}
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

                    <div class="form-group col-md-3">
                      <select name="numero_empleados" id="numero_empleados" class="form-control material">
                        <option value=""></option>
                        <option value="A">1</option>
                        <option value="B">2-10</option>
                        <option value="C">51-200</option>
                        <option value="D">201-500</option>
                        <option value="E">501-1000</option>
                        <option value="F">1001-5000</option><option value="G">5001-10000</option>
                        <option value="H">+10001</option>
                      </select>
                      <p class="help-text">Tamaño de la Empresa</p> 
                    </div>


                    <div class="form-group col-md-6">
                      <select name="tipo_empresa" id="tipo_empresa" class="form-control material">
                        <option value=""></option>
                        <option value="C">Empresa pública</option>
                        <option value="D">Educativa</option>
                        <option value="E">Autónomo</option>
                        <option value="G">Organismo gubernamental</option>
                        <option value="N">Organización sin ánimo de lucro</option>
                        <option value="O">Empresa propia</option>
                        <option value="P">De financiación privada</option>
                        <option value="S">Asociación</option>
                      </select>
                      <p class="help-text">Tipo de Empresa</p>
                    </div>

                    <div class="form-group col-md-6">
                      <select id="sector" name="sector" class="form-control material">
                        <option value=""></option>
                        <option value="BANKING">Actividades bancarias</option>
                        <option value="GOVERNMENT_ADMINISTRATION">Administración gubernamental</option>
                        <option value="AIRLINES_AVIATION">Aeronáutica/Aviación</option>
                        <option value="FARMING">Agricultura</option>
                        <option value="FOOD_AND_BEVERAGES">Alimentación y bebidas</option>
                        <option value="WAREHOUSING">Almacenamiento</option>
                        <option value="ANIMATION">Animación</option>
                        <option value="GAMBLING_AND_CASINOS">Apuestas y casinos</option>
                        <option value="ARCHITECTURE_AND_PLANNING">Arquitectura y planificación</option>
                        <option value="ARTS_AND_CRAFTS">Artesanía</option>
                        <option value="PERFORMING_ARTS">Artes interpretativas</option>
                        <option value="CONSUMER_GOODS">Artículos de consumo</option>
                        <option value="LUXURY_GOODS_AND_JEWELRY">Artículos de lujo y joyas</option>
                        <option value="SPORTING_GOODS">Artículos deportivos</option>
                        <option value="INTERNATIONAL_AFFAIRS">Asuntos internacionales</option>
                        <option value="MENTAL_HEALTH_CARE">Atención a la salud mental</option>
                        <option value="HOSPITAL_AND_HEALTH_CARE">Atención sanitaria y hospitalaria</option>
                        <option value="INDUSTRIAL_AUTOMATION">Automación industrial</option>
                        <option value="INVESTMENT_BANKING_AND_VENTURE">Banca de inversiones</option>
                        <option value="FINE_ART">Bellas Artes</option>
                        <option value="LIBRARIES">Bibliotecas</option>
                        <option value="REAL_ESTATE">Bienes inmobiliarios</option>
                        <option value="COMMERCIAL_REAL_ESTATE">Bienes inmuebles comerciales</option>
                        <option value="BIOTECHNOLOGY">Biotecnología</option>
                        <option value="VENTURE_CAPITAL">Capital de riesgo</option>
                        <option value="CONSTRUCTION">Construcción</option>
                        <option value="SHIPBUILDING">Construcción naval</option>
                        <option value="MANAGEMENT_CONSULTING">Consultoría de estrategia y operaciones</option>
                        <option value="ACCOUNTING">Contabilidad</option>
                        <option value="COSMETICS">Cosmética</option>
                        <option value="GLASS_CERAMICS_AND_CONCRETE">Cristal, cerámica y hormigón</option>
                        <option value="LAW_ENFORCEMENT">Cumplimiento de la ley</option>
                        <option value="DEFENSE_AND_SPACE">Departamento de defensa y del espacio exterior</option>
                        <option value="SPORTS">Deportes</option>
                        <option value="LAW_PRACTICE">Derecho</option>
                        <option value="PROGRAM_DEVELOPMENT">Desarrollo de programación</option>
                        <option value="INTERNATIONAL_TRADE_AND_DEVELOPMENT">Desarrollo y comercio internacional</option>
                        <option value="DESIGN">Diseño</option>
                        <option value="GRAPHIC_DESIGN">Diseño gráfico</option>
                        <option value="MEDICAL_DEVICE">Dispositivos médicos</option>
                        <option value="STAFFING_AND_RECRUITING">Dotación y selección de personal</option>
                        <option value="ONLINE_PUBLISHING">Edición en línea</option>
                        <option value="PRIMARY_SECONDARY">Educación primaria/secundaria</option>
                        <option value="MILITARY">Ejército</option><option value="E_LEARNING">E-learning</option>
                        <option value="CONSUMER_ELECTRONICS">Electrónica de consumo</option>
                        <option value="PACKAGING_AND_CONTAINERS">Embalaje y contenedores</option>
                        <option value="RENEWABLES_AND_ENVIRONMENT">Energía renovable y medio ambiente</option>
                        <option value="HIGHER_EDUCATION">Enseñanza superior</option>
                        <option value="ENTERTAINMENT">Entretenimiento</option>
                        <option value="PACKAGE_AND_FREIGHT_DELIVERY">Envío de paquetes y carga</option>
                        <option value="COMPUTER_HARDWARE">Equipo informático</option>
                        <option value="PHILANTHROPY">Filantropía</option>
                        <option value="PROFESSIONAL_TRAINING">Formación profesional</option>
                        <option value="PHOTOGRAPHY">Fotografía</option>
                        <option value="THINK_TANKS">Gabinetes estratégicos</option>
                        <option value="RANCHING">Ganadería</option>
                        <option value="INVESTMENT_MANAGEMENT">Gestión de inversiones</option>
                        <option value="NON_PROFIT_ORGANIZATION_MANAGEMENT">Gestión de organizaciones sin ánimo de lucro</option>
                        <option value="EDUCATION_MANAGEMENT">Gestión educativa</option>
                        <option value="HOSPITALITY">Hostelería</option>
                        <option value="IMPORT_AND_EXPORT">Importar y exportar</option>
                        <option value="PRINTING">Imprenta</option>
                        <option value="AVIATION_AND_AEROSPACE">Industria aeroespacial y aviación</option>
                        <option value="PHARMACEUTICALS">Industria farmacéutica</option>
                        <option value="APPAREL_AND_FASHION">Industria textil y moda</option>
                        <option value="CIVIL_ENGINEERING">Ingeniería civil</option>
                        <option value="MECHANICAL_OR_INDUSTRIAL_ENGINEERING">Ingeniería industrial o mecánica</option>
                        <option value="RECREATIONAL_FACILITIES_AND_SERVICES">Instalaciones y servicios de recreo</option>
                        <option value="RELIGIOUS_INSTITUTIONS">Instituciones religiosas</option>
                        <option value="COMPUTER_NETWORKING">Interconexión en red</option>
                        <option value="INTERNET">Internet</option>
                        <option value="RESEARCH">Investigación</option>
                        <option value="MARKET_RESEARCH">Investigación de mercado</option>
                        <option value="JUDICIARY">Judicial</option><option value="DAIRY">Lácteos</option>
                        <option value="LOGISTICS_AND_SUPPLY_CHAIN">Logística y cadena de suministro</option>
                        <option value="ELECTRICAL_AND_ELECTRONIC_MANUFACTURING">Manufactura eléctrica y electrónica</option>
                        <option value="RAILROAD_MANUFACTURE">Manufactura ferroviaria</option>
                        <option value="MACHINERY">Maquinaria</option>
                        <option value="MARKETING_AND_ADVERTISING">Marketing y publicidad</option>
                        <option value="BUILDING_MATERIALS">Materiales de construcción</option>
                        <option value="BUSINESS_SUPPLIES_AND_EQUIPMENT">Material y equipo de negocios</option>
                        <option value="ALTERNATIVE_MEDICINE">Medicina alternativa</option>
                        <option value="BROADCAST_MEDIA">Medios de difusión</option>
                        <option value="CAPITAL_MARKETS">Mercados capitales</option>
                        <option value="MINING_AND_METALS">Minería y metalurgia</option>
                        <option value="FURNITURE">Mobiliario</option>
                        <option value="MUSEUMS_AND_INSTITUTIONS">Museos e instituciones</option>
                        <option value="MUSIC">Música</option><option value="NANOTECHNOLOGY">Nanotecnología</option>
                        <option value="MARITIME">Naval</option><option value="LEISURE_AND_TRAVEL">Ocio y viajes</option>
                        <option value="EXECUTIVE_OFFICE">Oficina ejecutiva</option>
                        <option value="LEGISLATIVE_OFFICE">Oficina legislativa</option>
                        <option value="CIVIC_AND_SOCIAL_ORGANIZATION">Organización cívica y social</option>
                        <option value="POLITICAL_ORGANIZATION">Organización política</option>
                        <option value="MOTION_PICTURES_AND_FILM">Películas y cine</option>
                        <option value="NEWSPAPERS">Periódicos</option>
                        <option value="OIL_AND_ENERGY">Petróleo y energía</option>
                        <option value="FISHERY">Piscicultura</option>
                        <option value="PLASTICS">Plásticos</option>
                        <option value="PUBLIC_POLICY">Política pública</option>
                        <option value="FOOD_PRODUCTION">Producción alimentaria</option>
                        <option value="MEDIA_PRODUCTION">Producción multimedia</option>
                        <option value="PAPER_AND_FOREST_PRODUCTS">Productos de papel y forestales</option>
                        <option value="CHEMICALS">Productos químicos</option>
                        <option value="MEDICAL_PRACTICE">Profesiones médicas</option>
                        <option value="COMPUTER_SOFTWARE">Programas informáticos</option>
                        <option value="PUBLIC_SAFETY">Protección civil</option>
                        <option value="PUBLISHING">Publicaciones</option>
                        <option value="FUNDRAISING">Recaudación de fondos</option>
                        <option value="HUMAN_RESOURCES">Recursos humanos</option>
                        <option value="WRITING_AND_EDITING">Redacción y revisión</option>
                        <option value="GOVERNMENT_RELATIONS">Relaciones gubernamentales</option>
                        <option value="PUBLIC_RELATIONS">Relaciones públicas</option>
                        <option value="ALTERNATIVE_DISPUTE_RESOLUTION">Resolución de conflicto por terceras partes</option>
                        <option value="RESTAURANTS">Restaurantes</option>
                        <option value="HEALTH_WELLNESS_AND_FITNESS">Sanidad, bienestar y buena condición física</option>
                        <option value="AUTOMOTIVE">Sector automovilístico</option>
                        <option value="TEXTILES">Sector textil</option>
                        <option value="COMPUTER_AND_NETWORK_SECURITY">Seguridad del ordenador y de las redes</option>
                        <option value="SECURITY_AND_INVESTIGATIONS">Seguridad e investigaciones</option>
                        <option value="INSURANCE">Seguros</option><option value="SEMICONDUCTORS">Semiconductores</option>
                        <option value="CONSUMER_SERVICES">Servicio al consumidor</option>
                        <option value="INFORMATION_SERVICES">Servicio de información</option>
                        <option value="EVENTS_SERVICES">Servicios de eventos</option>
                        <option value="FINANCIAL_SERVICES">Servicios financieros</option>
                        <option value="FACILITIES_SERVICES">Servicios infraestructurales</option>
                        <option value="LEGAL_SERVICES">Servicios jurídicos</option>
                        <option value="ENVIRONMENTAL_SERVICES">Servicios medioambientales</option>
                        <option value="INDIVIDUAL_AND_FAMILY_SERVICES">Servicios para el individuo y la familia</option>
                        <option value="UTILITIES">Servicios públicos</option>
                        <option value="INFORMATION_TECHNOLOGY_AND_SERVICES">Servicios y tecnología de la información</option>
                        <option value="OUTSOURCING_OFFSHORING">Subcontrataciones/Offshoring</option>
                        <option value="SUPERMARKETS">Supermercados</option>
                        <option value="TOBACCO">Tabaco</option><option value="WIRELESS">Tecnología inalámbrica</option>
                        <option value="TELECOMMUNICATIONS">Telecomunicaciones</option>
                        <option value="TRANSLATION_AND_LOCALIZATION">Traducción y localización</option>
                        <option value="TRANSPORTATION_TRUCKING_AND_RAILROAD">Transporte por carretera o ferrocarril</option>
                        <option value="WHOLESALE">Venta al por mayor</option>
                        <option value="RETAIL">Venta al por menor</option>
                        <option value="VETERINARY">Veterinaria</option>
                        <option value="COMPUTER_GAMES">Videojuegos</option>
                        <option value="WINE_AND_SPIRITS">Vino y licor</option>
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
                     <select name="representante[sexo][]" id="sexo_representante" class="form-control material">
                      <option value="hombre">Hombre</option>
                      <option value="mujer">Mujer</option>
                    </select>
                    <p class="help-text">Sexo</p>
                  </div>
                  <div class="form-group col-md-2">                            
                    <select name="representante[trato][]" id="trato_representante" class="form-control material">
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
                    <select name="comercial[sexo][]" id="sexo_comercial" class="form-control material">
                      <option value="hombre">Hombre</option>
                      <option value="mujer">Mujer</option>
                    </select>
                    <p class="help-text">Sexo</p>
                  </div>

                  <div class="form-group col-md-2">                            
                    <select name="comercial[trato][]" id="trato_comercial" class="form-control material">
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
                    <select name="soporte[sexo][]" id="trato_soporte" class="form-control material">
                      <option value="hombre">Hombre</option>
                      <option value="mujer">Mujer</option>

                    </select>
                    <p class="help-text">Sexo</p>
                  </div>

                  <div class="form-group col-md-2">                            
                    <select name="soporte[trato][]" id="trato_soporte" class="form-control material">
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
              <div class="col-lg-2"><a id="btn_add_red" class="btn btn-success">Agregar Medio</a></div>
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
             {{--  <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
            </div>
            @endfor


            @for ($i = 1; $i <= 10; $i++)
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
              {{-- <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
            </div>            
            @endfor


            @for ($i = 1; $i <= 13; $i++)
            <div class="col-lg-12 Red" id="red_adicional_{!!$i!!}" attr-visible="">
              <div class="form-group col-md-2">
                <h4><i class="icon-globe-2"></i> Red</h4>
              </div>

              <div class="form-group col-md-3">
                <input type="text" name="red_adicional_{!!$i!!}[url][]" class="form-control material">
                <p class="help-text">Usuario</p>
              </div>

              <div class="form-group col-md-3">
                <input type="text" name="red_adicional_{!!$i!!}[usuario][]" class="form-control material">
                <p class="help-text">Usuario</p>
              </div>

              <div class="form-group col-md-3">
                <input type="text" name="red_adicional_{!!$i!!}[contraseña][]" class="form-control material">
                <p class="help-text">Contraseña</p>
              </div>
              {{-- <div class="col-md-1"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button></div> --}}
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
            {{-- <div class="col-md-2"> <span class="btn-red-info btn btn-md "><i class="icon-cancel"></i></span> </div> --}}
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

           {{--  <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
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
            {{-- <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
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
            {{-- <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
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
            {{-- <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
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
          {{-- <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
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
        {{-- <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
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
      {{-- <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
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
      {{-- <div class="col-md-2"> <button class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
    </div>

    <div class="col-lg-12 Prestashop" id="prestashop" attr-visible="">    
      <div class="form-group col-md-2">
        <h4><i class="icon-shop"></i> Prestashop</h4>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="prestashop[url][]" class="form-control material">
        <p class="help-text">Server</p>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="prestashop[usuario][]" class="form-control material">
        <p class="help-text">Usuario</p>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="prestashop[contraseña][]" class="form-control material">
        <p class="help-text">Contraseña</p>
      </div>
      {{-- <div class="col-md-1"> <button DataId="ftp" class="btn-red-info btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div> --}}
    </div>

    <div class="col-lg-12 Wordpress" id="wordpress" attr-visible="">    
      <div class="form-group col-md-2">
        <h4><i class="icon-wordpress-3"></i> Wordpress</h4>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="wordpress[url][]" class="form-control material">
        <p class="help-text">Server</p>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="wordpress[usuario][]" class="form-control material">
        <p class="help-text">Usuario</p>
      </div>
      <div class="form-group col-md-3">
        <input type="text" name="wordpress[contraseña][]" class="form-control material">
        <p class="help-text">Contraseña</p>
      </div>
      {{-- <div class="col-md-1"> <button DataId="ftp" class="btn-red-info btn btn-md btn-danger"><i class="icon-cancel"></i></button> </div> --}}
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
      {{-- <div class="col-md-1"> <button DataId="ftp" class="btn-red-info btn btn-md "><i class="icon-cancel"></i></button> </div> --}}
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
    /* Valores e Intereses de la empresa */
    @if ($tipo_empresa != "") 
    var tipo_empresa = "<?php echo $tipo_empresa."."; ?>";
    var t_empresa = tipo_empresa.split(".");
    SelectSelect(t_empresa,"tipo_empresa");  
    @endif

    @if ($sector != "")
    var sector = "<?php echo $sector."."; ?>";
    var set = sector.split(".");
    SelectSelect(set,"sector");  
    @endif

    @if ($numero_empleados != "")
    var numero_empleados = "<?php echo $numero_empleados."."; ?>";
    var n_empleados = numero_empleados.split(".");
    SelectSelect(n_empleados,"numero_empleados");  
    @endif

    @if ($intereses != "")
    var intereses = "<?php foreach ($intereses as $interes) {echo $interes.".";} ?>";
    var intereses = intereses.split(".");
    SelectSelect(intereses,"intereses");
    @endif

    @if ($valores != "")
    var valores = "<?php foreach ($valores as $valor) {echo $valor.".";} ?>";
    var valores = valores.split(".");
    SelectSelect(valores,"valores");
    @endif


    /***   funcion SelectSelect para Select2JS   ***/


    function SelectSelect (arr,id_select) {
      var id_select = id_select;
      var select    = "#"+id_select+" option";
      var arr       = arr;
      $(select).each(function(){
        var val = $(this).val();
    //console.log(val);
    for (var i = 0; i < arr.length; i++) {
      //console.log(ser[i]);
      if(val==arr[i]){
        console.log(val);
        $(this).prop('selected', 'selected');
      }
    };
  });

    }

    $("#range").ionRangeSlider({
      min: 0,
      max: 6,
      from: {!! $data_actual->rango !!}
    });

    $("#valores").select2(
      { tags: true,
        tokenSeparators: [",", " "]}
        );
    $("#sector").select2();

    $('#servicios').select2({
      tags: true,
      tokenSeparators: [",", " "]
    }).on("change", function(e) {
      var isNew = $(this).find('[data-select2-tag="true"]');
      if(isNew.length){
        isNew.replaceWith('<option selected value="'+isNew.val()+'">'+isNew.val()+'</option>');

      }
    });


    $("#intereses").select2();
            //Mascara
            $('.date').mask('00-00-0000');
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

 //Ocultar Botones 

 $("body").on('click', '.btn-red-info', function(event) {
  event.preventDefault();
  var valueBoton = $(this).prop('DataId');
  alert("Heyyyy ".valueBoton);
});

</script>


@include('empresas.extras_empresas.load_redes')


<script>
  @if (isset($razon_social))
  $("[name='razon_social']").val("{!!$razon_social!!}");
  @endif
  @if (isset($nombre_comercial))
  $("[name='nombre_comercial']").val("{!!$nombre_comercial!!}");
  @endif
  @if (isset($nit))
  $("[name='nit']").val('{!!$nit!!}');
  @endif
  @if (isset($telefono_1))
  $("[name='telefono_1']").val('{!!$telefono_1!!}');
  @endif
  @if (isset($telefono_2))
  $("[name='telefono_2']").val('{!!$telefono_2!!}');
  @endif
  @if (isset($sitio_web))
  $("[name='sitio_web']").val('{!!$sitio_web!!}');
  @endif
  @if (isset($ciudad_pais))
  $("[name='ciudad_pais']").val('{!!$ciudad_pais!!}');
  @endif
  @if (isset($direccion))
  $("[name='direccion']").val('{!!$direccion!!}');
  @endif
  @if (isset($fecha_fundacion))
  $("[name='fecha_fundacion']").val('{!!$fecha_fundacion!!}');
  @endif
  @if (isset($rango))
  $("[name='rango']").val('{!!$rango!!}');
  console.log("{!! $rango !!}");
  @endif
  @if (isset($mision))
  $("[name='mision']").val("{!!$mision!!}");
  @endif
  @if (isset($vision))
  $("[name='vision']").val("{!!$vision!!}");
  @endif
</script>

<!-- Fin Valores e Intereses de la empresa -->

<!-- Fin datos Empresa -->

<!-- Datos Representante -->
@if($representante->nombre != "")
<script>
  sexo_actual = "{!! $representante->sexo[0] !!}";
  sexo=$("#sexo_representante option:selected" ).val();
  $("#sexo_representante option").each(function(){
    var val = $(this).val();
    if(val==sexo_actual){
      console.log("este es: "+val);
      $(this).prop('selected', 'selected');
    }
  });

  trato_actual = "{!! $representante->trato[0] !!}";
  trato=$("#trato_representante option:selected" ).val();
  $("#trato_representante option").each(function(){
    var val = $(this).val();
    if(val==trato_actual){
      console.log("este es: "+val);
      $(this).prop('selected', 'selected');
    }
  });

  $("[name='representante[nombre][]']").val('{!! $representante->nombre[0] !!}');
  $("[name='representante[cargo][]']").val('{!! $representante->cargo[0] !!}');
  $("[name='representante[email][]']").val('{!! $representante->email[0] !!}');
  $("[name='representante[celular][]']").val('{!! $representante->celular[0] !!}');
  $("[name='representante[telefono][]']").val('{!! $representante->telefono[0] !!}');
 //alert(hola);
</script>

@endif
<!-- Fin Datos Representante -->


<!-- Datos Comercial -->
@if($comercial->nombre != "")
<script>
  sexo_actual = "{!! $comercial->sexo[0] !!}";
  sexo=$("#sexo_comercial option:selected" ).val();
  $("#sexo_comercial option").each(function(){
    var val = $(this).val();
    if(val==sexo_actual){
      console.log("este es: "+val);
      $(this).prop('selected', 'selected');
    }
  });

  trato_actual = "{!! $comercial->trato[0] !!}";
  trato=$("#trato_comercial option:selected" ).val();
  $("#trato_comercial option").each(function(){
    var val = $(this).val();
    if(val==trato_actual){
      console.log("este es: "+val);
      $(this).prop('selected', 'selected');
    }
  });

  $("[name='comercial[nombre][]']").val('{!! $comercial->nombre[0] !!}');
  $("[name='comercial[cargo][]']").val('{!! $comercial->cargo[0] !!}');
  $("[name='comercial[email][]']").val('{!! $comercial->email[0] !!}');
  $("[name='comercial[celular][]']").val('{!! $comercial->celular[0] !!}');
  $("[name='comercial[telefono][]']").val('{!! $comercial->telefono[0] !!}');

//  $("[value='Cultivo de arroz']").prop('selected', 'selected');


 //alert(hola);
</script>

@endif
<!-- Fin Datos Comercial -->

<!-- Datos Soporte -->
@if($soporte->nombre != "")
<script>
  sexo_actual = "{!! $soporte->sexo[0] !!}";
  sexo=$("#sexo_soporte option:selected" ).val();
  $("#sexo_soporte option").each(function(){
    var val = $(this).val();
    if(val==sexo_actual){
      console.log("este es: "+val);
      $(this).prop('selected', 'selected');
    }
  });

  trato_actual = "{!! $soporte->trato[0] !!}";
  trato=$("#trato_soporte option:selected" ).val();
  $("#trato_soporte option").each(function(){
    var val = $(this).val();
    if(val==trato_actual){
      console.log("este es: "+val);
      $(this).prop('selected', 'selected');
    }
  });

  $("[name='soporte[nombre][]']").val('{!! $soporte->nombre[0] !!}');
  $("[name='soporte[cargo][]']").val('{!! $soporte->cargo[0] !!}');
  $("[name='soporte[email][]']").val('{!! $soporte->email[0] !!}');
  $("[name='soporte[celular][]']").val('{!! $soporte->celular[0] !!}');
  $("[name='soporte[telefono][]']").val('{!! $soporte->telefono[0] !!}');
 //alert(hola);
</script>

@endif
<!-- Fin Datos Soporte -->


@stop