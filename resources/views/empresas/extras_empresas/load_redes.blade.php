<script>

 var redes = ["Gmail", "Zohomail", "Facebook", "Twitter", "Youtube", "Instagram", "Linkedin", "Pinterest","Prestashop","Wordpress","Hootsuite", "Amarillas_Internet", "Photosnack", "FTP", "Red"];
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
  obj_redes.zohomail_6 = {title:"Zohoomail", name:"zohomail_6", position:6, active:false};
  obj_redes.zohomail_7 = {title:"Zohoomail", name:"zohomail_7", position:7, active:false};
  obj_redes.zohomail_8 = {title:"Zohoomail", name:"zohomail_8", position:8, active:false};
  obj_redes.zohomail_9 = {title:"Zohoomail", name:"zohomail_9", position:9, active:false};
  obj_redes.zohomail_10= {title:"Zohoomail", name:"zohomail_10", position:10, active:false};
  obj_redes.facebook  = {title:"Facebook", name:"facebook",   position:1, active:false};
  obj_redes.twitter   = {title:"Twitter", name:"twitter",     position:1, active:false};
  obj_redes.youtube   = {title:"Youtube", name:"youtube",     position:1, active:false};
  obj_redes.instagram = {title:"Instagram", name:"instagram", position:1, active:false};
  obj_redes.linkedin  = {title:"Linkedin", name:"linkedin",   position:1, active:false};
  obj_redes.pinterest = {title:"Pinterest", name:"pinterest", position:1, active:false};
  obj_redes.hootsuite = {title:"Hootsuite", name:"hootsuite", position:1, active:false};
  obj_redes.amarillas_internet = {title:"Amarillas_Internet", name:"amarillas_internet", position:1, active:false};
  obj_redes.photosnack= {title:"Photosnack", name:"photosnack", position:1, active:false};
  obj_redes.ftp       = {title:"FTP",name:"ftp", position:1, active:false};
  // Redes
  obj_redes.red_adicional_1  = {title:"Red", name:"red_adicional_1",  position:1, active:false};
  obj_redes.red_adicional_2  = {title:"Red", name:"red_adicional_2",  position:2, active:false}; 
  obj_redes.red_adicional_3  = {title:"Red", name:"red_adicional_3",  position:3, active:false}; 
  obj_redes.red_adicional_4  = {title:"Red", name:"red_adicional_4",  position:4, active:false}; 
  obj_redes.red_adicional_5  = {title:"Red", name:"red_adicional_5",  position:5, active:false}; 
  obj_redes.red_adicional_6  = {title:"Red", name:"red_adicional_6",  position:6, active:false}; 
  obj_redes.red_adicional_7  = {title:"Red", name:"red_adicional_7",  position:7, active:false}; 
  obj_redes.red_adicional_8  = {title:"Red", name:"red_adicional_8",  position:8, active:false}; 
  obj_redes.red_adicional_9  = {title:"Red", name:"red_adicional_9",  position:9, active:false}; 
  obj_redes.red_adicional_10 = {title:"Red", name:"red_adicional_10", position:10, active:false}; 
  obj_redes.red_adicional_11 = {title:"Red", name:"red_adicional_11", position:11, active:false}; 
  obj_redes.red_adicional_12 = {title:"Red", name:"red_adicional_12", position:12, active:false}; 
  obj_redes.red_adicional_13 = {title:"Red", name:"red_adicional_13", position:13, active:false};   

  // Prestashop y Wordpress
  obj_redes.prestashop  = {title:"Prestashop", name:"prestashop",  position:1, active:false};
  obj_redes.wordpress  = {title:"Wordpress", name:"wordpress",  position:2, active:false}; 

// Arreglo Gmail
arr_gmail = ["cuenta_1","cuenta_2","cuenta_3","cuenta_4","cuenta_5"];

// Arreglo Zohomail
arr_gmail = ["cuenta_1","cuenta_2","cuenta_3","cuenta_4","cuenta_5","cuenta_6","cuenta_7","cuenta_8","cuenta_9","cuenta_10"];

// Arreglo Red +
arr_red_adicional = ["cuenta_1","cuenta_2","cuenta_3","cuenta_4","cuenta_5","cuenta_6","cuenta_7","cuenta_8","cuenta_9","cuenta_10","cuenta_11","cuenta_12","cuenta_13"];

//  Arreglo redes
var arr_redes=(Object.keys(obj_redes));

// HIDE REDES SOCIALES.

for (var i = 0; i < arr_redes.length; i++) {  
  $("#"+arr_redes[i]+"").attr('attr-visible', 'false');
  $("#"+arr_redes[i]+"").hide();
}


for (var i = 0; i < redes.length; i++) {
  $("#lista_redes").append("<option value='"+redes[i]+"'>"+redes[i]+"</option>");
}
 
</script>


<script>
  $("body").on('click', '#btn_add_red', function(event) {
  event.preventDefault();

  var val=$("#lista_redes").val();
  alert(val);
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
    } else {x+=1;}
  }
}
  else if(val=="Red"){
    x=1;
    encontrado=false;
    while (encontrado==false || x==13) {
        value = obj_redes["red_adicional_"+x+""].active;
        if (value==false) {
          obj_redes["red_adicional_"+x+""].active=true;
          encontrado=true;
          var name_div = obj_redes["red_adicional_"+x+""].name;
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
    case "Prestashop": $("#prestashop").show(); obj_redes["prestashop"].active=true; 
    break;
    case "Wordpress": $("#wordpress").show(); obj_redes["wordpress"].active=true; 
    break;
    default: console.log("error");
  }
}});
</script>

@if(!empty($gmail->cuenta_1->usuario[0]))
<script>
  $("#gmail_1").show(); obj_redes["gmail_1"].active=true;
  $('[name="gmail_1[usuario][]"]').val('{!! $gmail->cuenta_1->usuario[0] !!}');
  $('[name="gmail_1[contraseña][]"]').val('{!! $gmail->cuenta_1->contraseña[0] !!}');
</script>
@endif
@if(!empty($gmail->cuenta_2->usuario[0]))
<script>
  $("#gmail_2").show(); obj_redes["gmail_2"].active=true;
  $('[name="gmail_2[usuario][]"]').val('{!! $gmail->cuenta_2->usuario[0] !!}');
  $('[name="gmail_2[contraseña][]"]').val('{!! $gmail->cuenta_2->contraseña[0] !!}');
</script>
@endif
@if(!empty($gmail->cuenta_3->usuario[0]))
<script>
  $("#gmail_3").show(); obj_redes["gmail_3"].active=true;
  $('[name="gmail_3[usuario][]"]').val('{!! $gmail->cuenta_3->usuario[0] !!}');
  $('[name="gmail_3[contraseña][]"]').val('{!! $gmail->cuenta_3->contraseña[0] !!}');
</script>
@endif
@if(!empty($gmail->cuenta_4->usuario[0]))
<script>
  $("#gmail_4").show(); obj_redes["gmail_4"].active=true;
  $('[name="gmail_4[usuario][]"]').val('{!! $gmail->cuenta_4->usuario[0] !!}');
  $('[name="gmail_4[contraseña][]"]').val('{!! $gmail->cuenta_4->contraseña[0] !!}');
</script>
@endif
@if($gmail->cuenta_5->usuario[0] != "")
<script>
  $("#gmail_5").show(); obj_redes["gmail_5"].active=true;
  $('[name="gmail_5[usuario][]"]').val('{!! $gmail->cuenta_5->usuario[0] !!}');
  $('[name="gmail_5[contraseña][]"]').val('{!! $gmail->cuenta_5->contraseña[0] !!}');
</script>
@endif

{{-- ZOHOMAIL LOAD --}}
@if($zohomail->cuenta_1->usuario[0] != "")
<script>
  $("#zohomail_1").show(); obj_redes["zohomail_1"].active=true;
  $('[name="zohomail_1[usuario][]"]').val('{!! $zohomail->cuenta_1->usuario[0] !!}');
  $('[name="zohomail_1[contraseña][]"]').val('{!! $zohomail->cuenta_1->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_2->usuario[0] != "")
<script>
  $("#zohomail_2").show(); obj_redes["zohomail_2"].active=true;
  $('[name="zohomail_2[usuario][]"]').val('{!! $zohomail->cuenta_2->usuario[0] !!}');
  $('[name="zohomail_2[contraseña][]"]').val('{!! $zohomail->cuenta_2->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_3->usuario[0] != "")
<script>
  $("#zohomail_3").show(); obj_redes["zohomail_3"].active=true;
  $('[name="zohomail_3[usuario][]"]').val('{!! $zohomail->cuenta_3->usuario[0] !!}');
  $('[name="zohomail_3[contraseña][]"]').val('{!! $zohomail->cuenta_3->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_4->usuario[0] != "")
<script>
  $("#zohomail_4").show(); obj_redes["zohomail_4"].active=true;
  $('[name="zohomail_4[usuario][]"]').val('{!! $zohomail->cuenta_4->usuario[0] !!}');
  $('[name="zohomail_4[contraseña][]"]').val('{!! $zohomail->cuenta_4->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_5->usuario[0] != "")
<script>
  $("#zohomail_5").show(); obj_redes["zohomail_5"].active=true;
  $('[name="zohomail_5[usuario][]"]').val('{!! $zohomail->cuenta_5->usuario[0] !!}');
  $('[name="zohomail_5[contraseña][]"]').val('{!! $zohomail->cuenta_5->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_6->usuario[0] != "")
<script>
  $("#zohomail_6").show(); obj_redes["zohomail_6"].active=true;
  $('[name="zohomail_6[usuario][]"]').val('{!! $zohomail->cuenta_6->usuario[0] !!}');
  $('[name="zohomail_6[contraseña][]"]').val('{!! $zohomail->cuenta_6->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_7->usuario[0] != "")
<script>
  $("#zohomail_7").show(); obj_redes["zohomail_7"].active=true;
  $('[name="zohomail_7[usuario][]"]').val('{!! $zohomail->cuenta_7->usuario[0] !!}');
  $('[name="zohomail_7[contraseña][]"]').val('{!! $zohomail->cuenta_7->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_8->usuario[0] != "")
<script>
  $("#zohomail_8").show(); obj_redes["zohomail_8"].active=true;
  $('[name="zohomail_8[usuario][]"]').val('{!! $zohomail->cuenta_8->usuario[0] !!}');
  $('[name="zohomail_8[contraseña][]"]').val('{!! $zohomail->cuenta_8->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_9->usuario[0] != "")
<script>
  $("#zohomail_9").show(); obj_redes["zohomail_9"].active=true;
  $('[name="zohomail_9[usuario][]"]').val('{!! $zohomail->cuenta_9->usuario[0] !!}');
  $('[name="zohomail_9[contraseña][]"]').val('{!! $zohomail->cuenta_9->contraseña[0] !!}');
</script>
@endif
@if($zohomail->cuenta_10->usuario[0] != "")
<script>
  $("#zohomail_10").show(); obj_redes["zohomail_10"].active=true;
  $('[name="zohomail_10[usuario][]"]').val('{!! $zohomail->cuenta_10->usuario[0] !!}');
  $('[name="zohomail_10[contraseña][]"]').val('{!! $zohomail->cuenta_10->contraseña[0] !!}');
</script>
@endif


{{-- Otras Redes --}}
@if(!empty($redes_adicionales))
@if($redes_adicionales->cuenta_1->usuario[0] != "")
<script>
  $("#red_adicional_1").show(); obj_redes["red_adicional_1"].active=true;
  $('[name="red_adicional_1[url][]"]').val('{!! $redes_adicionales->cuenta_1->url[0] !!}');
  $('[name="red_adicional_1[usuario][]"]').val('{!! $redes_adicionales->cuenta_1->usuario[0] !!}');
  $('[name="red_adicional_1[contraseña][]"]').val('{!! $redes_adicionales->cuenta_1->contraseña[0] !!}');
</script>
@endif
@endif


@if(!empty($facebook))
@if($facebook->usuario[0]!="")
<script>
  $("#facebook").show(); obj_redes["facebook"].active=true;
  $('[name="facebook[usuario][]"]').val('{!! $facebook->usuario[0] !!}');
  $('[name="facebook[contraseña][]"]').val('{!! $facebook->contraseña[0] !!}');
</script>
@endif
@endif

@if(!empty($twitter))
@if($twitter->usuario[0]!="")
<script>
  $("#twitter").show(); obj_redes["twitter"].active=true;
  $('[name="twitter[usuario][]"]').val('{!! $twitter->usuario[0] !!}');
  $('[name="twitter[contraseña][]"]').val('{!! $twitter->contraseña[0] !!}');
</script>
@endif
@endif


@if(!empty($youtube))
@if($youtube->usuario[0]!="")
<script>
  $("#youtube").show(); obj_redes["youtube"].active=true;
  $('[name="youtube[usuario][]"]').val('{!! $youtube->usuario[0] !!}');
  $('[name="youtube[contraseña][]"]').val('{!! $youtube->contraseña[0] !!}');
</script>
@endif
@endif

@if(!empty($linkedin))
@if($linkedin->usuario[0]!="")
<script>
  $("#linkedin").show(); obj_redes["linkedin"].active=true;
  $('[name="linkedin[usuario][]"]').val('{!! $linkedin->usuario[0] !!}');
  $('[name="linkedin[contraseña][]"]').val('{!! $linkedin->contraseña[0] !!}');
</script>
@endif
@endif

@if(!empty($pinterest))
@if($pinterest->usuario[0]!="")
<script>
  $("#pinterest").show(); obj_redes["pinterest"].active=true;
  $('[name="pinterest[usuario][]"]').val('{!! $pinterest->usuario[0] !!}');
  $('[name="pinterest[contraseña][]"]').val('{!! $pinterest->contraseña[0] !!}');
</script>
@endif
@endif

@if(!empty($amarillas_internet))
@if($amarillas_internet->usuario[0]!="")
<script>
  $("#amarillas_internet").show(); obj_redes["amarillas_internet"].active=true;
  $('[name="amarillas_internet[usuario][]"]').val('{!! $amarillas_internet->usuario[0] !!}');
  $('[name="amarillas_internet[contraseña][]"]').val('{!! $amarillas_internet->contraseña[0] !!}');
</script>
@endif
@endif

@if(!empty($hootsuite))
@if($hootsuite->usuario[0]!="")
<script>
  $("#hootsuite").show(); obj_redes["hootsuite"].active=true;
  $('[name="hootsuite[usuario][]"]').val('{!! $hootsuite->usuario[0] !!}');
  $('[name="hootsuite[contraseña][]"]').val('{!! $hootsuite->contraseña[0] !!}');
</script>
@endif
@endif

@if(!empty($photosnack))
@if($photosnack->usuario[0]!="")
<script>
  $("#photosnack").show(); obj_redes["photosnack"].active=true;
  $('[name="photosnack[usuario][]"]').val('{!! $photosnack->usuario[0] !!}');
  $('[name="photosnack[contraseña][]"]').val('{!! $photosnack->contraseña[0] !!}');
</script>
@endif
@endif

@if(!empty($wordpress))
@if($wordpress->usuario[0]!="")
<script>
  $("#wordpress").show(); obj_redes["wordpress"].active=true;
  $('[name="wordpress[url][]"]').val('{!! $wordpress->url[0] !!}');
  $('[name="wordpress[usuario][]"]').val('{!! $wordpress->usuario[0] !!}');
  $('[name="wordpress[contraseña][]"]').val('{!! $wordpress->contraseña[0] !!}');
</script>
@endif
@endif

@if(!empty($prestashop))
@if($prestashop->usuario[0]!="")
<script>
  $("#prestashop").show(); obj_redes["prestashop"].active=true;
  $('[name="prestashop[url][]"]').val('{!! $prestashop->url[0] !!}');
  $('[name="prestashop[usuario][]"]').val('{!! $prestashop->usuario[0] !!}');
  $('[name="prestashop[contraseña][]"]').val('{!! $prestashop->contraseña[0] !!}');
</script>
@endif
@endif
