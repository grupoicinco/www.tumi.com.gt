<!-- espaciado para inicio de contenido -->
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_separator"></div>
</div>

<!-- breadcrumb -->
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?=set_breadcrumb();?>
	</div>
</div>

<div class="row" id="product_panel">
	<div class="col-lg-12">			
			<!-- Product Info -->
				<div id="general_info">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product_mainimg">
							<?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_main',array(),FALSE); ?>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs product_gral_data">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h3>CFX</h3>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h4>Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</h4>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<span class="product_code">C&oacute;digo: 35060CB</span>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-8">
									<p class="star_reviews">
										<a href="#" class="glyphicon glyphicon-star"></a>
										<a href="#" class="glyphicon glyphicon-star"></a>
										<a href="#" class="glyphicon glyphicon-star"></a>
										<a href="#" class="glyphicon glyphicon-star"></a>
										<a href="#" class="glyphicon glyphicon-star"></a>
										<span> Agregue una rese&ntilde;a</span>
									</p>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<span class="price">$2,495.00</span>&nbsp;<span class="stock"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;En existencia.</span>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<a href="#product-details" class="more_product_info smooth-anchor">M&aacute;s informaci&oacute;n del producto</a>
								</div>
							</div>
						</div>
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
						<p class="product_maginifier"><a class="glyphicon glyphicon-zoom-in zoomPanel"></a></p>
					</div>
				</div>
			
			<!-- Image zoom-in -->
				<div id="product-zoom">
						<div id="gal_thumbs" class="col-lg-2 col-md-2 col-sm-2">
							<ul class="thumbnails">
								<li><a class="active" data-standard="http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" href="http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=65&hei=86&layer=2&opac=0&layer=3&opac=0',array(),false)?></a></li>
								<li><a data-standard="http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" href="http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=65&hei=86&layer=2&opac=0&layer=3&opac=0',array(),false)?></a></li>
								<li><a data-standard="http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" href="http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=65&hei=86&layer=2&opac=0&layer=3&opac=0',array(),false)?></a></li>
							</ul>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 easyzoom easyzoom--overlay easyzoom--with-thumbnails" style="text-align: center;">
							<a href="http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0">
								<?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_main?hei=540&layer=2&opac=0&layer=3&opac=0',array('alt' => ''),FALSE)?>								
							</a>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1">
							<a class="btn btn-default closePanel">X</a>
						</div>
				</div>
	</div>
</div>

<div class="row grayrow">
	<form class="" method="post" action="<?php echo base_url('carro/compras')?>">
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<p class="monogram">
				<?php echo display_img(base_url('library/cms/uploads/images/abc-icon.jpg'),array(),false); ?>
				<a href="<?php echo base_url('')?>">A&ntilde;adir monograma gratuito <span class="glyphicon glyphicon-menu-right"></span></a>
			</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-phone hidden-xs addtocart">
			<input type="submit" class="btn btn-block btn-default red" value="A&Ntilde;ADIR A LA CESTA" />
		</div>
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
			<div class="selected-color"><span>Color:</span> <span itemprop="color" class="selected-clr-val">Negro</span></div>
			<div class="color-options">
				<ul class="no-list choose-colors">
					<li>
						<a rel="Peltre" name="/p/equipaje-de-mano-continental-raleigh-expandible-0255061PW2" href="#">
							<img alt="" title="Peltre" src="http://tumi.scene7.com/is/image/Tumi/255061PW2_sw">
						</a>
					</li>
					<li class="selected">
						<a rel="Negro" name="/p/equipaje-de-mano-continental-raleigh-expandible-0255061D2" href="#">
							<img alt="" title="Negro" src="http://tumi.scene7.com/is/image/Tumi/255061D2_sw">
						</a>
					</li>
				</ul>
			</div>					
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="form-group">
					<label>Cant.:</label>
					<input type="text" class="form-control" value="1" />
				</div>
		</div>
		<div class="hidden-lg hidden-md hidden-sm col-xs-12 addtocart">
			<input type="submit" class="btn btn-block btn-default red" value="A&Ntilde;ADIR A LA CESTA" />
		</div>
	</form>
</div>

<!-- im&aacute;genes -->
<div class="row hidden-xs product_images">
	<div class="col-lg-4 col-sm-4 col-md-4">
		<a class="zoomPanel" data-standard="http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" href="http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><span>AMPLIAR VISTA</span><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=357&hei=473&layer=2&opac=0&layer=3&opac=0',array(),FALSE); ?></a>
	</div>
	<div class="col-lg-4 col-sm-4 col-md-4">
		<a class="zoomPanel" data-standard="http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" href="http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><span>AMPLIAR VISTA</span><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=357&hei=473&layer=2&opac=0&layer=3&opac=0',array(),FALSE); ?></a>
	</div>
	<div class="col-lg-4 col-sm-4 col-md-4">
		<a class="zoomPanel" data-standard="http://tumi.scene7.com/is/image/Tumi/35060CB_alt3?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" href="http://tumi.scene7.com/is/image/Tumi/35060CB_alt3?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><span>AMPLIAR VISTA</span><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt3?wid=357&hei=473&layer=2&opac=0&layer=3&opac=0',array(),FALSE); ?></a>
	</div>
	<div class="col-lg-4 col-sm-4 col-md-4">
		<a class="zoomPanel" data-standard="http://tumi.scene7.com/is/image/Tumi/35060CB_alt4?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" href="http://tumi.scene7.com/is/image/Tumi/35060CB_alt4?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><span>AMPLIAR VISTA</span><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt4?wid=357&hei=473&layer=2&opac=0&layer=3&opac=0',array(),FALSE); ?></a>
	</div>
	<div class="col-lg-4 col-sm-4 col-md-4">
		<a class="zoomPanel" data-standard="http://tumi.scene7.com/is/image/Tumi/35060CB_alt5?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" href="http://tumi.scene7.com/is/image/Tumi/35060CB_alt5?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><span>AMPLIAR VISTA</span><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt5?wid=357&hei=473&layer=2&opac=0&layer=3&opac=0',array(),FALSE); ?></a>
	</div>
</div>

<!-- Detalles del producto -->
<div class="container-fluid">
	<div class="row" id="product-details">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h4>DETALLES</h4>
			<hr id="title-underline" />
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<p>La colecci&oacute;n CFX, en la cima del lujo y la innovaci&oacute;n, es la primer l&iacute;nea de equipaje, bolsos y accesorios de TUMI en suave fibra de carbono. CFX est&aacute; confeccionada en Carbitex CX6, un material denso, de un tejido muy elaborado, que satisface nuestra exigencia de funcionamiento minuciosa, brindando la m&aacute;s alta calidad est&eacute;tica. Un material que es a la vez de primer nivel y de alto rendimiento, nuestra fibra de carbono CX6&trade;, utiliza un proceso superior de infusi&oacute;n h&uacute;meda, adaptado para otorgarle a las creaciones gran solidez y ligereza con m&iacute;nimo estiramiento. Este equipaje de mano con ruedas tiene el tamaño para viajes internacionales y gran adaptabilidad, con un compartimento principal con capacidad de expansi&oacute;n de 5 cm (2.5 in). En su interior cuenta con un compartimento para trajes y soporte de percha, bolsillos para accesorios y correas para sujetar prendas. En el exterior dispone de un bolsillo delantero con cremallera, asa telesc&oacute;pica, asas en la parte superior y lateral y un sistema de cuatro ruedas. Terminaciones en piel. Tenga en cuenta: la percha en la imagen no est&aacute; incluida pero puede adquirirse por separado (#0052). </p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<dl>
						<dt>DIMENSIONES</dt>
						<dd>
							<span class="inline-text"><abbr title="altura">al</abbr>.: 22 <small><abbr title="pulgadas">plg</abbr></small></span>
							<span class="inline-text"><abbr title="ancho">an</abbr>.: 14 <small><abbr title="pulgadas">plg</abbr></small></span>
							<span class="inline-text"><abbr title="profundidad">pr</abbr>.: 9 <small><abbr title="pulgadas">plg</abbr></small></span>
						</dd>
						<dt>PROFUNDIDAD AUMENTADA</dt>
						<dd>11.6 <small><abbr title="pulgadas">Plg</abbr></small></dd>
						<dt><span class="product-weight">PESO</span>CAPACIDAD</dt>
						<dd><span class="product-weight">12.4 <small><abbr title="libras">Lbs</abbr></small></span>3 <small><abbr title="litros">L</abbr></small></dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<hr />
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product-policies">
			<a href="<?php echo base_url('atencion/garantia')?>" target="_blank"><span class="glyphicon glyphicon-certificate"></span> Garant&iacute;a del producto</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product-policies">
			<a href="<?php echo base_url('atencion/cambios')?>" target="_blank"><span class="glyphicon glyphicon-transfer"></span> Pol&iacute;tica de cambio</a>
		</div>
	</div>
</div>

<!-- Diferencia TUMI -->
<div class="row grayrow">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tumi-diference">
		<h2><a href="#tumi-diference" aria-controls="tumi-diference" role="tab" data-toggle="tab" class="">Diferencia TUMI</a></h2>
		<span>/</span>
		<h2><a href="#tumi-characteristics" aria-controls="tumi-characteristics" role="tab" data-toggle="tab">Caracter&iacute;sticas</a></h2>
	</div>
</div>

<div class="tab-content">
	<div role="tabpanel" class="row tab-pane fade in active" id="tumi-diference">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tumi-diference-item">
			<div class="icon-img">
				<span class="item-icon-img icon-tumiAddABag-lg"></span>
			</div>
			<h3>Sistema Add-A-Bag</h3>
			<div class="short-desc">
				Agregue otra pieza de viaje o maletín de negocios de forma sencilla y rápida usando nuestro gancho patentado Add-A-Bag con lengüeta de cierre de gran ajuste que puede sostener un exceso de 200 libras (90,7 kg). Además, muchos maletines de negocios y bolsos Tumi cuentan con una funda trasera que se desliza sobre las manijas del equipaje adicional y permite apilar y transportar maletas más pesadas en su equipaje con ruedas. Al usarlos juntos, estos sistemas le permiten al viajero transportar 2 e incluso 3 piezas de equipaje al mismo tiempo y sin esfuerzo, en una sola mano.
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tumi-diference-item">
			<div class="icon-img">
				<span class="item-icon-img icon-tumiAirGradeAlHandle-lg"></span>
			</div>
			<h3>Manija de extensión de aluminio de calidad aeronáutica</h3>
			<div class="short-desc">
	 								Los tubos de nuestras manijas telescópicas están fabricados con aluminio de calidad aeronáutica, lo cual hace que sean livianos y a la vez extremadamente resistentes.
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tumi-diference-item">
			<div class="icon-img">
				<span class="item-icon-img icon-tumiEasyGlide-lg"></span>
			</div>
			<h3>Ruedas de fácil deslizamiento</h3>
			<div class="short-desc">
				Nuestras ruedas de vanguardia en línea tienen rodamientos de bolas de acero sellados y están montadas sobre ejes de acero sólido en bujes diseñados a medida y con sistema de amortiguación. Pueden circular suavemente y sin hacer ruido por cientos de millas.
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tumi-diference-item">
			<div class="icon-img">
				<span class="item-icon-img icon-tumiTracer-lg"></span>
			</div>
			<h3>Tumi Tracer&reg;</h3>
			<div class="short-desc">
	 								Tumi Tracer® es un programa adicional exclusivo que ayuda a los clientes de Tumi a recuperar sus objetos perdidos o robados. La esencia del programa es un número de artículo individual y único de 20 dígitos impreso en una placa especial de metal que se fija de manera permanente a los productos de Tumi. Ese número, junto con la información de contacto del propietario, se ingresa en la base de datos de nuestro Tracer (rastreador) cada vez que se registra una maleta con nosotros, y se utiliza para contribuir con la recuperación de artículos robados o extraviados que se nos informen.
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tumi-diference-item">
			<div class="icon-img">
				<span class="item-icon-img icon-tumiEasyGlide-lg"></span>
			</div>
			<h3>Ruedas de fácil deslizamiento</h3>
			<div class="short-desc">
				Nuestras ruedas de vanguardia en línea tienen rodamientos de bolas de acero sellados y están montadas sobre ejes de acero sólido en bujes diseñados a medida y con sistema de amortiguación. Pueden circular suavemente y sin hacer ruido por cientos de millas.
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tumi-diference-item">
			<div class="icon-img">
				<span class="item-icon-img icon-tumiEasyGlide-lg"></span>
			</div>
			<h3>Ruedas de fácil deslizamiento</h3>
			<div class="short-desc">
				Nuestras ruedas de vanguardia en línea tienen rodamientos de bolas de acero sellados y están montadas sobre ejes de acero sólido en bujes diseñados a medida y con sistema de amortiguación. Pueden circular suavemente y sin hacer ruido por cientos de millas.
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tumi-diference-item">
			<div class="icon-img">
				<span class="item-icon-img icon-tumiEasyGlide-lg"></span>
			</div>
			<h3>Ruedas de fácil deslizamiento</h3>
			<div class="short-desc">
				Nuestras ruedas de vanguardia en línea tienen rodamientos de bolas de acero sellados y están montadas sobre ejes de acero sólido en bujes diseñados a medida y con sistema de amortiguación. Pueden circular suavemente y sin hacer ruido por cientos de millas.
			</div>
		</div>
	</div>
	<div role="tabpanel" class="row fade tab-pane" id="tumi-characteristics">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<h3>Caracter&iacute;sticas Interiores</h3>
			<ul class="feature-lists">
				<li>Compartimento superior/Sección para traje</li>
				<li> Soporte para percha</li>
				<li> Bolsillo con cremallera</li>
				<li> Bolsillo para teléfono</li>
				<li> Correas para sujetar prendas</li>
				<li> Llavero con cinta en piel</li>
			</ul>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<h3>Caracter&iacute;sticas Exteriores</h3>
			<ul class="feature-lists">
				<li>Bolsillo frontal con cremallera</li>
				<li> Asas en piel en la parte superior y lateral</li>
				<li> Asa telescópica con revestimiento en piel</li>
				<li> Sistema de dos ruedas</li>
				<li> Pies en la parte inferior</li>
				<li> Asa en la parte inferior</li>
				<li> Etiqueta de equipaje</li>
			</ul>
		</div>
	</div>
</div>

<!-- Recomendados -->
<div class="row" id="recomedaciones-carousel">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 recommendations-title">
		<h4>TAMBI&Eacute;N RECOMENDAMOS</h4>
	</div>
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
<script src="<?php echo base_url('library/js/panel.jQuery.js')?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('library/js/responsive.carousel.js')?>"></script>
<script type="text/javascript">
	//Zooming the image
	var $easyzoom = $('.easyzoom').easyZoom();
	var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');
	
	$('.thumbnails a, .product_images a').on('click touchstart', function(e) {
		var $this = $(this);
		e.preventDefault();
		
		api1.swap($this.data('standard'), $this.attr('href'));
	});
	
	$(document).ready(function(){
		//Change the active status on the image zoom list
		$('.thumbnails > li > a').on('click touchstart',function(e){
	  		var $this = $(this);
	  		$this.addClass('active').parent().siblings().find('a').removeClass('active');  
		});
		
		//Opening the image zoom panel
		$('a.zoomPanel').panel();
		
		//Recommendations carousel
		listwidth(function(){
			imgCarousel();
		});
	});
	$(window).bind("resize", function(){
		listwidth(function(){
			imgCarousel();
		});
	});
</script>