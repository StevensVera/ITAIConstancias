<?php

$item = null;
$valor = null;
$orden1 = "CantidadExpediente";
$orden = "FechaDePresentacion";

$TExpediente = ControladorTipoExpediente::ctrMostrarTExpediente($item, $valor, $orden1);
$RFecha = ControladorRevision::ctrMostrarRRevision($item, $valor, $orden);

$colores = array("#512E7D","#BF9FE8");
?>


<!-- Styles -->
  <style>
    
    body { background-color: #30303d; color: #fff; }
      #chartdiv_expediente {
      width : 100%;
      height  : 500px;
      }

</style>



<!--=====================================
======================================-->

<div class="box box-default" id="TipoRecursoRevision" style="width: 90%; margin: 0 auto; padding-bottom: 15px;">
	
	<div class="box-header with-border">
  
      <h3 class="box-title" >Tipo de Expediente Recurso de Revisión</h3>

    </div>

	<div class="box-body" >
    
      	<div class="row">

	        <div class="col-md-12" >

	 			         <div class="chart-responsive">
	            
	            	      <div id="chartdiv_expediente"></div>
	          
	          	  </div>

	        </div>
      
		</div>

    </div>
</div>



<script>

 var PieData_Expediente = [

  <?php

  for($i = 0; $i < 2; $i++){

    echo "{
      date: ".$RFecha[$i]["FechaDePresentacion"].",
      value: ".$TExpediente[$i]["CantidadExpediente"]."
      
      
    },";

  }
    
   ?>
  ]  

var chart_expediente = AmCharts.makeChart("chartdiv_expediente", {
    "type": "serial",
    "theme": "dark",
    "marginRight": 40,
    "marginLeft": 40,
    "autoMarginOffset": 20,
    "mouseWheelZoomEnabled":true,
    "dataDateFormat": "YYYY-MM-DD",
    "valueAxes": [{
        "id": "v1",
        "axisAlpha": 0,
        "position": "left",
        "ignoreAxisWidth":true
    }],
    "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    "graphs": [{
        "id": "g1",
        "balloon":{
          "drop":true,
          "adjustBorderColor":false,
          "color":"#ffffff"
        },
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 5,
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "title": "red line",
        "useLineColorForBulletBorder": true,
        "valueField": "value",
        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
    }],
    "chartScrollbar": {
        "graph": "g1",
        "oppositeAxis":false,
        "offset":30,
        "scrollbarHeight": 80,
        "backgroundAlpha": 0,
        "selectedBackgroundAlpha": 0.1,
        "selectedBackgroundColor": "#888888",
        "graphFillAlpha": 0,
        "graphLineAlpha": 0.5,
        "selectedGraphFillAlpha": 0,
        "selectedGraphLineAlpha": 1,
        "autoGridCount":true,
        "color":"#AAAAAA"
    },
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha":1,
        "cursorColor":"#258cbb",
        "limitToGraph":"g1",
        "valueLineAlpha":0.2,
        "valueZoomable":true
    },
    "valueScrollbar":{
      "oppositeAxis":false,
      "offset":50,
      "scrollbarHeight":10
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    },
    "dataProvider": PieData_Expediente
});

chart_expediente.addListener("rendered", zoomChart);

zoomChart();

function zoomChart() {
    chart_expediente.zoomToIndexes(chart_expediente.dataProvider.length - 40, chart_expediente.dataProvider.length - 1);
}

</script>