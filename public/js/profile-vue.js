Vue.http.options.beforeSend = function(request) {
	request.headers['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
};

// define

Vue.component('anotacion', {
	template: '#anotacion-template'
});
Vue.component('recordatorio', {
	template: '#recordatorio-template'
});


Vue.component('cobro', {
	data: function () {
		return {
			datos_servicio: "123",
		}
	},
	props: ['monto','vence','serial','mensaje','foto','estado','id_target','id'],
	template: '#cobro-template',
	methods: {
		RevisarServicio:function(serial){
			id = serial,
			this.datos_servicio = vm.serviceId(id)
		}

	}
	
});

var vm = new Vue({

	el: '#app-profile',
	data: function () {  {
		return {
			target_id:"",			
			data_targets:"",
			id:"",
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

	serviceId: function (id) {
		this.$http.get('/asteroid/service/'+id).then((data) => {
			this.$set('target_id', data.json()),
			target_id = data.json() 
		})		
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
		return moment(date).format('L');
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
	this.load_targets_all()
		//setTimeout(this.load_data, 0)
	}
});



