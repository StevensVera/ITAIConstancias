<?php

$item = null;
$valor = null;
$orden = "CantidadComisionado";

$Comisionado = ControladorComisionado::ctrMostrarComisionado2($item, $valor, $orden);

$colores = array("blue","yellow","red");

$totalCT = ControladorComisionado::ctrMostrarSumaComisionado();

?>

<!--=====================================
PRODUCTOS MÁS VENDIDOS
======================================-->

<div class="box box-default">
	
	<div class="box-header with-border">
  
      <h3 class="box-title">Expediente R.R por Comisionado</h3>

    </div>

	<div class="box-body">
    
      	<div class="row">

	        <div class="col-md-12">

	 			<div class="chart-responsive">
	            
	            	<canvas id="pieChart4" height="150"></canvas>
	          
	          	</div>

	        </div>
		</div>

    </div>

    <div class="box-footer no-padding">
    	
		<ul class="nav nav-pills nav-stacked">
			
			 <?php

          	for($i = 0; $i <3; $i++){
			
          		echo '<li>
						 
						 <a><i class="fa fa-circle-o text-'.$colores[$i].'"></i>
             
						 '.$Comisionado[$i]["ComisionadoPonente"].'

						 <span class="pull-right text-'.$colores[$i].'">   
						 '.ceil($Comisionado[$i]["CantidadComisionado"]).'
						 </span>
							
						 </a>

      				</li>';

			}

			?>


		</ul>

    </div>

</div>

<script>
	

  // -------------
  // - PIE CHART -
  // -------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $('#pieChart4').get(0).getContext('2d');
  var pieChart4       = new Chart(pieChartCanvas);
  var PieData        = [

  <?php

  for($i = 0; $i < 3; $i++){

  	echo "{
      value    : ".$Comisionado[$i]["CantidadComisionado"].",
      color    : '".$colores[$i]."',
      highlight: '".$colores[$i]."',
      label    : '".$Comisionado[$i]["ComisionadoPonente"]."'
    },";

  }
    
   ?>
  ];
  var pieOptions     = {
    // Boolean - Whether we should show a stroke on each segment
    segmentShowStroke    : true,
    // String - The colour of each segment stroke
    segmentStrokeColor   : '#fff',
    // Number - The width of each segment stroke
    segmentStrokeWidth   : 1,
    // Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    // Number - Amount of animation steps
    animationSteps       : 100,
    // String - Animation easing effect
    animationEasing      : 'easeOutBounce',
    // Boolean - Whether we animate the rotation of the Doughnut
    animateRotate        : true,
    // Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale         : false,
    // Boolean - whether to make the chart responsive to window resizing
    responsive           : true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio  : false,
    // String - A legend template
    legendTemplate       : '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<segments.length; i++){%><li><span style=\'background-color:<%=segments[i].fillColor%>\'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
    // String - A tooltip template
    tooltipTemplate      : '<%=value %> <%=label%>'
  };
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart4.Doughnut(PieData, pieOptions);
  // -----------------
  // - END PIE CHART -
  // -----------------


</script>