<?php
require 'layouts/header.php';
?>
<div class="content-wrapper">        
    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-12">
               	<div class="box">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<h3>Mensajes de Textos<a href=""> <button class="btn btn-success">Nuevo</button></a> <a href=""><button class="btn btn-warning">Reporte</button></a></h3>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-condensed table-hover" id="myTable">
									<thead>
										<th>Código</th>
										<th>Descripción</th>
										<th>Cantidad</th>
										<th>Opciones</th>
									</thead>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td><a href=""><button class="btn btn-primary">Detalles</button></a> <a href=""><button class="btn btn-info">Editar</button></a> <a href="" data-target="#modal-delete-" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					  <!--Fin centro -->
              	</div><!-- /.box -->
          	</div><!-- /.col -->
      	</div><!-- /.row -->
  	</section><!-- /.content -->

	</div>
<?php  
require_once 'layouts/footer.php';
?>


