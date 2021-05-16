<?php

$item = null;
$valor = null;
$orden = "CantidadExpediente";

$TExpediente = ControladorTipoExpediente::ctrMostrarTExpediente($item, $valor, $orden);
$colores = array("#512E7D","#BF9FE8");
?>


<!-- Styles -->
  <style>
    
    #chartdiv {
    width: 100%;
    height: 300px;
    font-size: 11px;
    background: #CED8F6;
    } 

    .amcharts-pie-slice {
    transform: scale(1);
    transform-origin: 50% 50%;
    transition-duration: 0.3s;
    transition: all .3s ease-out;
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    cursor: pointer;
    box-shadow: 0 0 30px 0 #000;
    }

    .amcharts-pie-slice:hover {
    transform: scale(1.1);
    filter: url(#shadow);
}             


</style>



<!--=====================================
PRODUCTOS MÁS VENDIDOS
======================================-->

<div class="box box-default" id="TipoRecursoRevision" style="width: 90%; margin: 0 auto; padding-bottom: 15px;">
	
	<div class="box-header with-border">
  
      <h3 class="box-title" >Tipo de Expediente Recurso de Revisión</h3>

    </div>

	<div class="box-body" >
    
      	<div class="row">

	        <div class="col-md-12" >

	 			         <div class="chart-responsive">
	            
	            	      <div id="chartdiv"></div>
	          
	          	  </div>

	        </div>
      
		</div>

    </div>
</div>



<script>

var PieData = [

  <?php

  for($i = 0; $i < 2; $i++){

    echo "{
      value    : ".$TExpediente[$i]["CantidadExpediente"].",
      TExpediente    : '".$TExpediente[$i]["TipoExpediente"]."',
      color : '".$colores[$i]."'
    },";

  }
    
   ?>
  ]  

var chart = AmCharts.makeChart("chartdiv", {
  "type": "pie",
   "theme": "light",
  "addClassNames": true,
  "legend":{
    "position":"right",
    "marginRight":50,
    "autoMargins":false
  },
  "type": "pie",
  "theme": "light",
  "dataProvider": PieData,
  "valueField": "value",
  "titleField": "TExpediente",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 15,
  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b>([[percents]]%)</span>",
  "angle": 40,
  "export": {
    "enabled": true
  }
});

chart.addListener("init", handleInit);

chart.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);
}

</script>