Vue.http.options.beforeSend = function(request) {
    request.headers['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
};

Vue.filter('reverse', function (value) {
  return value.split('').reverse().join('')
})

Vue.filter('my-filter', function (value) {
  //content
})

var vm = new Vue({

	el: '#app-profile',
	data: function () {  {
		return {
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
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
			case '': return " ";	break;
		
		}
	}
},

ready: function () {
	this.load_data()
		//setTimeout(this.load_data, 0)
	}
});