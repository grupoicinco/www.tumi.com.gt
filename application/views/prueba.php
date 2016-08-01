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

<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div id="general_info" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
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
									<a href="#" class="more_product_info">M&aacute;s informaci&oacute;n del producto</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
						<p class="product_maginifier"><a class="glyphicon glyphicon-zoom-in collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#product-zoom" aria-expanded="false" aria-controls="product-zoom"></a></p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div id="product-zoom" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">
						<div id="gal_thumbs" class="col-lg-2 col-md-2">
							<ul>
								<li><a class="active" href="#" data-image="http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" data-zoom-image="http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=65&hei=86&layer=2&opac=0&layer=3&opac=0',array(),false)?></a></li>
								<li><a href="#" data-image="http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" data-zoom-image="http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt1?wid=65&hei=86&layer=2&opac=0&layer=3&opac=0',array(),false)?></a></li>
								<li><a href="#" data-image="http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=795&hei=553&layer=2&opac=0&layer=3&opac=0" data-zoom-image="http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0"><?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_alt2?wid=65&hei=86&layer=2&opac=0&layer=3&opac=0',array(),false)?></a></li>
							</ul>
						</div>
						<div class="col-lg-9 col-md-9">
							<?php echo display_img('http://tumi.scene7.com/is/image/Tumi/35060CB_main',array('class' => 'preview_zoom', 'data-zoom-image' => 'http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=2000&hei=2000&layer=2&opac=0&layer=3&opac=0'),FALSE)?>
						</div>
						<div class="col-lg-1 col-md-1">
							<a class="btn btn-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#general_info" aria-expanded="true" aria-controls="general_info">X</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('a.glyphicon-zoom-in').bind('click touchstart', function(){
			$(".preview_zoom").elevateZoom({ 
				zoomType : "inner"
			}); 
			
	
			$(".preview_zoom").bind("click touchstart", function(e) {  
				var ez =   $('.preview_zoom').data('elevateZoom');
				ez.closeAll(); //NEW: This function force hides the lens, tint and window	
				$.fancybox(ez.getGalleryList());
				return false;
			});
		});
	});
</script>