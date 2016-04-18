<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;




class ContactoController extends Controller

{
   
    

    public function NewContact()
    {
     $data = (object) array("page" => "Nuevo Contacto");
     return view('contactos.nuevo',['data' => $data]);
 }

 public function NewCompany()
 {
     $valores = ["Exactitud","logro","Audacia","altruismo","Ambición","asertividad","Equilibrio","Siendo el mejor","perteneciente","audacia","calma","cuidado","desafío","alegría","compromiso","comunidad","compasión","Competitividad","consistencia","contribución","control","cooperación","exactitud","cortesía","creatiidad","curiosidad","La rapidez de decisión","democraticidad","confianza","determinación","devoción","diligencia","disciplina","discreción","diversidad","dinamismo","economía","eficacia","eficiencia","elegancia","empatía","disfrute","entusiasmo","igualdad","excelencia","emoción","pericia","exploración","expresividad","justicia","fe","Familia","fidelidad","aptitud","fluidez","foco","libertad","divertido","generosidad","bondad","gracia","crecimiento","felicidad","Trabajo duro","Salud","Ayudar Sociedad","Santidad","honestidad","honor","Humildad","Independencia","ingenio","Armonía Interior","curiosidad","perspicacia","Inteligencia","Intelectual Estado","Intuición","Alegría","Justicia","Liderazgo","Legado","Amor","Lealtad","Marcar La Diferencia","Maestría","Mérito","obediencia","apertura","Solicitar","originalidad","Patriotismo","perfección","piedad","La positividad","sentido práctico","preparación","profesionalismo","prudencia","Calidad-orientación","confiabilidad","inventiva","restricción","Orientación a resultados","rigor","seguridad","La auto-realización","Autocontrol","desinterés","Confianza en sí mismo","sensibilidad","serenidad","servicio","sagacidad","sencillez","solvencia","velocidad","espontaneidad","estabilidad","estratégico","fuerza","estructura","éxito","apoyo","trabajo en equipo","templanza","gratitud","minuciosidad","consideración","oportunidad","tolerancia","tradicionalismo","integridad","Búsqueda de la verdad","comprensión","unicidad","unidad","utilidad","visión","vitalidad"];

    $data = (object) array("page" => "Nueva Empresa","valores"=>$valores);
    return view('empresas.nuevo',['data' => $data]);
}
public function Company ()
{
    $data = (object) array("page" => "Nueva Empresa");
    return view('empresas.empresa',['data' => $data]);
}
public function Clientes () {
    $data = (object) array("page" => "Clientes");
    return view('contactos.lista',['data' => $data]);
}
public function Empresas () {
    $data = (object) array("page" => "Empresas");
    return view('empresas.lista',['data' => $data]);
}

public function PerfilCliente () {
    $data = (object) array("page" => "Clientes");
    return view('contactos.perfil',['data' => $data]);
}

public function PerfilEmpresa () {
    $data = (object) array("page" => "Clientes");
    return view('empresas.perfil',['data' => $data]);
}
}
