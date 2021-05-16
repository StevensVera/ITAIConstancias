<?php

$item = null;
$valor = null;
$orden = "CantidadProcesal";

$EsProcesal = ContraladorEstadoProcesal::ctrMostrarEProcesal($item, $valor, $orden);

$colores = array("#512E7D","#BF9FE8");

?>

<!-- Styles -->
  <style>
    
    #chartdiv_2 {
    width: 100%;
    height: 300px;
    font-size: 11px;
    background: #CED8F6;
    } 

    .amcharts-pie-slice_2 {
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

    .amcharts-pie-slice_2:hover {
    transform: scale(1.1);
    filter: url(#shadow);
}             


</style>

<div class="box box-default" id="AccesoInformacionEstadoPro" style="width: 90%; margin: 0 auto; padding-bottom: 15px;">
	
	<div class="box-header with-border">
  
      <h3 class="box-title">Exp. Acceso a la Informacion por Estado Procesal</h3>

    </div>

	<div class="box-body">
    
      	<div class="row">

	        <div class="col-md-12">

	 			<div class="chart-responsive">
	            
	            	<div id="chartdiv_2"></div>
	          
	          	</div>

	        </div>

		</div>

    </div>
</div>

<script>
	
  var PieData_2        = [

  <?php

  for($i = 0; $i < 2; $i++){

    echo "{
      value    : ".$EsProcesal[$i]["AccesoInformación"].",
      color    : '".$colores[$i]."',
      label    : '".$EsProcesal[$i]["EstadoProcesal"]."'
    },";

  }
    
   ?>
  ]
var chart_2 = AmCharts.makeChart("chartdiv_2", {
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
  "dataProvider": PieData_2,
  "valueField": "value",
  "titleField": "label",
  "colorField": "color",
  "outlineAlpha": 0.4,
  "depth3D": 15,
  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b>([[percents]]%)</span>",
  "angle": 40,
  "export": {
    "enabled": true
  }
});

chart_2.addListener("init", handleInit);

chart_2.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart_2.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge_2 = e.dataItem.wedge.node;
  wedge_2.parentNode.appendChild(wedge_2);
}


</script>