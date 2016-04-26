<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Empresa;
use App\Persona;
use App\Reporte;
use DB;
use Auth;
use Session;
use Validator;
use Redirect;
use App\Http\Requests;



class ContactoController extends Controller

{     
    public function index()
    {
        $data = (object) array("page" => "Home");
        return view('home',['data' => $data]);
    }

    public function NewContact()
    {
       // $intereses   = [""];
        $hobbits= ["Aviones Spotting","Aerografía","Actuacion","Aeromodelismo","Amateur de Astronomía","Radioaficionados","Animales / Mascotas / Perros", "Artes","Astrología", "Astronomía","Backgammon (juego de mesa)","Bádminton (deporte de raqueta)","Béisbol","Baloncesto","Playa / Tomar el sol ","Caminar por la playa" ,"Chaquira (manualidad con collares)","Beatboxing (imitar sonidos por la boca)",
        "Convertirse en un niño Abogado", "Tocar campanas","Danza del vientre","Andar en bicicleta","Observación de aves","Filigran (doblar papel o alambre)","Acrobacias con bicicletas (BMX)","Herrería ","Blogging", "Juegos de mesa" ,"Canotaje", "Disfraces","Bonsai (Arbol con piedrecitas)","Bolos","Mezcla de la cerveza" ,"Puente","Llevar comida a la movilidad reducida","Construir una casa para Habitat for Humanity","Construcción de Muñecas","Observador de mariposas ","Colección de botones", "Caligrafía Escribir poemas o cuentos cortos", "Campamento", "Hacer vela", "Piragüismo  o canotaje","Car Racing ","Casino (Apuestas)","Buceo en Cuevas","Cheerleading","Ajedrez","Iglesia / actividades de la iglesia ","Fumar cigarros","Mirar nubes","Coleccionar","monedas", "postales","Coleccionar","Coleccionar","antigüedades","Recopilación de ilustraciones","Componer música","Actividades", "Informáticas","Cocina", "Cosplay", "Artesanías","Bricolaje o trabajar con madera","Croché", "Ganchillo", "Punto de cruz", "Crucigramas","Baile", "Dardos","Reciclaje","Fotografía Digital","Muñecas","Dominó", "Dibujo", "Buceo", "Comer fuera","Cursos", "Electrónica", "Bordado","Entrevistar a gente en la calle","Ejercicio (aeróbic, pesas)", "Coches rápidos", "Esgrima", "Pesca", "Fútbol","Maquillaje artistico","Acuarios","Frisbee Golf - Frolf", "Juegos  de cartas","Jardinería", "Venta de Garage","Genealogía", "Geocaching", "La caza del fantasma", "Glowsticking", "Ir al cine", "Golf","Ir Racing Kart","Hacer una pelicula casera","Guitarra", "Análisis de escritura a mano", "Ser boyscout","Excursionismo", "Vender jugos o pasteles","Reparación","Ir a cine","Paseos a caballo","Globo de aire caliente", "Hula hoop o hula hula","Caza", "Ilusión optica","Internet","Los motores a reacción","Fabricación de Joyas", "Rompecabezas", "Malabarismo", "Llevar un diario", "Cocina", "Química","Cometas","Volar cometas","Tejido", "Bordado","Láser", "Lanzar Dardos","Aprende a jugar al poker", "Aprender un idioma", "Aprender un instrumento", "Aprender a pilotar un avión", "Legos", "Escuchando la música", "Macramé", "Magia", "Hacer Model Cars","Modelado con cerillas o topitos de algodon","Meditación","Microscopía", "Metal que detecta  movimiento","Modelado de cohetes","Modelado de los buques", "Modelos", "Motocicletas", "Ciclismo de Montaña", "Montañismo", "Instrumentos Musicales", "Bordados", "Ser propietario de un coche antiguo", "Origami", "Pintura", "Paintball", "Fabricación de papel", "Papermache", "Paracaidismo","Observar a la gente", "Fotografía", "Piano" ,"Pinochle", "Reproducción de música", "Jugar deportes de equipo", "Cerámica", "Títeres", "Pirotécnica", "Acolchado" ,"Rafting", "Fan de los trenes y carriles","R / C Barcos", "R / C Coches", "R / C Helicópteros", "R / C Aviones", "Lectura", "Lectura a las personas mayores", "Relajarte", "El alquiler de películas","El rescate de animales maltratados o abandonados", "Robótica" ,"Recopilación de Rock", "Rockets" ,"Mecer de Bebés de SIDA" ,"Conocer Funcionamiento de las cosas","Acuarios de agua salada o dulce","De Scrapbooking", "Buceo", "Coser", "Pesca del tiburón","Tiro al aire","Compras", "Cantar en el coro" ,"Skateboarding", "Dibujar" ,"Paracaidismo", "Sueño", "Pipas", "Snorkel", "Fabricación de Jabón o velas","Fútbol", "Socializar con los amigos / vecinos", "Pintura digital","Pasar tiempo con la familia / hijos", "Filatelia o coleccion de sobre y sellos","Narración de Cuentos", "Hacer nudos cuerdas" ,"Surf Pesca", "Natación", "Degustación de té", "Tenis" ,"Bobinas de Tesla" ,"Tetris", "Los mensajes de texto", "Textiles", "Frotamiento de Lápida","Herramienta de Recolección" ,"Recogida de juguetes", "Recolección de basura xD","Crear un negocio","Arreglar computadores a domicilio","Ir de viaje","La caza del tesoro","Trekkie","Tutoría para niños","Ver la televisión","Crear un videojuego","Video Juegos", "Voluntario","Ir a pie  por toda la cuidad","Leer o inventar historias de fantasia","Mirar los acontecimientos deportivos","Windsurf", "Vinificación","Trabajos en madera","Trabajo en una despensa de alimentos","Trabajo en los coches","Escritura","Yoga","YoYo","Polcelanicron o porcelana fria"];

        $orientacion = ["Heterosexual","Homosexual","Bisexual","Asexual","Antrosexual"];

        $situacion_sentimental = ["Soltero(a)","Noviazgo","Casado(a)","Divorciado(a)","Separado(a)","Viudo(a)","Unión libre"];

        $religion = ["Católica","Evangélica","Pentecostalismo","Protestantismo","Adventistas del septimo dia","Luteranos","Presbiterianos","Metodistas","Bautista","Testigo de Jehová","Comunión Anglicana","Rastafarismo","Islamismo","Budismo","Judaísmo","Ortodoxa","Wicca","Neopaganismo","Nueva Era","Agnosticismo","Ateísmo","Escepticismo"];





        $data = (object) array("page" => "Nuevo Contacto","orientacion"=>$orientacion,"hobbits"=>$hobbits,"situacion_sentimental"=>$situacion_sentimental,"religion"=>$religion);
        return view('contactos.nuevo',['data' => $data]);
    }

    public function SaveCompany(Request $request)
    {
        $NC = new \App\Empresa;

        $destinationPath = 'uploads/fotos/';

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = 'uploads/fotos';
            $extension = $file->getClientOriginalExtension();
            $filename1 = "".str_random(12).".".$extension."";
            $upload_success = $file->move($destinationPath, $filename1);            

        }

        if (isset($filename1)) { $NC->foto= $filename1;}

        #Values
        $NC->fecha_fundacion  = $request->input('fecha_fundacion');
        $NC->rango            = $request->input('rango');
        $NC->nombre_comercial = $request->input('nombre_comercial');
        $NC->razon_social     = $request->input('razon_social');
        $NC->nit              = $request->input('nit');
        $NC->telefono_1       = $request->input('telefono_1');
        $NC->telefono_2       = $request->input('telefono_2');
        $NC->sitio_web        = $request->input('sitio_web');
        $NC->ciudad_pais      = $request->input('ciudad_pais');
        $NC->direccion        = $request->input('direccion');
        $NC->representante    = json_encode($request->input('representante'));
        $NC->comercial        = json_encode($request->input('comercial'));
        $NC->soporte          = json_encode($request->input('soporte'));
        $NC->valores          = json_encode($request->input('valores'));
        $NC->mision           = $request->input('mision');
        $NC->vision           = $request->input('vision');
        $NC->intereses        = json_encode($request->input('intereses'));


        $gmail = (object) array();

        $gmail->cuenta_1 = $request->input('gmail_1');
        $gmail->cuenta_2 = $request->input('gmail_2');
        $gmail->cuenta_3 = $request->input('gmail_3');
        $gmail->cuenta_3 = $request->input('gmail_4');
        $gmail->cuenta_4 = $request->input('gmail_5');
        $NC->gmail = $gmail;

        $zohomail = (object) array();

        $zohomail->cuenta_1 = $request->input('zohomail_1');
        $zohomail->cuenta_2 = $request->input('zohomail_2');
        $zohomail->cuenta_3 = $request->input('zohomail_3');
        $zohomail->cuenta_3 = $request->input('zohomail_4');
        $zohomail->cuenta_4 = $request->input('zohomail_5');
        $NC->zohomail = $zohomail;

        #Redes
        //$NC->gmail               = json_encode($request->input('gmail'));
        //$NC->zohomail            = json_encode($request->input('zohomail'));

        $NC->facebook            = json_encode($request->input('facebook'));
        $NC->twitter             = json_encode($request->input('twitter'));
        $NC->youtube             = json_encode($request->input('youtube'));
        $NC->instagram           = json_encode($request->input('instagram'));
        $NC->linkedin            = json_encode($request->input('linkedin'));
        $NC->pinterest           = json_encode($request->input('pinterest'));
        $NC->hootsuite           = Json_encode($request->input('hootsuite'));
        $NC->amarillas_internet  = json_encode($request->input('amarillas_internet'));
        $NC->photosnack          = json_encode($request->input('photosnack'));
        $NC->ftp                 = json_encode($request->input('ftp'));

        //$NC->save();
        
        
        return json_encode($zohomail);
        //return var_dump($test["usuario"]);

    }


    public function NewCompany()
    {

       $intereses=["Crecer","Contratar","Capacitar","Expander","Conseguir Socios","Vender la empresa","Afianzar","Colaborar","Donar","Dar a Conocer","Reestructurar","Contruir / Edificar","Recapitalizar","Sostener","Mejorar Ingresos","Pagar Deudas","Liquidar","Comprar Maquinaría/Equipos", "Subcontratar"];

       $valores = ["Exactitud","logro","Audacia","altruismo","Ambición","asertividad","Equilibrio","Siendo el mejor","perteneciente","audacia","calma","cuidado","desafío","alegría","compromiso","comunidad","compasión","Competitividad","consistencia","contribución","control","cooperación","exactitud","cortesía","creatiidad","curiosidad","La rapidez de decisión","democraticidad","confianza","determinación","devoción","diligencia","disciplina","discreción","diversidad","dinamismo","economía","eficacia","eficiencia","elegancia","empatía","disfrute","entusiasmo","igualdad","excelencia","emoción","pericia","exploración","expresividad","justicia","fe","Familia","fidelidad","aptitud","fluidez","foco","libertad","divertido","generosidad","bondad","gracia","crecimiento","felicidad","Trabajo duro","Salud","Ayudar Sociedad","Santidad","honestidad","honor","Humildad","Independencia","ingenio","Armonía Interior","curiosidad","perspicacia","Inteligencia","Intelectual Estado","Intuición","Alegría","Justicia","Liderazgo","Legado","Amor","Lealtad","Marcar La Diferencia","Maestría","Mérito","obediencia","apertura","Solicitar","originalidad","Patriotismo","perfección","piedad","La positividad","sentido práctico","preparación","profesionalismo","prudencia","Calidad-orientación","confiabilidad","inventiva","restricción","Orientación a resultados","rigor","seguridad","La auto-realización","Autocontrol","desinterés","Confianza en sí mismo","sensibilidad","serenidad","servicio","sagacidad","sencillez","solvencia","velocidad","espontaneidad","estabilidad","estratégico","fuerza","estructura","éxito","apoyo","trabajo en equipo","templanza","gratitud","minuciosidad","consideración","oportunidad","tolerancia","tradicionalismo","integridad","Búsqueda de la verdad","comprensión","unicidad","unidad","utilidad","visión","vitalidad"];

       $data = (object) array("page" => "Nueva Empresa","valores"=>$valores,"intereses"=>$intereses);
       return view('empresas.nuevo',['data' => $data]);
   }
   public function Empresa ()
   {
    $data = (object) array("page" => "Nueva Empresa");
    return view('empresas.perfil',['data' => $data]);
}

public function GuardarClientes (Request $request) {


    if($request->ajax()) {  
       $NP = new \App\Persona;

       $destinationPath = 'uploads/fotos/';

       if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $destinationPath = 'uploads/fotos';
        $extension = $file->getClientOriginalExtension();
        $filename1 = "".str_random(12).".".$extension."";
        $upload_success = $file->move($destinationPath, $filename1);            

    }

    if (isset($filename1)) { $NP->foto= $filename1;}
    $NP->cumpleaños             = $request->input('cumpleaños');
    $NP->sexo                   = $request->input('sexo');
    $NP->nombres                = $request->input('nombres');
    $NP->apellidos              = $request->input('apellidos');
    $NP->ciudad_actual          = $request->input('ciudad_actual');
    $NP->ciudad_natal           = $request->input('ciudad_natal');
    $NP->profesion              = $request->input('profesion');
    $NP->empresa_actual         = $request->input('empresa_actual');
    $NP->cargo                  = $request->input('cargo');
    $NP->telefono_oficina       = $request->input('telefono_oficina');
    $NP->telefono_casa          = $request->input('telefono_casa');
    $NP->telefono_movil         = $request->input('telefono_movil');
    $NP->email_corporativo      = $request->input('email_corporativo');
    $NP->email_personal         = $request->input('email_personal');
    $NP->skype                  = $request->input('skype');
    $NP->facebook               = $request->input('facebook');
    $NP->twitter                = $request->input('twitter');
    $NP->linkedin               = $request->input('linkedin');
    $NP->hobbies                = json_encode($request->input('hobbies'));
    $NP->religion               = $request->input('religion');
    $NP->situacion_sentimental  = $request->input('situacion_sentimental');
    $NP->orientacion_sexual     = $request->input('orientacion_sexual');
    $NP->aniversario            = $request->input('aniversario');

    $NP->save();


    return $request->all();
}else{
    return "nope";

}
}

public function Clientes () {

    $all = \App\Persona::all();
    $data = (object) array("page" => "Clientes","all"=>$all);
    return view('contactos.lista',['data' => $data]);
}
public function Empresas () {
    $all = \App\Empresa::all();
    $data = (object) array("page" => "Empresas","all"=>$all);
    return view('empresas.lista',['data' => $data]);
}

public function PerfilCliente ($id) {
    $perfil=\App\Persona::find($id);
    $data = (object) array("page" => "Clientes","perfil"=>$perfil);
    return view('contactos.perfil',['data' => $data]);
}

public function PerfilEmpresa () {
    $data = (object) array("page" => "Clientes");
    return view('empresas.perfil',['data' => $data]);
}

public function NuevoReporte(){
    $data = (object) array("page" => "Reporte");
    return view('reportes.nuevo',['data' => $data]);
}

public function SaveReporte(Request $request){
    if($request->ajax()) { 
        $RP = new \App\Reporte;
        $RP->id_user = Auth::id(); 
        $RP->actividad = $request->input('actividad');
        $RP->cliente = $request->input('cliente');
        $RP->inicio = $request->input('inicio');
        $RP->fin = $request->input('fin');
        $RP->porcentaje = $request->input('terminado');
        $RP->nota = $request->input('anotacion');
        $RP->save();
        return $request->input();        
    }    
}

public function GetReporte(){
    $id = Auth::id();
    $reportes = \App\Reporte::where('id_user', $id)->orderBy('created_at', 'asc')->paginate();
    return $reportes;
}
}
