<?php echo $header?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<form method="post" action="" id="tumitracerform">
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">1. Datos personales</h3></div>
				<div class="panel-body">
					<p>
						<address>
							<strong>Guido Orellana</strong><br />
							<abbr title="Direcci&oacute;n">D. </abbr> Rafael Land&iacute;var 10-05 Paseo Cayal&aacute; zona 16. Local I-109<br />
							<abbr title="Correo Electr&oacute;nico">E. </abbr> guido.orellana@grupoi5.com<br />
							<abbr title="Tel&eacute;fono">T. </abbr> (502) 2493-8136
						</address>
					</p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">2. Detalle del producto</h3></div>
				<div class="panel-body">
					<div class="form-group">
						<label for="skunumber">C&oacute;digo del producto</label>
						<input type="text" id="skunumber" class="form-control" placeholder="C&oacute;digo de estilo que inicia con cero y contiene letras al final. " value="" />
						<span class="help-block">El c&oacute;digo de producto inicia con cero y contiene letras, por ejemplo (022060D2).</span>
					</div>
					<div class="form-group">
						<label for="tracernumber">N&Uacute;MERO TUMI TRACER</label>
						<input type="number" id="tracernumber" class="form-control" placeholder="C&oacute;digo de 20-digitos" value="" />
						<span class="help-block">El c&oacute;digo de TUMI Tracer es el n&uacute;mero de 20 d&iacute;gitos.</span>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">3. Descripci&oacute;n del da&ntilde;o</h3></div>
				<div class="panel-body">
					<div class="form-group">
						<label for="reclaimdescription">Detalle del da&ntilde;o</label>
						<textarea id="reclaimdescription" class="form-control" placeholder="" ></textarea>
						<span class="help-block">Por favor, describa los da&ntilde;os del producto, sea lo m&aacute;s espec&iacute;fico posible.</span>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading"><h3 class="panel-title">4. Im&aacute;genes del da&ntilde;o</h3></div>
				<div class="panel-body">
					<div class="form-group">
						<label for="completeimage">Imagen del producto completo</label>
						<input type="file" id="completeimage" class="form-control" />
						<span class="help-block">Por favor, cargue una imagen del producto completo por la parte frontal.</span>
					</div>
					<div class="form-group">
						<label for="tracerimage">Imagen de la placa con el TUMI tracer</label>
						<input type="file" id="tracerimage" class="form-control" />
						<span class="help-block">Por favor, cargue una imagen de la placa de TUMI tracer en su producto.</span>
					</div>
					<div class="form-group">
						<label for="damageimage">Imagen del da&ntilde;o</label>
						<input type="file" id="damageimage" class="form-control" />
						<span class="help-block">Por favor, cargue una imagen de la parte da&ntilde;ada de su producto.</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-default">ENVIAR RECLAMO</button>
			</div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
		<p>Una vez que recibamos su pedido de reparación, le enviaremos una respuesta por correo electrónico a
		<strong>guido.orellana@grupoi5.com</strong> con la información necesaria para procesar su pedido de reparación.</p>
	</div>
</div>
<?php echo $atencion?>