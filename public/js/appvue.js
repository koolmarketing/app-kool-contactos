// define


var vm = new Vue({

  el: '#app-home',

  data: {
    recaudo: [],
    finanzas: [],
    mail:"usuario@koolmarketing.net",
    tarjetas: [],
    tipo_cobro : 'cobro',
    tipo_recordatorio : 'recordatorio',
    tipo_anotacion : 'comentario',
    data_anotacion:[],
    data_recordatorio:[],
    data_cobro:[],
    anotacion_inicio:"",
    anotacion_final:"",
    btn_filter_date:"",
    id: "", mensaje: "",id_creador: "",fecha_cobro: "", fecha_vencimiento: "", serial: "",monto: "",estado: "",created_at: "",updated_at: "",fecha_inicio: "",    involucrados: "",id_perfil: "",tipo_perfil: "",tipo_anotacion: "", comprobante: "",    fecha_comentario: "",empresa_id: "",foto: "", nombre_comercial: "", fotografia: "",
    UpNote : { _token: $('meta[name="csrf-token"]').attr('content'), mensaje: "",id_creador: "",fecha_cobro: "", fecha_vencimiento: "", serial: "",monto: "",estado: "",fecha_inicio: "",   involucrados: "",id_perfil: "",tipo_perfil: "",tipo_anotacion: "", comprobante: "", fecha_comentario: ""},
    UpData : { _token: $('meta[name="csrf-token"]').attr('content'), mensaje : "", id_creador: "",fecha_cobro: "", serial: "",  monto: "",  estado: "",  fecha_inicio: "", involucrados: "", id_perfil: "",   tipo_anotacion: "", comprobante: "",    fecha_comentario: "",  },
    valores_recaudo:{dia:{actual:"", porcentaje:"", total:""},
    semana:{actual:"", porcentaje: "", total: ""},
    mes:{actual:"", porcentaje:"", total:""},
    trimestre_actual:{actual:"", porcentaje:"", total:""},
    semestre_actual:{actual:"", porcentaje:"", total:""},
    ano:{actual:"", porcentaje:"", total:""},
  },
  valores_finanzas:{
    enero:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    febrero:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    marzo:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    abril:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    mayo:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    junio:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    julio:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    agosto:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    septiembre:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    octubre:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    noviembre:{contratacion_mes:"",meta_actual:"",meta_mes:""},
    diciembre:{contratacion_mes:"",meta_actual:"",meta_mes:""}
  },
  arr_contrataciones : [],
  arr_meta_actual    : [],
  arr_meta_mes       : [],
  mensaje_correo: "Escribir mensaje"
},


methods: {

  delete_note: function (id) {
    var ConfirmBox = confirm("¿Realmente desea eliminar esta tarjeta?")
    if(ConfirmBox) 
      this.$http.delete('card/' + id)
    this.load_notes()

  },

  load_cartera: function(){

    this.$http.get('/api/recaudo').then((recaudo) => {
      this.$set('recaudo', recaudo.json()),
      this.recaudo = recaudo.json(),
      this.valores_recaudo.dia.actual = parseInt(this.recaudo.dia.meta_actual[0].total),
      this.valores_recaudo.dia.total = parseInt(this.recaudo.dia.meta_total[0].total),
      this.valores_recaudo.dia.porcentaje = parseInt(((this.valores_recaudo.dia.actual * 100) / this.valores_recaudo.dia.total));


      this.valores_recaudo.semana.actual = parseInt(this.recaudo.semana.meta_actual[0].total),
      this.valores_recaudo.semana.total = parseInt(this.recaudo.semana.meta_total[0].total),
      this.valores_recaudo.semana.porcentaje = parseInt((this.valores_recaudo.semana.actual * 100 / this.valores_recaudo.semana.total));


      this.valores_recaudo.mes.actual = parseInt(this.recaudo.mes.meta_actual[0].total),
      this.valores_recaudo.mes.total = parseInt(this.recaudo.mes.meta_total[0].total),
      this.valores_recaudo.mes.porcentaje = parseInt(((this.valores_recaudo.mes.actual * 100) / this.valores_recaudo.mes.total));

      this.valores_recaudo.trimestre_actual.actual = parseInt(this.recaudo.trimestre_actual.meta_actual[0].total),
      this.valores_recaudo.trimestre_actual.total = parseInt(this.recaudo.trimestre_actual.meta_total[0].total),
      this.valores_recaudo.trimestre_actual.porcentaje = parseInt(((this.valores_recaudo.trimestre_actual.actual * 100) / this.valores_recaudo.trimestre_actual.total));

      this.valores_recaudo.semestre_actual.actual = parseInt(this.recaudo.semestre_actual.meta_actual[0].total),
      this.valores_recaudo.semestre_actual.total = parseInt(this.recaudo.semestre_actual.meta_total[0].total),
      this.valores_recaudo.semestre_actual.porcentaje = parseInt(((this.valores_recaudo.semestre_actual.actual * 100) / this.valores_recaudo.semestre_actual.total));


      this.valores_recaudo.ano.actual = parseInt(this.recaudo.ano.meta_actual[0].total),
      this.valores_recaudo.ano.total = parseInt(this.recaudo.ano.meta_total[0].total)
      this.valores_recaudo.ano.porcentaje = parseInt(((this.valores_recaudo.ano.actual * 100) / this.valores_recaudo.ano.total));

    })
},

load_notes: function(){
  this.$http.get('/card').then((response) => {
    this.$set('tarjetas', response.json()),
    this.tarjetas = response.json()
  })
},

reload_notes:function(){
  if (this.anotacion_inicio =="") {
    this.load_notes();
  }else {
    this.load_notes_date();
  }
},


load_finanzas: function(){
  this.finanzas = "";
  this.$http.get('/api/finanzas').then((finanzas) => {
    this.$set('finanzas', finanzas.json()),
    this.finanzas = finanzas.json(),

    this.valores_finanzas.enero.contratacion_mes = parseInt(this.finanzas.enero.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.enero.contratacion_mes),
    this.valores_finanzas.enero.meta_actual = parseInt(this.finanzas.enero.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.enero.meta_actual),
    this.valores_finanzas.enero.meta_mes = parseInt(this.finanzas.enero.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.enero.meta_mes),

    this.valores_finanzas.febrero.contratacion_mes = parseInt(this.finanzas.febrero.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.febrero.contratacion_mes),
    this.valores_finanzas.febrero.meta_actual = parseInt(this.finanzas.febrero.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.febrero.meta_actual),
    this.valores_finanzas.febrero.meta_mes = parseInt(this.finanzas.febrero.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.febrero.meta_mes),

    this.valores_finanzas.marzo.contratacion_mes = parseInt(this.finanzas.marzo.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.marzo.contratacion_mes),
    this.valores_finanzas.marzo.meta_actual = parseInt(this.finanzas.marzo.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.marzo.meta_actual),
    this.valores_finanzas.marzo.meta_mes = parseInt(this.finanzas.marzo.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.marzo.meta_mes),

    this.valores_finanzas.abril.contratacion_mes = parseInt(this.finanzas.abril.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.abril.contratacion_mes),
    this.valores_finanzas.abril.meta_actual = parseInt(this.finanzas.abril.meta_actual[0].total),  this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.abril.meta_actual),
    this.valores_finanzas.abril.meta_mes = parseInt(this.finanzas.abril.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.abril.meta_mes),

    this.valores_finanzas.mayo.contratacion_mes = parseInt(this.finanzas.mayo.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.mayo.contratacion_mes),
    this.valores_finanzas.mayo.meta_actual = parseInt(this.finanzas.mayo.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.mayo.meta_actual),
    this.valores_finanzas.mayo.meta_mes = parseInt(this.finanzas.mayo.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.mayo.meta_mes),

    this.valores_finanzas.junio.contratacion_mes = parseInt(this.finanzas.junio.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.junio.contratacion_mes),
    this.valores_finanzas.junio.meta_actual = parseInt(this.finanzas.junio.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.junio.meta_actual),
    this.valores_finanzas.junio.meta_mes = parseInt(this.finanzas.junio.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.junio.meta_mes),

    this.valores_finanzas.julio.contratacion_mes = parseInt(this.finanzas.julio.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.julio.contratacion_mes),
    this.valores_finanzas.julio.meta_actual = parseInt(this.finanzas.julio.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.julio.meta_actual),
    this.valores_finanzas.julio.meta_mes = parseInt(this.finanzas.julio.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.julio.meta_mes),

    this.valores_finanzas.agosto.contratacion_mes = parseInt(this.finanzas.agosto.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.agosto.contratacion_mes),
    this.valores_finanzas.agosto.meta_actual = parseInt(this.finanzas.agosto.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.agosto.meta_actual),
    this.valores_finanzas.agosto.meta_mes = parseInt(this.finanzas.agosto.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.agosto.meta_mes),

    this.valores_finanzas.septiembre.contratacion_mes = parseInt(this.finanzas.septiembre.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.septiembre.contratacion_mes),
    this.valores_finanzas.septiembre.meta_actual = parseInt(this.finanzas.septiembre.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.septiembre.meta_actual),
    this.valores_finanzas.septiembre.meta_mes = parseInt(this.finanzas.septiembre.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.septiembre.meta_mes),

    this.valores_finanzas.octubre.contratacion_mes = parseInt(this.finanzas.octubre.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.octubre.contratacion_mes),
    this.valores_finanzas.octubre.meta_actual = parseInt(this.finanzas.octubre.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.octubre.meta_actual),
    this.valores_finanzas.octubre.meta_mes = parseInt(this.finanzas.octubre.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.octubre.meta_mes), 

    this.valores_finanzas.noviembre.contratacion_mes = parseInt(this.finanzas.noviembre.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.noviembre.contratacion_mes),
    this.valores_finanzas.noviembre.meta_actual = parseInt(this.finanzas.noviembre.meta_actual[0].total), this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.noviembre.meta_actual),
    this.valores_finanzas.noviembre.meta_mes = parseInt(this.finanzas.noviembre.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.noviembre.meta_mes), 

    this.valores_finanzas.diciembre.contratacion_mes = parseInt(this.finanzas.diciembre.contratacion_mes[0].total), this.ValidarEntero(this.arr_contrataciones,this.valores_finanzas.diciembre.contratacion_mes),
    this.valores_finanzas.diciembre.meta_actual = parseInt(this.finanzas.diciembre.meta_actual[0].total),this.ValidarEntero(this.arr_meta_actual,this.valores_finanzas.diciembre.meta_actual),
    this.valores_finanzas.diciembre.meta_mes = parseInt(this.finanzas.diciembre.meta_mes[0].total), this.ValidarEntero(this.arr_meta_mes,this.valores_finanzas.diciembre.meta_mes) 
  })  

},


load_notes_date: function (){
  ini = this.anotacion_inicio;
  fin = this.anotacion_final;
  if (ini != "" || fin != "") {
    this.tarjetas = "";
    this.$http.get('card/' + ini +'/'+ fin).then((data) => {
      this.$set('tarjetas', data.json()),
      this.tarjetas = data.json()
    })

  }else{console.log("No funciona")}

},

moment: function () {
  return moment();
},


RemoveUser: function (id) {
  var ConfirmBox = confirm("Are you sure, you want to delete this User?")
  if(ConfirmBox) this.$http.delete('/api/users/' + id)
    this.fetchUser()
},

EditRecordatorio: function (id,tipo_anotacion) {
  this.$http.get('/api/card/'+id).then((data) => {
    this.$set('data_recordatorio', data.json()),
    new_data = data.json()
    this.SetData(new_data)

  })
  $('#edit-modal-recordatorio').modal('show');

},

EditAnotacion: function (id,tipo_anotacion) {
  this.$http.get('/api/card/'+id).then((data) => {
    this.$set('data_anotacion', data.json()),
    new_data = data.json()
    this.SetData(new_data)   
  })
  $('#edit-modal-anotacion').modal('show'); 
},

EditCobro: function(id,tipo_anotacion){
  this.$http.get('/api/card/'+id).then((data) => {
    this.$set('data_cobro', data.json()),
    //this.data_cobro = data.json()
    new_data = data.json()
    this.SetData(new_data)

  })
  $('#edit-modal-cobro').modal('show'); 
  this.SetUpdate()

},

EnviarRecordatorio: function(id,tipo){

this.$http.get('/api/card/'+id).then((data) => {
    this.$set('data_recordatorio', data.json()),
    new_data = data.json()
    this.SetData(new_data)
}),
$('#enviar_anotacion').modal('show'); 
},

EnviarCobro: function (id,tipo){
  this.$http.get('/api/card/'+id).then((data) => {
    this.$set('data_anotacion', data.json()),
    new_data = data.json()
    this.SetData(new_data)   
  }),
  $('#enviar_cobro').modal('show'); 
},

Enviar: function (id,tipo){
  switch (tipo) {
    case "comentario":
      // statements_1
      break;
      case "recordatorio":
      //
      break;
      case "cobro":
    //
    break;
    default:
    console.log('Indeterminado');
    break;
  }
},

UpdateNote: function(){

  this.UpNote.id = this.id  
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
  console.log(serial_data);
  event.preventDefault();
  $.ajaxSetup({
    headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
  })

  $.ajax({
    url: 'card/update',
    type: 'POST',
    dataType: 'html',
    processData: false,
    data: serial_data,

    success: function(result){
      console.log(result);
      swal("Tú anotación ha sido actualizada!"); 
    },
    error: function(result){
      console.log(result);
      swal("Ocurrio un Error");
    }
  });
  this.reload_notes()

},


envio_tarjeta: function(tipo_tarjeta){

  swal({   title: "",
    text: "¿Quieres enviar este correo?",
    type: "warning",
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Si, Enviar",   
    cancelButtonText: "Cancelar", 
    showLoaderOnConfirm: true, 
    closeOnConfirm: false,   
    closeOnCancel: false }, 
    function(isConfirm){   
      if (isConfirm) {  
    //
    ;(function(){
     var data_mail = {};

     data_mail.email   = vm.mail;
     data_mail.mensaje = vm.mensaje_correo;
     data_mail.tarjeta = vm.id;
     
     //data_mail_1 = JSON.stringify(data_mail);
     serial_data_envio = $.param( data_mail, true );
     event.preventDefault();
     $.ajaxSetup({
      headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
    })
     $.ajax({
      url: 'card/enviar_correo',
      type: 'POST',
      dataType: 'html',
      processData: false,
      data: serial_data_envio,
      success: function(result){
        console.log(result);
      },
      error: function(result){
        console.log(result);
      }
    });
   })();

    //this.SetDataCorreo();

    //     
    setTimeout(function(){  
      swal("Enviado!", "El mensaje ha sido enviado.", "success");   
    }, 3000);   
  } else {     
    swal("Cancelled", "Cancelado", "error");   
  } 
});
},

ValidarEntero: function(arr,numb){
  numb = numb;
  if (Number.isInteger(numb)) {
    arr.push(numb)
  }
  else{
    arr.push(0)
  }
},
SetData: function(data){
  new_data = data;
  this.id = new_data[0].id
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
SetGrafica: function(){
  setTimeout(function(){
    arr1 = this.arr_contrataciones; arr2 = this.arr_meta_actual; arr3 = this.arr_meta_mes;

    GenerarGraficaFinanzas(arr1,arr2, arr3);
  }, 2000);
}

},
filters: {
  fromNow: function (date) {
    return moment(date).locale(moment.locale('es')).fromNow();
  },
  DateSmall: function (date) {
    return moment(date).format('L');
  },
  DateLarge: function(date){
    return moment(date).format('YYYY-MM-DD 00:00:00'); 
  }
},


computed: {
  anotacion_show: function(){
    return true
  }
},

ready: function () {
  this.load_finanzas(),
  this.load_notes(),
  this.SetGrafica(),
  this.load_cartera()
  
  
  
}
});







