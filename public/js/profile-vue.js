Vue.http.options.beforeSend = function(request) {
	request.headers['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
};

// define
Vue.component('servicio',{
	data: function () {
		return {
			datos_servicio: "123",
		}
	},
	template: '#servicio-template',
	props: ['comprobante','saldo','valor','vence','serial','mensaje','foto',
	'estado','id_target','id','titulo','publicado','serial','inicio','fin','vendedor','update'],
	methods: {
		RevisarServicio:function(serial){
			id = serial,
			this.datos_servicio = vm.serviceId(id)
		},
		EditarServicio: function(id){
			this.datos_servicio = vm.LoadServiceId(id)
		}
	}

});


Vue.component('anotacion', {
	data: function () {
		return {
			datos_anotacion: "",
		}
	},
	template: '#anotacion-template',
	props: ['id','fecha_comentario','mensaje','foto','tipo_anotacion'],
	methods:{
		SaveComentario: function(){
			RegistrarComentario()
		},
		DeleteTarget:function(serial){
			id = serial,
			this.datos_anotacion = vm.DeleteTarget(id)
		},
		EditAnotacion:function(id,tipo_anotacion){
			this.datos_anotacion = vm.EditAnotacion(id,tipo_anotacion)
		}
	}
});

Vue.component('recordatorio', {
	data: function () {
		return {
			datos_recordatorio: "",
		}
	},
	template: '#recordatorio-template',
	props:['id','mensaje','foto','vencimiento','estado','fecha_comentario','tipo_anotacion'],
	methods:{
		DeleteTarget:function(serial){
			id = serial,
			this.datos_recordatorio = vm.DeleteTarget(id)
		},
		EditAnotacion:function(id,tipo_anotacion){
			this.datos_anotacion = vm.EditAnotacion(id,tipo_anotacion)
		}
	}


});

Vue.component('cobro', {
	data: function () {
		return {
			datos_servicio: "123",
		}
	},
	props: ['tipo_anotacion','id','comprobante','monto','vence','serial','mensaje','foto','estado','id_target','id','comprobante','fecha_comentario'],
	template: '#cobro-template',
	methods: {
		RevisarServicio:function(serial){
			id = serial,
			this.datos_servicio = vm.serviceId(id)
		},
		DeleteTarget:function(serial){
			id = serial,
			this.datos_servicio = vm.DeleteTarget(id)
		},
		ReportarPago:function(id,serial){
			this.datos_servicio = vm.ReportarCobro(id,serial)
		},
		EditAnotacion:function(id,tipo_anotacion){
			this.datos_anotacion = vm.EditAnotacion(id,tipo_anotacion)
		},
		ComprobarPago: function(id){
			this.datos_servicio = vm.AbrirComprobantePago(id)

		}

	}
	
});

var vm = new Vue({

	el: '#app-profile',
	data: function () {  {
		return {
			calculos_service:{
				utilidad_neta:"",
				valor_retencion: function() {
					return "ok";					
				},
				valor_iva:""
			},
			vendedores:"",
			retenciones:"",
			servicio_edit:"",
			comprobante_target:"",
			target_id:"",
			payments_id:"",
			all_services:"",			
			data_targets:"",
			id:"",
			data_anotacion:"",
			filter_service:{
				inicio:"",
				fin:""
			},
			UpNote : { _token: $('meta[name="csrf-token"]').attr('content'), mensaje: "",id_creador: "",fecha_cobro: "", fecha_vencimiento: "", serial: "",monto: "",estado: "",fecha_inicio: "",   involucrados: "",id_perfil: "",tipo_perfil: "",tipo_anotacion: "", comprobante: "", fecha_comentario: ""},
			id_targeta: "", mensaje: "",id_creador: "",fecha_cobro: "", fecha_vencimiento: "", serial: "",monto: "",estado: "",created_at: "",updated_at: "",fecha_inicio: "",    involucrados: "",id_perfil: "",tipo_perfil: "",tipo_anotacion: "", comprobante: "",    fecha_comentario: "",empresa_id: "",foto: "", nombre_comercial: "", fotografia: "",

			data_empresa:{
				id:"",
				rango:"",
				nombre_comercial:"",
				razon_social:"",
				nit:"",
				telefono_1:"",
				telefono_2:"",
				sitio_web:"",
				ciudad_pais:"",
				direccion:"",
				representante:[],
				soporte:[],
				comercial: [],
				valores: "",
				mision: "",
				vision: "",
				intereses: "",
				gmail: {},
				zohomail: {},
				facebook: {},
				twitter: {},
				youtube: {},
				instagram: {},
				linkedin: {},
				pinterest: {},
				hootsuite: "",
				amarillas_internet: "",
				photosnack: "",
				ftp: "",
				wordpress: "",
				prestashop: "",
				redes_adicionales: ""
			}
		};
	}
},

methods: {

	LoadServiceId: function(id){
		this.$http.get('/asteroid/service_id/'+id).then((data) => {
			datos=data.data[0],
			console.log(datos),
			this.$set('servicio_edit', datos)  
		}),
		this.calculos_service.valor_retencion = this.servicio_edit.titulo_retencion,
		this.LoadRetenciones(),
		this.LoadVendedores(),
		setTimeout($('#modal-service-update').modal('show'), 800)
		
	},

	LoadVendedores: function(){
		this.$http.get('/asteroid/vendedores').then((data) => {
			this.$set('vendedores', data.json())  
		})
	},

	LoadRetenciones: function(){
		this.$http.get('/asteroid/retenciones').then((data) => {
			this.$set('retenciones', data.json())  
		})
	},

	AbrirComprobantePago: function(id){
		this.comprobante_target = id,
		$('#comprobante-cobro').modal('show')
	},

	EditAnotacion: function (id,tipo_anotacion) {
		this.$http.get('/api/card/'+id).then((data) => {
			this.$set('data_anotacion', data.json()),
			new_data = data.json()
			this.SetData(new_data)   
		})
		switch (tipo_anotacion) {
			case 'comentario':
			$('#edit-modal-anotacion').modal('show'); 
			break;
			case 'recordatorio':
			$('#edit-modal-recordatorio').modal('show'); 
			break;
			case 'cobro':
			$('#edit-modal-cobro').modal('show');
			break;
			default:
			return false;
			break;
		}

	},
	/*Actualizar Anotacion*/
	UpdateNote: function(){

		this.UpNote.id = this.id_targeta  
		this.UpNote.fecha_cobro = this.fecha_cobro
		this.UpNote.mensaje = this.mensaje
		this.UpNote.id_creador = this.id_creador
		this.UpNote.fecha_cobro = this.fecha_cobro
		this.UpNote.fecha_vencimiento = this.fecha_vencimiento
		this.UpNote.serial = this.serial
		this.UpNote.monto = this.monto
		this.UpNote.estado = this.estado
		this.UpNote.fecha_inicio = this.fecha_inicio
		this.UpNote.involucrados = this.involucrados
		this.UpNote.id_perfil = this.id_perfil
		this.UpNote.tipo_perfil = this.tipo_perfil
		this.UpNote.tipo_anotacion = this.tipo_anotacion
		this.UpNote.comprobante = this.comprobante
		this.UpNote.fecha_comentario = this.fecha_comentario


		var note_save = JSON.stringify(this.UpNote);
		var serial_data = $.param( this.UpNote, true );
  // console.log(serial_data);
  event.preventDefault();
  $.ajaxSetup({
  	headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
  })

  $.ajax({
  	url: '/card/update',
  	type: 'POST',
  	dataType: 'html',
  	processData: false,
  	data: serial_data,

  	success: function(result){
  		resultado = jQuery.parseJSON(result); 
  		if (resultado.tipo=="Error") {
  			swal(resultado.mensaje);
  		}else{
  			swal("Actualizado");
  		}
  	},
  	error: function(result){
  		console.log(result);
  		swal("Ocurrio un Error");
  	}
  });
  this.load_targets_all()

},
/*End Actualizar Anotacion*/
/*Register Targets*/
ModalGuardarComentario:function(){
	VueRegistrarComentario(),
	this.load_targets_all()
},
ModalGuardarRecordatorio:function(){
	VueRegistrarRecordatorio(),
	this.load_targets_all()
},
ModalGuardarCobro:function(){
	VueRegistrarCobro(),
	this.load_targets_all()
},
/*End Register Targets*/

/*Reportar pago*/
ReportarCobro: function(the_id,serial){

	var serial       = serial;
	var id_anotacion = the_id;


	console.log("serial: "+serial+" id:"+the_id);
	swal(
	{   
		title: "¿Estas seguro?",
		text: "Estas por reportar el ingreso de dinero",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Si!, Confirmo Pago",
		cancelButtonText: "No",
		closeOnConfirm: false,
		closeOnCancel: false },

		function(isConfirm){ 
			if (isConfirm) {
            //$('#reporte-de-cobro').modal('show');
            swal("Reportado!", "El pago se ha ingresado en el sistema", "success");
            ;(function(){
            	$.ajaxSetup({
            		headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
            	})
            	var cobro = {};
            	cobro.id_anotacion = the_id;
            	cobro.serial = serial;

            	var serial_data = $.param(cobro);
            	$.ajax({
            		url: '/update/cobro',
            		type: 'POST',
            		data: serial_data,
            		dataType: 'html',
            		success: function(result){                    
            			resultado = jQuery.parseJSON(result);
                        //alert(result);                    
                        if (resultado.tipo=="Error") {
                        	swal(resultado.mensaje);

                        }else if(resultado.tipo=="Exito"){
                        	swal(resultado.mensaje); 
                        	vm.load_targets_all();                         
                        }
                        else{                                                        

                        }                                   
                    },
                    error: function(){
                    	console.log('Error');
                    }
                });                    

            })();
        }
        else {     swal("Cancelado!", "El reporte ha sido cancelado", "error");   } });
},


/*End Reportar Cobro*/
DeleteTarget:function(id){
	swal({   
		title: "¿Eliminar?",   
		text: "Borrar esto puede tener repercuciones :s",   
		type: "warning",   
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Si, borrar",   
		cancelButtonText: "No, cancelar",   
		closeOnConfirm: false,   closeOnCancel: false }, 
		function(isConfirm){   
			if (isConfirm) {    
				vm.DeleteTargetOk(id)
			} else {     
				swal("Cancelado", "La acción fue cancelada", "error");   
			}
		})
},
DeleteTargetOk:function(id){
	this.$http.get('/asteroid/deletetarget/'+id).then((data) => {
		this.load_targets_all()
	})	
	swal("Eliminado!", "Se ha eliminado con exito de la base de datos", "success"); 
},
FilterService: function(id){
	if (this.filter_service.inicio != '' && this.filter_service.fin != '') {
		this.$http.get('/asteroid/services/'+id+'/filter_date/'+this.filter_service.inicio+'/'+this.filter_service.fin).then((data) => {
			this.all_services='',
			this.$set('all_services', data.json())
		})	
	}else{
		swal('¿Que período quieres filtrar?')
	}
},

AllServices: function(id){
	this.$http.get('/asteroid/services/'+id).then((data) => {
		this.$set('all_services', data.json())
	})	
},

paymentsId: function (id) {
	this.$http.get('/asteroid/service/payments/'+id).then((data) => {
		this.$set('payments_id', data.json())
			// target_id = data.json() 
		})		
		//$('#servicio_cobro').modal('show');
	},

	serviceId: function (id) {
		this.$http.get('/asteroid/service/'+id).then((data) => {
			this.$set('target_id', data.json()),
			this.paymentsId(id)
		}),
		$('#servicio_cobro').modal('show');
	},

	load_data: function(){
		this.$http.get('/asteroid/company/'+this.id).then((response) => {
			this.$set('data_empresa', response.json()),
			//this.data_empresa = response.json()
			this.parse_json()
		})
	},
	parse_json: function(){
		
		representante = JSON.parse(this.data_empresa.representante);
		comercial = JSON.parse(this.data_empresa.comercial);
		soporte = JSON.parse(this.data_empresa.soporte);
		valores = JSON.parse(this.data_empresa.valores);
		intereses = JSON.parse(this.data_empresa.intereses);
		gmail = JSON.parse(this.data_empresa.gmail);
		zohomail = JSON.parse(this.data_empresa.zohomail);
		facebook = JSON.parse(this.data_empresa.facebook);
		twitter = JSON.parse(this.data_empresa.twitter);
		youtube = JSON.parse(this.data_empresa.youtube);
		instagram = JSON.parse(this.data_empresa.instagram);
		linkedin = JSON.parse(this.data_empresa.linkedin);
		pinterest = JSON.parse(this.data_empresa.pinterest);
		hootsuite = JSON.parse(this.data_empresa.hootsuite);
		amarillas_internet = JSON.parse(this.data_empresa.amarillas_internet);
		photosnack = JSON.parse(this.data_empresa.photosnack);
		ftp = JSON.parse(this.data_empresa.ftp);
		wordpress = JSON.parse(this.data_empresa.wordpress);
		prestashop = JSON.parse(this.data_empresa.prestashop);
		redes_adicionales = JSON.parse(this.data_empresa.redes_adicionales);

		vm.$set('data_empresa.representante', representante);
		vm.$set('data_empresa.soporte', soporte);
		vm.$set('data_empresa.comercial', comercial);

		this.data_empresa.valores    = valores;
		this.data_empresa.intereses  = intereses;
		vm.$set('data_empresa.gmail', gmail);
		
		this.data_empresa.zohomail   = zohomail;
		this.data_empresa.facebook   = facebook;
		this.data_empresa.twitter    = twitter;
		this.data_empresa.youtube    = youtube;
		this.data_empresa.instagram  = instagram;
		this.data_empresa.linkedin   = linkedin;
		this.data_empresa.pinterest  = pinterest;
		this.data_empresa.hootsuite  = hootsuite;
		this.data_empresa.amarillas_internet = amarillas_internet;
		this.data_empresa.photosnack = photosnack;
		this.data_empresa.ftp        = ftp; 
		this.data_empresa.wordpress  = wordpress;
		this.data_empresa.prestashop = prestashop;
		this.data_empresa.redes_adicionales  = redes_adicionales;


	},
	SetData: function(data){
		new_data = data;
		this.id_targeta = new_data[0].id
		this.fecha_cobro = new_data[0].fecha_cobro
		this.mensaje = new_data[0].mensaje
		this.id_creador = new_data[0].id_creador
		this.fecha_cobro = new_data[0].fecha_cobro
		this.fecha_vencimiento = new_data[0].fecha_vencimiento
		this.serial = new_data[0].serial
		this.monto = new_data[0].monto
		this.estado = new_data[0].estado
		this.created_at = new_data[0].created_at
		this.updated_at = new_data[0].updated_at
		this.fecha_inicio = new_data[0].fecha_inicio
		this.involucrados = new_data[0].involucrados
		this.id_perfil = new_data[0].id_perfil
		this.tipo_perfil = new_data[0].tipo_perfil
		this.tipo_anotacion = new_data[0].tipo_anotacion
		this.comprobante = new_data[0].comprobante
		this.fecha_comentario = new_data[0].fecha_comentario
		this.empresa_id = new_data[0].empresa_id
		this.foto = new_data[0].foto
		this.nombre_comercial = new_data[0].nombre_comercial
		this.fotografia = new_data[0].fotografia
	},
	load_targets_all: function(){
		this.data_targets = "";
		this.$http.get('/asteroid/targets/'+this.id).then((response) => {
			this.$set('data_targets', response.json()),
			this.data_targets = response.json()
			
		})
	},
	
	moment: function () {
		return moment();
	},	
},
filters: {
	fromNow: function (date) {
		return moment(date).fromNow();
	},
	DateSmall: function (date) {
		return moment(date).format('MMM Do YY');
	},
	DateLarge: function(date){
		return moment(date).format('YYYY-MM-DD 00:00:00'); 
	},
	SizeCompany:function(value){
		switch (value) {
			case 'A': return "1";	break;
			case 'B': return "2-10";	break;
			case 'C': return "51-200";	break;
			case 'D': return "201-500";	break;
			case 'E': return "501-1000";	break;
			case 'F': return "1001-5000";	break;
			case 'G': return "5001-10000";	break;
			case 'H': return "+10001";	break;
			default: return false; break;
		}
	},
	TipoEmpresa:function(value){
		switch (value) {
			case 'C': return "Empresa Pública";	break;
			case 'D': return "Educativa";	break;
			case 'E': return "Autónomo";	break;
			case 'G': return "Organismo gubernamental";	break;
			case 'N': return "Organismo sin ánimo de lucro";	break;
			case 'O': return "Empresa propia";	break;
			case 'P': return "De financiación privada";	break;
			case 'S': return "Asociación";	break;
			default: return false; break;
		};
	},
	SectorEmpresa:function(value){
		switch (value) {
			case 'BANKING': return "Actividades bancarias";	break;
			case 'GOVERNMENT_ADMINISTRATION': return "Administración gubernamental";	break;
			case 'AIRLINES_AVIATION': return "Aeronáutica/Aviación";	break;
			case 'FARMING': return "Agricultura";	break;
			case 'FOOD_AND_BEVERAGES': return "Alimentación y bebidas";	break;
			case 'WAREHOUSING': return "Almacenamiento";	break;
			case 'ANIMATION': return "Animación";	break;
			case 'GAMBLING_AND_CASINOS': return "Apuestas y casinos";	break;
			case 'ARCHITECTURE_AND_PLANNING': return "Arquitectura y planificación";	break;
			case 'ARTS_AND_CRAFTS': return "Artesanía";	break;
			case 'PERFORMING_ARTS': return "Artes interpretativas";	break;
			case 'CONSUMER_GOODS': return "Artículos de consumo";	break;
			case 'LUXURY_GOODS_AND_JEWELRY': return "Artículos de lujo y joyas";	break;
			case 'SPORTING_GOODS': return "Artículos deportivos";	break;
			case 'INTERNATIONAL_AFFAIRS': return "Asuntos internacionales";	break;
			case 'MENTAL_HEALTH_CARE': return "Atención a la salud mental";	break;
			case 'HOSPITAL_AND_HEALTH_CARE': return "Atención sanitaria y hospitalaria";	break;
			case 'INDUSTRIAL_AUTOMATION': return "Automación industrial";	break;
			case 'INVESTMENT_BANKING_AND_VENTURE': return "Banca de inversiones";	break;
			case 'FINE_ART': return "Bellas Artes";	break;
			case 'LIBRARIES': return "Bibliotecas";	break;
			case 'REAL_ESTATE': return "Bienes inmobiliarios";	break;
			case 'COMMERCIAL_REAL_ESTATE': return "inmuebles comerciales";	break;
			case 'BIOTECHNOLOGY': return "Biotecnología";	break;
			case 'VENTURE_CAPITAL': return "Capital de riesgo";	break;
			case 'CONSTRUCTION': return "Construcción";	break;
			case 'SHIPBUILDING': return "Construcción naval";	break;
			case 'MANAGEMENT_CONSULTING': return "Consultoría de estrategia y operaciones";	break;
			case 'ACCOUNTING': return "Contabilidad";	break;
			case 'COSMETICS': return "Cosmética";	break;
			case 'GLASS_CERAMICS_AND_CONCRETE': return "Cristal, cerámica y hormigón";	break;
			case 'LAW_ENFORCEMENT': return "Cumplimiento de la ley";	break;
			case 'DEFENSE_AND_SPACE': return "Departamento de defensa y del espacio exterior";	break;
			case 'SPORTS': return "Deportes";	break;
			case 'LAW_PRACTICE': return "Derecho";	break;
			case 'PROGRAM_DEVELOPMENT': return "Desarrollo de programación";	break;
			case 'INTERNATIONAL_TRADE_AND_DEVELOPMENT': return "Desarrollo y comercio internacional";	break;
			case 'DESIGN': return "Diseño";	break;
			case 'GRAPHIC_DESIGN': return "Diseño gráfico";	break;
			case 'MEDICAL_DEVICE': return "Dispositivos médicos";	break;
			case 'STAFFING_AND_RECRUITING': return "Dotación y selección de personal";	break;
			case 'ONLINE_PUBLISHING': return "Edición en línea";	break;
			case 'PRIMARY_SECONDARY': return "Educación primaria/secundaria";	break;
			case 'MILITARY': return "Ejército";	break;
			case 'E_LEARNING': return "E-learning";	break;
			case 'CONSUMER_ELECTRONICS': return "Electrónica de consumo";	break;
			case 'PACKAGING_AND_CONTAINERS': return "Embalaje y contenedores";	break;
			case 'RENEWABLES_AND_ENVIRONMENT': return "Energía renovable y medio ambiente";	break;
			case 'HIGHER_EDUCATION': return "Enseñanza superior";	break;
			case 'ENTERTAINMENT': return "Entretenimiento";	break;
			case 'PACKAGE_AND_FREIGHT_DELIVERY': return "Envío de paquetes y carga";	break;
			case 'COMPUTER_HARDWARE': return "Equipo informático";	break;
			case 'PHILANTHROPY': return "Filantropía";	break;
			case 'PROFESSIONAL_TRAINING': return "Formación profesional";	break;
			case 'PHOTOGRAPHY': return "Fotografía";	break;
			case 'THINK_TANKS': return "Gabinetes estratégicos";	break;
			case 'RANCHING': return "Ganadería";	break;
			case 'INVESTMENT_MANAGEMENT': return "Gestión de inversiones";	break;
			case 'NON_PROFIT_ORGANIZATION_MANAGEMENT': return "Gestión de organizaciones sin ánimo de lucro";	break;
			case 'EDUCATION_MANAGEMENT': return "Gestión educativa";	break;
			case 'HOSPITALITY': return "Hostelería";	break;
			case 'IMPORT_AND_EXPORT': return "Importar y exportar";	break;
			case 'PRINTING': return "Imprenta";	break;
			case 'AVIATION_AND_AEROSPACE': return "Industria aeroespacial y aviación";	break;
			case 'PHARMACEUTICALS': return "Industria farmacéutica";	break;
			case 'APPAREL_AND_FASHION': return "Industria textil y moda";	break;
			case 'CIVIL_ENGINEERING': return "Ingeniería civil";	break;
			case 'MECHANICAL_OR_INDUSTRIAL_ENGINEERING': return "Ingeniería industrial o mecánica";	break;
			case 'RECREATIONAL_FACILITIES_AND_SERVICES': return "Instalaciones y servicios de recreo";	break;
			case 'RELIGIOUS_INSTITUTIONS': return "Instituciones religiosas";	break;
			case 'COMPUTER_NETWORKING': return "Interconexión en red";	break;
			case 'INTERNET': return "Internet";	break;
			case 'RESEARCH': return "Investigación";	break;
			case 'MARKET_RESEARCH': return "Investigación de mercado";	break;
			case 'JUDICIARY': return "Judicial";	break;
			case 'DAIRY': return "Lácteos";	break;
			case 'LOGISTICS_AND_SUPPLY_CHAIN': return "Logística y cadena de suministro";	break;
			case 'ELECTRICAL_AND_ELECTRONIC_MANUFACTURING': return "Manufactura eléctrica y electrónica";	break;
			case 'RAILROAD_MANUFACTURE': return "Manufactura ferroviaria";	break;
			case 'MACHINERY': return "Maquinaria";	break;
			case 'MARKETING_AND_ADVERTISING': return "Marketing y publicidad";	break;
			case 'BUILDING_MATERIALS': return "Materiales de construcción";	break;
			case 'BUSINESS_SUPPLIES_AND_EQUIPMENT': return "Material y equipo de negocios";	break;
			case 'ALTERNATIVE_MEDICINE': return "Medicina alternativa";	break;
			case 'BROADCAST_MEDIA': return "Medios de difusión";	break;
			case 'CAPITAL_MARKETS': return "Mercados capitales";	break;
			case 'MINING_AND_METALS': return "Minería y metalurgia";	break;
			case 'FURNITURE': return "Mobiliario";	break;
			case 'MUSEUMS_AND_INSTITUTIONS': return "Museos e instituciones";	break;
			case 'MUSIC': return "Música";	break;
			case 'NANOTECHNOLOGY': return "Nanotecnología";	break;
			case 'MARITIME': return "Naval";	break;
			case 'LEISURE_AND_TRAVEL': return "Ocio y viajes";	break;
			case 'EXECUTIVE_OFFICE': return "Oficina ejecutiva";	break;
			case 'LEGISLATIVE_OFFICE': return "Oficina legislativa";	break;
			case 'CIVIC_AND_SOCIAL_ORGANIZATION': return "Organización cívica y social";	break;
			case 'POLITICAL_ORGANIZATION': return "Organización política";	break;
			case 'MOTION_PICTURES_AND_FILM': return "Películas y cine";	break;
			case 'NEWSPAPERS': return "Periódicos";	break;
			case 'OIL_AND_ENERGY': return "Petróleo y energía";	break;
			case 'FISHERY': return "Piscicultura";	break;
			case 'PLASTICS': return "Plásticos";	break;
			case 'PUBLIC_POLICY': return "Política pública";	break;
			case 'FOOD_PRODUCTION': return "Producción alimentaria";	break;
			case 'MEDIA_PRODUCTION': return "Producción multimedia";	break;
			case 'PAPER_AND_FOREST_PRODUCTS': return "Productos de papel y forestales";	break;
			case 'CHEMICALS': return "Productos químicos";	break;
			case 'MEDICAL_PRACTICE': return "Profesiones médicas";	break;
			case 'COMPUTER_SOFTWARE': return "Programas informáticos";	break;
			case 'PUBLIC_SAFETY': return "Protección civil";	break;
			case 'PUBLISHING': return "Publicaciones";	break;
			case 'FUNDRAISING': return "Recaudación de fondos";	break;
			case 'HUMAN_RESOURCES': return "Recursos humanos";	break;
			case 'WRITING_AND_EDITING': return "Redacción y revisión";	break;
			case 'GOVERNMENT_RELATIONS': return "Relaciones gubernamentales";	break;
			case 'PUBLIC_RELATIONS': return "Relaciones públicas";	break;
			case 'ALTERNATIVE_DISPUTE_RESOLUTION': return "Resolución de conflicto por terceras partes";	break;
			case 'RESTAURANTS': return "Restaurantes";	break;
			case 'HEALTH_WELLNESS_AND_FITNESS': return "Sanidad, bienestar y buena condición física";	break;
			case 'AUTOMOTIVE': return "Sector automovilístico";	break;
			case 'TEXTILES': return "Sector textil";	break;
			case 'COMPUTER_AND_NETWORK_SECURITY': return "Seguridad del ordenador y de las redes";	break;
			case 'SECURITY_AND_INVESTIGATIONS': return "Seguridad e investigaciones";	break;
			case 'INSURANCE': return "Seguros";	break;
			case 'SEMICONDUCTORS': return "Semiconductores";	break;
			case 'CONSUMER_SERVICES': return "Servicio al consumidor";	break;
			case 'INFORMATION_SERVICES': return "Servicio de información";	break;
			case 'EVENTS_SERVICES': return "Servicios de eventos";	break;
			case 'FINANCIAL_SERVICES': return "Servicios financieros";	break;
			case 'FACILITIES_SERVICES': return "Servicios infraestructurales";	break;
			case 'LEGAL_SERVICES': return "Servicios jurídicos";	break;
			case 'ENVIRONMENTAL_SERVICES': return "Servicios medioambientales";	break;
			case 'INDIVIDUAL_AND_FAMILY_SERVICES': return "Servicios para el individuo y la familia";	break;
			case 'UTILITIES': return "Servicios públicos";	break;
			case 'INFORMATION_TECHNOLOGY_AND_SERVICES': return "Servicios y tecnología de la información";	break;
			case 'OUTSOURCING_OFFSHORING': return "Subcontrataciones/Offshoring";	break;
			case 'SUPERMARKETS': return "Supermercados";	break;
			case 'TOBACCO': return "Tabaco";	break;
			case 'WIRELESS': return "Tecnología inalámbrica";	break;
			case 'TELECOMMUNICATIONS': return "Telecomunicaciones";	break;
			case 'TRANSLATION_AND_LOCALIZATION': return "Traducción y localización";	break;
			case 'TRANSPORTATION_TRUCKING_AND_RAILROAD': return "Transporte por carretera o ferrocarril";	break;
			case 'WHOLESALE': return "Venta al por mayor";	break;
			case 'RETAIL': return "Venta al por menor";	break;
			case 'VETERINARY': return "Veterinaria";	break;
			case 'COMPUTER_GAMES': return "Videojuegos";	break;
			case 'WINE_AND_SPIRITS': return "Vino y licor";	break;
			default: return false; break;		

		}
	}
},

ready: function () {
	this.load_data(),
	this.load_targets_all(),
	this.AllServices(this.id)
		//setTimeout(this.load_data, 0)
	}
});


Vue.filter('DateSmall', function (value) {
	return moment(date).format('MMM Do YY');
})

Vue.filter('fromNow', function (value) {
	return moment(date).fromNow();
})

	// fromNow: function (date) {
	// 	return moment(date).fromNow();
	// },
	// DateSmall: function (date) {
	// 	return moment(date).format('MMM Do YY');
	// },
	// DateLarge: function(date){
	// 	return moment(date).format('YYYY-MM-DD 00:00:00'); 
	// },