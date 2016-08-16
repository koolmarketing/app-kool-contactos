// define
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

var vm = new Vue({

  el: '#app-home',

  data: {
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
    id: "", mensaje: "",id_creador: "",fecha_cobro: "", fecha_vencimiento: "",
    serial: "",monto: "",estado: "",created_at: "",updated_at: "",fecha_inicio: "",
    involucrados: "",id_perfil: "",tipo_perfil: "",tipo_anotacion: "", comprobante: "",
    fecha_comentario: "",empresa_id: "",foto: "", nombre_comercial: "", fotografia: "",
    UpNote : {
      id: "", mensaje: "",id_creador: "",fecha_cobro: "", fecha_vencimiento: "",
      serial: "",monto: "",estado: "",created_at: "",updated_at: "",fecha_inicio: "",
      involucrados: "",id_perfil: "",tipo_perfil: "",tipo_anotacion: "", comprobante: "",
      fecha_comentario: "",empresa_id: "",foto: "", nombre_comercial: "", fotografia: ""
    },
    UpData : { _token: $('meta[name="csrf-token"]').attr('content'), mensaje : "", id_creador: "",
    fecha_cobro: "", serial: "",  monto: "",
    estado: "",  fecha_inicio: "",
    involucrados: "", id_perfil: "",
    tipo_anotacion: "", comprobante: "",
    fecha_comentario: ""
  }
},


methods: {

  delete_note: function (id) {
    var ConfirmBox = confirm("¿Realmente desea eliminar esta tarjeta?")
    if(ConfirmBox) 
      this.$http.delete('card/' + id)
    this.load_notes()

  },

  load_notes: function () {
   this.$http.get('/card').then((data) => {
    this.$set('anotaciones', data.json()),
    this.tarjetas = data.json()
  })
 }﻿,

 load_cartera: function(){
   this.$http.get('/api/recaudo').then((data) => {
    this.$set('anotaciones', data.json()),
    this.tarjetas = data.json()
  })
 },

 load_notes_date: function (){
  ini = this.anotacion_inicio;
  fin = this.anotacion_final;
  if (ini != "" || fin != "") {
    this.tarjetas = "";
      this.$http.get('card/' + ini +'/'+ fin).then((data) => {
    this.$set('anotaciones', data.json()),
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
    //this.data_cobro = data.json()
    new_data = data.json()
    //console.log(new_data[0].fecha_cobro)
    this.fecha_cobro = new_data[0].fecha_cobro
    this.mensaje = new_data[0].mensaje
    this.id_creador = new_data[0].mensaje
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
    this.empresa_id = new_data[0].empresa_id
    this.fecha_comentario = new_data[0].fecha_comentario
    this.foto = new_data[0].foto
    this.nombre_comercial = new_data[0].nombre_comercial
    this.fotografia = new_data[0].fotografia
  })
$('#enviar_recordatorio').modal('show'); 
},

EnviarCobro: function (id,tipo){
  this.$http.get('/api/card/'+id).then((data) => {
    this.$set('data_recordatorio', data.json()),
    //this.data_cobro = data.json()
    new_data = data.json()
    //console.log(new_data[0].fecha_cobro)
    this.fecha_cobro = new_data[0].fecha_cobro
    this.mensaje = new_data[0].mensaje
    this.id_creador = new_data[0].mensaje
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
    this.empresa_id = new_data[0].empresa_id
    this.fecha_comentario = new_data[0].fecha_comentario
    this.foto = new_data[0].foto
    this.nombre_comercial = new_data[0].nombre_comercial
    this.fotografia = new_data[0].fotografia
  })
$('#enviar_cobro').modal('show'); 
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
  this.UpNote.empresa_id = this.empresa_id
  this.UpNote.foto = this.foto
  this.$http.post('/api/update/note' + this.id, this.UpNote, function (data) {
    console.log(data)  })
  console.log(this.UpNote.serial)
},

SetUpdate: function(){

  this.UpData.mensaje      = this.mensaje
  this.UpData.id_creador   = this.id_creador
  this.UpData.fecha_cobro  = this.fecha_cobro
  this.UpData.serial       = this.serial
  this.UpData.estado       = this.estado
  this.UpData.fecha_inicio = this.fecha_inicio
  this.UpData.involucrados = this.involucrados
  this.UpData.id_perfil    = this.id_perfil
  this.UpData.tipo_anotacion = this.tipo_anotacion
  this.UpData.comprobante  = this.comprobante
  this.UpData.fecha_comentario = this.fecha_comentario

  console.log(this.UpData)

},


UpdateCobro: function (){
  this.SetUpdate()
  var newDataCard = this.UpData;
  this.$http.patch('/card/' + this.id, newDataCard , function (data) {
    console.log(data)  })
  this.load_notes()

},


SetData: function(data){
  new_data = data;
  this.id = new_data[0].id
  this.fecha_cobro = new_data[0].fecha_cobro
  this.mensaje = new_data[0].mensaje
  this.id_creador = new_data[0].mensaje
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
  this.load_notes()
  // this.items = this.getItems();
}
});

