<?php

$item = null;
$valor = null;
$orden = "id";

/*
$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);
*/

$TipoExpediente = ControladorRevision::ctrMostrarRevision($item,$valor);
$TotalExpediente = count($TipoExpediente);

$TotalCausaTerminacion = ControladorCausaTerminacion::ctrMostrarSumaCTerminacion();

$Comisionados = ControladorComisionado::ctrMostrarComisionado($item,$valor);
$TotalComisionados = count($Comisionados);


?>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-green">
    
    <div class="inner">
    
      <h3><?php echo number_format($TotalExpediente); ?></h3>

      <p>Total de Expedientes</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="recurso-revision" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-blue">
    
    <div class="inner">
    
      <h3><?php echo number_format($TotalCausaTerminacion["total"]); ?></h3>

      <p>Total de Causa de Terminacion</p>
    </div>
    
    <div class="icon">
    
      <i class="ion ion-clipboard"></i>
    
    </div>
    
    <a href="recurso-revision" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6">

  <div class="small-box bg-yellow">
    
    <div class="inner">
    
      <h3><?php echo number_format($TotalComisionados); ?></h3>

      <p>Total de Comisionados</p>
    
    </div>
    
    <div class="icon">
    
      <i class="ion ion-ios-people"></i>
    
    </div>
    
    <a href="recurso-revision" class="small-box-footer">
      
      Más info <i class="fa fa-arrow-circle-right"></i>
    
    </a>

  </div>

</div>

