<?php echo $header ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h4 class="visible-sm visible-xs">MEN&Uacute;</h4>
			<ul id="profile_navtabs" class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">Visi&oacute;n General</a>
				</li>
				<li role="presentation">
					<a href="#perfil" aria-controls="perfil" role="tab" data-toggle="tab">Perfil</a>
				</li>
				<li role="presentation">
					<a href="#direcciones" aria-controls="direcciones" role="tab" data-toggle="tab">Libreta de direcciones</a>
				</li>
				<li role="presentation">
					<a href="#contrasena" aria-controls="contrasena" role="tab" data-toggle="tab">Modificar Contrase&ntilde;a</a>
				</li>
			</ul>
			<hr class="visible-xs visible-sm" />
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="vision">
					<h3>Visión General</h3>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div>
							<p>Nombre:<br /><span>Guido Orellana</span></p>
							<p>Correo Electr&oacute;nico:<br /><span>g.orellana.huelva@gmail.com</span></p>
							<p>Celular:<br /><span></span></p>
							<p>Tienda preferida:<br /><span>TUMI Arkadia</span></p></div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div>
							<p>Direcci&oacute;n de facturaci&oacute;n<br />
								<span>1692 NW 82nd Ave Doral, Florida 33126-1018 United States</span>
							</p></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 visible-lg visible-md">&nbsp;</div>
					</div>
					<div class="row" id="birthdaypresent">
						<div class="col-lg-6 col-md-6">
							<div>
							<h6>Reciba un regalo de TUMI</h6>
							<p>D&iacute;ganos la fecha de su cumplea&ntilde;os para recibir promociones especiales de Tumi.</p>
							<p>FECHA DE NACIMIENTO</p>
							<form class="form-inline">
								<select name="BIRTHDAY_DAY">
									<?php for($dia = 1; $dia<=31; $dia++):?>
									<option value="<?=$dia?>"><?=$dia?></option>
									<?php endfor?>
								</select>
								<select name="BIRTHDAY_MONTH">
									<?php $date = date_components('sp');
									foreach($date['meses'] as $i => $month):?>
									<option value="<?=$i?>"><?=$month?></option>
									<?php endforeach?>
								</select>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></button>
							</form>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="perfil">
					<h3>PERFIL</h3>
					<p>Puede utilizar este formulario en caso desea actualizar sus datos de perfil</p>
					<hr />
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<form id="profileform" method="post" action="">
								<div class="form-group">
									<label for="PROFILE_NAME">Nombre<span> *</span></label>
									<input type="text" class="form-control" id="PROFILE_NAME" name="PROFILE_NAME" value="Guido" />
								</div>
								<div class="form-group">
									<label for="PROFILE_LASTNAME">Apellidos<span> *</span></label>
									<input type="text" class="form-control" id="PROFILE_LASTNAME" name="PROFILE_LASTNAME" value="Orellana Huelva" />
								</div>
								<div class="form-group">
									<label for="PROFILE_CEL">Tel&eacute;fono Celular</label>
									<input type="text" class="form-control" id="PROFILE_CEL" name="PROFILE_CEL" value="5918-5307" />
								</div>
								<p>Su informaci&oacute;n ser&aacute; utilizada conforme a nuestra <a href="#">pol&iacute;tica de privacidad</a></p>
								<button type="submit" class="btn btn-info">Actualizar Informaci&oacute;n <span class="glyphicon glyphicon-chevron-right"></span></button>
							</form>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="spacer visible-sm visible-xs"></div>
							<div>
								<h6 class="bold">TIENDA PREFERIDA</h6>
								<p><a href="#">TUMI Store</a></p>
								<p><a href="#">Modificar tienda</a></p>
							</div>
							<div class="spacer"></div>
							<div>
								<form class="form-inline">
									<h6 class="bold">Fecha de cumplea&ntilde;os</h6>
									<select name="BIRTHDAY_DAY">
										<?php for($dia = 1; $dia<=31; $dia++):?>
										<option value="<?=$dia?>"><?=$dia?></option>
										<?php endfor?>
									</select>
									<select name="BIRTHDAY_MONTH">
										<?php $date = date_components('sp');
										foreach($date['meses'] as $i => $month):?>
										<option value="<?=$i?>"><?=$month?></option>
										<?php endforeach?>
									</select>
									<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane" id="direcciones">
					<h3>LIBRETA DE DIRECCIONES</h3>
					<p>Listado de direcciones para env&iacute;o de tus pedidos.</p>
					<a class="btn btn-info" role="button" data-toggle="collapse" href="#collapseNewAddress" aria-expanded="false" aria-controls="collapseNewAddress">Agregar Direcci&oacute;n <span class="glyphicon glyphicon-menu-down"></span></a>
					<hr />
					<form method="post" action="" class="form-horizontal collapse" id="collapseNewAddress">
						<div class="form-group">
							<label for="country">Pa&iacute;s: </label>
							<select name="ADDRESS_COUNTRY" id="country" class="form-control">
								<option value="GUATEMALA">Guatemala</option>
								<option value="SALVADOR">El Salvador</option>
							</select>
						</div>
						<div class="form-group">
							<label for="addressname">Nombre: </label>
							<input type="text" value="" id="addressname" class="form-control" />
						</div>
						<div class="form-group">
							<label for="addressline1">Direcci&oacute;n: </label>
							<input type="text" value="" id="addressline1" class="form-control" />
						</div>
						<div class="form-group">
							<label for="region">Regi&oacute;n / Zona: </label>
							<select name="REGION" id="region" class="form-control">
								<?php $zonas = caex_zones(); 
								foreach($zonas as $i => $zona):?>
									<option value="<?=$i?>"><?=$zona?></option>
								<?php endforeach?>
							</select>
						</div>
						<div class="form-group">
							<button class="btn btn-default" type="submit">Agregar Direcci&oacute;n <span class="glyphicon glyphicon-menu-right"></span></button>
						</div>
						<hr />
					</form>
					<form>
					<div class="row" class="visible-lg visible-md">
						<div class="col-lg-6 col-md-6">
							<strong>Direcci&oacute;n de env&iacute;o</strong>
						</div>
						<div class="col-lg-6 col-md-6">
							<strong>Acciones</strong>
						</div>
						<div class="col-lg-12 col-md-12">
							<hr />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<strong>Guido Orellana</strong>
							<address>
								19 ave 5-04 La Monta&ntilde;a zona 16.<br />
								Guatemala, Guatemala.
							</address>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<a href="#">Modificar</a><br />
							<input type="radio" class="" selected="selected"> Por Defecto
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<hr />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<strong>Guido Orellana</strong>
							<address>
								19 ave 5-04 La Monta&ntilde;a zona 16.<br />
								Guatemala, Guatemala.
							</address>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<a href="#">Modificar</a><br />
							<input type="radio" class=""> Por Defecto
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<hr />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<strong>Guido Orellana</strong>
							<address>
								19 ave 5-04 La Monta&ntilde;a zona 16.<br />
								Guatemala, Guatemala.
							</address>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<a href="#">Modificar</a><br />
							<input type="radio" class=""> Por Defecto
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<hr />
						</div>
					</div>
					</form>
				</div>
				<div role="tabpanel" class="tab-pane" id="contrasena">
					<h3>MODIFICAR CONTRASE&Ntilde;A</h3>
					<hr />
					<form method="post" action="" class="form-horizontal">
						<div class="form-group">
							<label for="current">Contrase&ntilde;a actual:</label>
							<input type="password" value="" class="form-control" id="current" />
						</div>
						<div class="form-group">
							<label for="newpass">Nueva Contrase&ntilde;a:</label>
							<input type="password" value="" class="form-control" id="newpass" />
						</div>
						<div class="form-group">
							<label for="confirmnewpass">Confirmar Contrase&ntilde;a:</label>
							<input type="password" value="" class="form-control" id="confirmnewpass" />
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Cambiar Contrase&ntilde;a <span class="glyphicon glyphicon-menu-right"></span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php echo $atencion?>
</div>