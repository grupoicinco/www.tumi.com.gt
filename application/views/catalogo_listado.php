<!-- Reproductor de video automático --
	<div class="row" id="videocatalog">
	<div class="col-lg-12">
		<video autoplay loop poster="<?php echo base_url('user_files/uploads/images/Alpha2front.jpg')?>" id="bgvid">
			<source src="<?php echo base_url('user_files/uploads/Alpha2wosousnd.mp4')?>" type="video/mp4">
		</video>
	</div>
</div> -->
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="breadcrum_menu">
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_category_title">
		<h3>Viajes <small>Equipaje de mano</small></h3>
	</div>
</div>
<!-- filtro y paginación del catálogo -->
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
</div>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 hidden-xs compare_preview">
		<div class="comparison-txt">
			<span class="label-txt">Usted compara:</span>
			<span class="label-number"><span class="compare-items-number">2</span>&nbsp;Artículos</span>
		</div>
		<div class="compare-thumbs">
			<img class="comparison-blank" alt="product comparison box" src="http://tumi.scene7.com/is/image/Tumi/35060CB_main?wid=45&amp;hei=60" data-value="35060CB">
			<img class="comparison-blank" alt="product comparison box" src="http://tumi.scene7.com/is/image/Tumi/28660CH_main?wid=45&amp;hei=60" data-value="28660CH">
			<img class="comparison-blank" alt="product comparison box" src="<?php echo base_url('library/cms/uploads/images/prod-comparison-blank.gif')?>" data-value="">
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
		<select name="catalog_filter" class="form-control">
			<option value="javascript:void(0);" selected="selected">Relevancia</option>
			<option value="javascript:void(0);">Novedades</option>
			<option value="javascript:void(0);">Preferidos</option>
			<option value="javascript:void(0);">Exclusivo de TUMI</option>
			<option value="javascript:void(0);">De A a Z</option>
			<option value="javascript:void(0);">De Z a A</option>
			<option value="javascript:void(0);">Menor a mayor precio</option>
			<option value="javascript:void(0);">Mayor a menor precio</option>
		</select>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
		<select name="catalog_filter" class="form-control">
			<option value="javascript:void(0);" selected="selected">12 Art&iacute;culos</option>
			<option value="javascript:void(0);">60 Art&iacute;culos</option>
			<option value="javascript:void(0);">Todos los Art&iacute;culos</option>
		</select>
	</div>
</div>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 hidden-xs"></div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="btn-toolbar pagination" role="toolbar" >
			<div class="btn-group" role="group" ><a href="#"><span class="glyphicon glyphicon-menu-left"></span></a></div>
			<div class="btn-group active" role="group" ><a href="#">1</a></div>
			<div class="btn-group" role="group" ><a href="#">2</a></div>
			<div class="btn-group" role="group" ><a href="#">3</a></div>
			<div class="btn-group" role="group" ><a href="#">4</a></div>
			<div class="btn-group" role="group" ><a href="#"><span class="glyphicon glyphicon-menu-right"></span></a></div>
		</div>
	</div>
</div>

<!-- Catálogo de productos -->
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 catalog_product">
		<div class="row compare_container">
			<div class="col-lg-8 col-md-7 col-sm-6 hidden-xs"><span class="custom-label">M&aacute;s Vendido</span></div>
			<div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
				<label for="compare">Comparar <button class="compare_checkbox"><span class="glyphicon glyphicon-ok">&nbsp;</span></button></label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 catalog_image_container">
				<a href="<?php echo base_url('catalogo/producto')?>" class="image_link">
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_main" class="main" />
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_alt1" class="alt1" />
				</a>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_title">
				<h5>CFX</h5>
				<a href="#">Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</a>
				<span class="price">$2,495.00</span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 catalog_product">
		<div class="row compare_container">
			<div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">&nbsp;</div>
			<div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
				<label for="compare">Comparar <button class="compare_checkbox"><span class="glyphicon glyphicon-ok">&nbsp;</span></button></label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 catalog_image_container">
				<a href="<?php echo base_url('catalogo/producto')?>" class="image_link">
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_main" class="main" />
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_alt1" class="alt1" />
				</a>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_title">
				<h5>CFX</h5>
				<a href="#">Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</a>
				<span class="price">$2,495.00</span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 catalog_product">
		<div class="row compare_container">
			<div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">&nbsp;</div>
			<div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
				<label for="compare">Comparar <button class="compare_checkbox"><span class="glyphicon glyphicon-ok">&nbsp;</span></button></label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 catalog_image_container">
				<a href="<?php echo base_url('catalogo/producto')?>" class="image_link">
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_main" class="main" />
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_alt1" class="alt1" />
				</a>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_title">
				<h5>CFX</h5>
				<a href="#">Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</a>
				<span class="price">$2,495.00</span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 catalog_product">
		<div class="row compare_container">
			<div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">&nbsp;</div>
			<div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
				<label for="compare">Comparar <button class="compare_checkbox"><span class="glyphicon glyphicon-ok">&nbsp;</span></button></label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 catalog_image_container">
				<a href="<?php echo base_url('catalogo/producto')?>" class="image_link">
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_main" class="main" />
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_alt1" class="alt1" />
				</a>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_title">
				<h5>CFX</h5>
				<a href="#">Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</a>
				<span class="price">$2,495.00</span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 catalog_product">
		<div class="row compare_container">
			<div class="col-lg-8 col-md-7 col-sm-6 hidden-xs"><span class="custom-label">M&aacute;s Vendido</span></div>
			<div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
				<label for="compare">Comparar <button class="compare_checkbox"><span class="glyphicon glyphicon-ok">&nbsp;</span></button></label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 catalog_image_container">
				<a href="<?php echo base_url('catalogo/producto')?>" class="image_link">
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_main" class="main" />
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_alt1" class="alt1" />
				</a>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_title">
				<h5>CFX</h5>
				<a href="#">Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</a>
				<span class="price">$2,495.00</span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 catalog_product">
		<div class="row compare_container">
			<div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">&nbsp;</div>
			<div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
				<label for="compare">Comparar <button class="compare_checkbox"><span class="glyphicon glyphicon-ok">&nbsp;</span></button></label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 catalog_image_container">
				<a href="<?php echo base_url('catalogo/producto')?>" class="image_link">
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_main" class="main" />
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_alt1" class="alt1" />
				</a>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_title">
				<h5>CFX</h5>
				<a href="#">Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</a>
				<span class="price">$2,495.00</span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 catalog_product">
		<div class="row compare_container">
			<div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">&nbsp;</div>
			<div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
				<label for="compare">Comparar <button class="compare_checkbox"><span class="glyphicon glyphicon-ok">&nbsp;</span></button></label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 catalog_image_container">
				<a href="<?php echo base_url('catalogo/producto')?>" class="image_link">
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_main" class="main" />
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_alt1" class="alt1" />
				</a>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_title">
				<h5>CFX</h5>
				<a href="#">Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</a>
				<span class="price">$2,495.00</span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 catalog_product">
		<div class="row compare_container">
			<div class="col-lg-8 col-md-7 col-sm-6 hidden-xs">&nbsp;</div>
			<div class="col-lg-4 col-md-5 col-sm-6 hidden-xs">
				<label for="compare">Comparar <button class="compare_checkbox"><span class="glyphicon glyphicon-ok">&nbsp;</span></button></label>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 catalog_image_container">
				<a href="<?php echo base_url('catalogo/producto')?>" class="image_link">
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_main" class="main" />
					<img src="https://tumi.scene7.com/is/image/Tumi/35060CB_alt1" class="alt1" />
				</a>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catalog_title">
				<h5>CFX</h5>
				<a href="#">Equipaje de mano internacional Donington en fibra de carbono con 4 ruedas</a>
				<span class="price">$2,495.00</span>
			</div>
		</div>
	</div>
</div>