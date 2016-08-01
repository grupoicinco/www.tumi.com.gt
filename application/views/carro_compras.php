<!-- espaciado para inicio de contenido -->
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_separator"></div>
</div>

<div class="row grayrow cart-row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
		<a href="<?php echo base_url('catalogo')?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Continuar comprando</a>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
		<a class="hidden-xs" href="javascript: print();"><span class="glyphicon glyphicon-print"></span> imprimir p&aacute;gina</a>
	</div>
</div>
<form target="" method="post" class="">
<div class="row" id="cart-header">
	<div class="col-lg-9 col-md-9 col-sm-7 col-xs-12">
		<h2>Carro</h2>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
		<input type="submit" class="btn btn-default btn-block red withdrawal" value="Continuar a forma de pago" />
	</div>
</div>
<div class="row cart-table-heading">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr /></div>
	<div class="col-lg-5 col-md-5 col-sm-5 hidden-xs">
		<h5>Art&iacute;culo</h5>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">
		<h5>Cantidad</h5>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
		<h5>Disponibilidad</h5>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 text-right hidden-xs">
		<h5>TOTAL</h5>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs"><hr /></div>
</div>
<div class="row cart-table-body">
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-5 text-center">
		<img src="http://tumi.scene7.com/is/image/Tumi/114405SLM_main?wid=96&layer=2&opac=0&layer=3&opac=0" />
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-7 cart-product-info">
		<h6>Electronics</h6>
		<p><a href="<?php echo base_url('catalogo/producto')?>">Cable de conector Lightning a USB (1,2 m)</a></p>
		<p><span>$35.00</span></p>
		<p><span>Estilo #:</span>114405SLM</p>
		<p><span>Color:</span>Plateado Met&aacute;lico</p>
		<a class="btn btn-gift"><span class="glyphicon glyphicon-gift"></span> Para regalo</a>
	</div>
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-6">
		<div class="form-group">
			<label for="quant-cart" class="visible-xs control-label">Cantidad: </label>
			<input type="text" id="quant-cart" class="form-control" value="1" />
		</div>
	</div>
	<div class="col-xs-6 visible-xs">
		<p class="cart-total"><span class="visible-xs">Sub-total</span> $35.00</p>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<p class="stock-availability"><span class="glyphicon glyphicon-exclamation-sign"></span> En existencia</p>
		<p class="col-lg-12 col-md-12 col-sm-12 col-xs-4"><a href="<?php echo base_url('catalogo/producto')?>">Modificar</a></p>
		<p class="col-lg-12 col-md-12 col-sm-12 col-xs-4"><a href="#">Guardar</a></p>
		<p class="col-lg-12 col-md-12 col-sm-12 col-xs-4"><a href="#">Eliminar</a></p>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
		<p class="cart-total">$35.00</p>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<hr />
	</div>
</div>

<div class="row">
	<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
		<div id="promo-code" class="form-group">
			<label for="promo-input">C&oacute;digo Promocional</label>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Introduzca un c&oacute;digo promocional" />
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-arrow-right"></span></button>
				</span>
			</div>
			<hr />
			<p>Podr&aacute; seleccionar tarjetas regalo como m&eacute;todo de pago al momento de finalizar su compra.</p>
		</div>
	</div>
	<div id="cart-total" class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">Subtotal</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">$35.00</div>
		</div>
		
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">Costo de env&iacute;o estimado</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">0.00</div>
			<div class="col-lg-12"><hr /></div>
		</div>
		
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cart-total-value">TOTAL</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 cart-total-value text-right">$35.00</div>
		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-default red btn-block withdrawal" value="Continuar a forma de pago" />
		</div>
	</div>
</div>
</form>

<div class="row grayrow cart-row">
	<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
		<a href="<?php echo base_url('catalogo')?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Continuar comprando</a>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
		<a href="<?php echo base_url('atencion/cambios')?>">Pol&iacute;tica de cambio <span class="glyphicon glyphicon-arrow-right"></span></a>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
		<a href="<?php echo base_url('atencion/garantia')?>">Garant&iacute;a <span class="glyphicon glyphicon-arrow-right"></span></a>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-right">
		<a class="hidden-xs" href="javascript: print();"><span class="glyphicon glyphicon-print"></span> imprimir p&aacute;gina</a>
	</div>
</div>

<div class="row" id="recomedaciones-carousel">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 rs-carousel">
		<ul>
			<?php
			$nuevos = array(
						array(
							'img' 	=> 'http://tumi.scene7.com/is/image/Tumi/26173D2_main_T?wid=2000&hei=2000&layer=2&opac=0',
							'head'	=> 'Alpha 2',
							'name'	=> 'Compact'
							),
						array(
							'img' 	=> 'https://tumi.scene7.com/is/image/Tumi/93060D_main?wid=330&layer=2&opac=0&layer=3&opac=0',
							'head'	=> 'Astor',
							'name'	=> 'Osborne 4 wheeled international leather carry-on'
							),
						array(
							'img' 	=> 'https://tumi.scene7.com/is/image/Tumi/63001B_main?wid=330&layer=2&opac=0&layer=3&opac=0',
							'head'	=> 'Harrison',
							'name'	=> 'Madden Brief'
							),
						array(
							'img' 	=> 'https://tumi.scene7.com/is/image/Tumi/222464BGP2_main?wid=330&layer=2&opac=0&layer=3&opac=0',
							'head'	=> 'Bravo',
							'name'	=> 'International Carry-On'
							),
						array(
							'img' 	=> 'https://tumi.scene7.com/is/image/Tumi/28821CYN_main_T?wid=330&layer=2&opac=0&layer=3&opac=0',
							'head'	=> 'Tegra',
							'name'	=> 'Continental Carry-On'
							)
						);
			foreach($nuevos as $item):
			?>
			<li>
				<a>
					<span class="recommendations-image"><img src="<?=$item['img']?>" /></span>
					<span class="recommendations-info"><h4><?=$item['head']?></h4><?=$item['name']?></span>
				</a>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url('library/js/responsive.carousel.js')?>"></script>
<script type="text/javascript">
	$(window).bind("resize", function(){
		listwidth(function(){
			imgCarousel();
		});
	});
	$(document).ready(function () {
		listwidth(function(){
			imgCarousel();
		});
	});
</script>