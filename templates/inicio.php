<?php
require 'layouts/header.php';
?>

<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="panel-body">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                <strong>Ventas por categoria mes actual</strong>
                              </div>
                              <div class="box-body">
                                <div id="chartContainer" class="grafico" style=""></div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                <strong>Ventas de los últimos 30 días</strong>
                              </div>
                              <div class="box-body">
                                <div id="chart" class="grafico"></div>
                              </div>
                          </div>
                        </div>
                    </div>                    
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h3>$2.000</h3>
                              <p>Ventas</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-line-chart" aria-hidden="true"></i>
                            </div>
                            <a href="venta" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-red">
                            <div class="inner">
                              <h3>$1.000</h3>
                              <p>Compras</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-area-chart" aria-hidden="true"></i>
                            </div>
                            <a href="ingreso" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-yellow">
                            <div class="inner">
                              <h3>N° 20</h3>
                              <p>Clientes</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <a href="cliente" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-green">
                            <div class="inner">
                              <h3>N° 20</h3>
                              <p>Proveedores</p>
                            </div>
                            <div class="icon">
                              <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <a href="proveedor" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                 <strong>Ventas del Mes</strong>
                              </div>
                              <div class="box-body">
                                <div id="chartContainerA" class="grafico"></div>
                              </div>  
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                <strong>Transacciones comerciales año <?php echo date("Y"); ?></strong>
                              </div>
                              <div class="box-body">
                                <div id="chartContainers" class="grafico"></div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php

require 'layouts/footer.php';
?>

<script src="../../public/js/chart.min.js"></script>
<script src="../../public/js/Chart.bundle.min.js"></script>
<script src="../../public/js/canvasjs.min.js"></script>
<script src="../../public/js/jquery.canvasjs.min.js"></script>




