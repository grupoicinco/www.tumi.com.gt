<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<form method="post" action="" id="tumitracerform">
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">1. Introduzca su c&oacute;digo TUMI Tracer</h3></div>
				<div class="panel-body">
					<div class="form-group">
						<label for="tracernumber">INSCRIPCI&Oacute;N TUMI TRACER</label>
						<input type="number" class="form-control" placeholder="Ingresa tu c&oacute;digo de 20-digitos" value="<?=$tracer?>" />
						<span class="help-block">El c&oacute;digo de TUMI Tracer es un n&uacute;mero de 20 d&iacute;gitos que se encuentra en una placa con el logo TUMI. &Uacute;nicamente son 20 d&iacute;gitos n&uacute;mericos.</span>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">2. Complete el registro</h3></div>
				<div class="panel-body">
					<div class="form-group">
						<label for="tracercountry">PA&Iacute;S: </label>
						<select id="tracercountry" class="form-control">
							<?php foreach(world_countries('sp') as $country):?>
								<option value="<?=$country?>"><?=$country?></option>
							<?php endforeach?>
						</select>
					</div>
					<div class="form-group">
						<label for="">NOMBRE <span>*</span>: </label>
						<input type="text" class="form-control" placeholder="" />
					</div>
					<div class="form-group">
						<label for="">APELLIDO <span>*</span>: </label>
						<input type="text" class="form-control" placeholder="" />
					</div>
					<div class="form-group">
						<label for="">CORREO ELECTR&Oacute;NICO <span>*</span>: </label>
						<input type="email" class="form-control" placeholder="" />
					</div>
					<div class="form-group">
						<label for="">TEL&Eacute;FONO <span>*</span>: </label>
						<input type="text" class="form-control" placeholder="" />
					</div>
					<div class="form-group">
						<label for="">DIRECCI&Oacute;N <span>*</span>: </label>
						<input type="text" class="form-control" placeholder="" />
					</div>
					<div class="form-group">
						<label for="">CIUDAD <span>*</span>: </label>
						<input type="text" class="form-control" placeholder="" />
					</div>
					<div class="form-group">
						<label for="">PROVINCIA <span>*</span>: </label>
						<input type="text" class="form-control" placeholder="" />
					</div>
					<div class="form-group">
						<span class="help-block">Esta informaci&oacute;n ser&aacute; utilizada &uacute;nicamente de acuerdo a nuestra <a href="http://intl.tumi.com/s/privacyPolicy" target="_blank">pol&iacute;tica de privacidad</a></span>
						<button type="submit" class="btn btn-default">FINALIZAR REGISTRO</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h5>&iquest;PERDI&Oacute; SU MALETA?</h5>
		<hr />
	</div>
</div>
<div class="row">
	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
		<p>Miles de viajeros pierden el equipaje cada a&ntilde;o, es por ello que TUMI ha creado el exclusivo programa gratuito de recuperaci&oacute;n de productos TUMI Tracer&reg;.<br />
			El programa ayuda a reunir al cliente TUMI con sus art&iacute;culos extraviados o que hayan sido robados.</p>
	</div>
</div>