
<div class="row">
	<div id="darkheader" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h4 class="bold"><?=$title?></h4>
		<?php if(isset($menu)):?>
			<button type="button" class="btn btn-default btn-sm visible-lg visible-md" role="button" data-toggle="collapse" data-target="#profilemenu" aria-expanded="true" aria-controls="profilemenu">
				<span class="glyphicon glyphicon-th" aria-hidden="true"></span> Men&uacute;
			</button>
			<div id="profilemenu" class="popover bottom collapse">
				<div class="arrow"></div>
				<div class="popover-content">
					<?php foreach($menu as $href => $html):?>
					<a href="<?=base_url("perfil/".$href)?>" class="btn"><?=$html?></a>
					<?php endforeach?>
				</div>
			</div>
		<?php endif;?>
	</div>
</div>