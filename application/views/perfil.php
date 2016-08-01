<?php echo $header?>

<div id="profileareas" class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4">
			<div>
				<div class="head">
					<a href="<?php echo base_url('perfil/cuenta')?>">
						<span class="glyphicon glyphicon-user"></span>
						<h4>Mi Perfil</h4>
						<span class="glyphicon glyphicon-menu-right visible-sm visible-xs"></span>
					</a>
				</div>
				<div class="content visible-lg visible-md">
					<h6>Guido Orellana</h6>
					<p>g.orellana.huelva@gmail.com</p>
					<h6>Mi tienda</h6>
					<a href="#">Encuentre una tienda TUMI cerca</a>
					<hr />
					<a href="<?php echo base_url('perfil/cuenta')?>">Cuenta</a>
					<a href="#">Direcci&oacute;nes de env&iacute;o</a>
					<a href="#">Detalles de pago</a>
					<a href="#">Modificar Contrase&ntilde;a</a>
				</div>
				<div class="footer visible-lg visible-md">
					<hr />
					<a href="<?php echo base_url('perfil/cuenta')?>" class="btn btn-info">Ver perfil <span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4">
			<div>
				<div class="head">
					<a href="<?php echo base_url('perfil/recomendaciones')?>">
						<span class="glyphicon glyphicon-ok-circle"></span>
						<h4>Recomendaciones</h4>
						<span class="glyphicon glyphicon-menu-right visible-sm visible-xs"></span>
					</a>
				</div>
				<div class="content visible-lg visible-md">
					<div class="recomendaciones">
						<a href="#">
							.
							<img src="<?php echo base_url('user_files/uploads/images/22060NA2_main_T.jpg')?>" alt="" />
						</a>
					</div>
				</div>
				<div class="footer visible-lg visible-md">
					<hr />
					<a href="<?php echo base_url('perfil/recomendaciones')?>" class="btn btn-info">Ver m&aacute;s recomendaciones <span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4">
			<div>
				<div class="head">
					<a href="<?php echo base_url('perfil/personalizar')?>">
						<span class="glyphicon glyphicon-sd-video"></span>
						<h4>Monograma</h4>
						<span class="glyphicon glyphicon-menu-right visible-sm visible-xs"></span>
					</a>
				</div>
				<div id="monogram" class="content visible-lg visible-md">
					<span class="monogrampatch" style="color:#DCDCDC;">goh</span>
					<h6>Monograma</h6>
					.
					<img src="<?php echo base_url('user_files/uploads/images/single_patch_T.jpg')?>" />
				</div>
				<div class="footer visible-lg visible-md">
					<hr />
					<a href="<?php echo base_url('perfil/personalizar')?>" class="btn btn-info">Ver Monograma<span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row visible-lg visible-md">
		<div class="col-lg-12 col-md-12">&nbsp;</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4">
			<div>
				<div class="head">
					<a href="<?php echo base_url('perfil/ordenes')?>">
						<span class="glyphicon glyphicon-shopping-cart"></span>
						<h4>Productos Guardados</h4>
						<span class="glyphicon glyphicon-menu-right visible-sm visible-xs"></span>
					</a>
				</div>
				<div id="savedproducts" class="content visible-lg visible-md">
					
					<div id="savedcarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="http://tumi.scene7.com/is/image/Tumi/22149NA2_main_T?hei=463&layer=2&opac=0&layer=3&opac=0" />
								<dl class="dl-horizontal">
									<dt>NOMBRE:</dt>
									<dd>Bolsa de viaje blanda</dd>
									<dt>Añadido:</dt>
									<dd>5/22/2015</dd>
									<dt>Precio:</dt>
									<dd>$415</dd>
									<dt>Disponibilidad:</dt>
									<dd>En Stock</dd>
								</dl>
							</div>
							<div class="item">
								<img src="http://tumi.scene7.com/is/image/Tumi/22149NA2_main_T?hei=463&layer=2&opac=0&layer=3&opac=0" />
								<dl class="dl-horizontal">
									<dt>NOMBRE:</dt>
									<dd>Bolsa de viaje blanda</dd>
									<dt>Añadido:</dt>
									<dd>5/22/2015</dd>
									<dt>Precio:</dt>
									<dd>$415</dd>
									<dt>Disponibilidad:</dt>
									<dd>En Stock</dd>
								</dl>
							</div>
							<div class="item">
								<img src="http://tumi.scene7.com/is/image/Tumi/22149NA2_main_T?hei=463&layer=2&opac=0&layer=3&opac=0" />
								<dl class="dl-horizontal">
									<dt>NOMBRE:</dt>
									<dd>Bolsa de viaje blanda</dd>
									<dt>Añadido:</dt>
									<dd>5/22/2015</dd>
									<dt>Precio:</dt>
									<dd>$415</dd>
									<dt>Disponibilidad:</dt>
									<dd>En Stock</dd>
								</dl>
							</div>
						</div>		
						<a class="left carousel-control" href="#savedcarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
							<span class="sr-only">Atr&aacute;s</span>
						</a>
						<a class="right carousel-control" href="#savedcarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
							<span class="sr-only">Adelante</span>
						</a>
					</div>
				</div>
				<div class="footer visible-lg visible-md">
					<hr />
					<a href="<?php echo base_url('perfil/ordenes')?>" class="btn btn-info">Ver Productos / Compras<span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
		</div>
		
		<div class="col-lg-4 col-md-4">
			<div>
				<div class="head">
					<a href="<?php echo base_url('perfil/tracer')?>">
						<span class="glyphicon glyphicon-barcode"></span>
						<h4>TUMI Tracer</h4>
						<span class="glyphicon glyphicon-menu-right visible-sm visible-xs"></span>
					</a>
				</div>
				
				<div class="content visible-lg visible-md">
					<form id="tumitracer" action="" method="post" class="form-inline">
						<div class="form-group">
							<div class="input-group">
								<input type="text" placeholder="Ingresa tu c&oacute;digo de 20-digitos" class="form-control" />
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-menu-right"></span></button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="footer visible-lg visible-md">
					<hr />
					<a href="<?php echo base_url('perfil/tracer')?>" class="btn btn-info">Ver m&aacute;s recomendaciones <span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4">
			<div>
				<div class="head">
					<a href="<?php echo base_url('perfil/reparaciones')?>">
						<span class="glyphicon glyphicon-wrench"></span>
						<h4>Servicio de Garant&iacute;as</h4>
						<span class="glyphicon glyphicon-menu-right visible-sm visible-xs"></span>
					</a>
				</div>
				<div id="warrantyreclaims" class="content visible-lg visible-md">
					<strong>ÚLTIMO TICKET ABIERTO</strong>
					<dl class="dl-horizontal">
						<dt>TICKET</dt>
						<dd>R00062</dd>
						<dt>NOMBRE</dt>
						<dd>Guido Orellana</dd>
						<dt>PRODUCTO</dt>
						<dd>028020D2</dd>
					</dl>
					<img src="<?php echo base_url('user_files/uploads/images/tumidamage.jpg')?>" />
				</div>
				<div class="footer visible-lg visible-md">
					<hr />
					<a href="<?php echo base_url('perfil/reparaciones')?>" class="btn btn-info">Ver todos los reclamos <span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>
