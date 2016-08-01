<?php echo $header?>
<h3>PERSONALIZA TU TUMI</h3>
<hr />
<div class="row">
	<div class="col-lg-6 col-md-6" id="monogramdata">
		<form method="post">
		<h6>AGREGUE EL TEXTO</h6>
		<p>En el campo agregue el texto que desea personalizar en su TUMI. &Uacute;nicamente se puede agregar un m&aacute;ximo de 5 caracteres y letras y n&uacute;meros solamente.</p>
		<input type="text" placeholder="ABC" class="form-control" />
		<h6>AGREGUE COLOR</h6>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="javascript:void(0)" class="Nada" title="Sin Color" data-color="#222222"></a>
				<a href="javascript:void(0)" class="verde" data-color="#309645">#</a>
				<a href="javascript:void(0)" class="morado" data-color="#78264F">#</a>
				<a href="javascript:void(0)" class="cafe" data-color="#855405">#</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="javascript:void(0)" class="dorado" data-color="#DAA520">#</a>
				<a href="javascript:void(0)" class="plata" data-color="#CCCCCC">#</a>
				<a href="javascript:void(0)" class="rojo" data-color="#C41E3A">#</a>
				<a href="javascript:void(0)" class="azul" data-color="#4D61E8">#</a>
			</div>
		</div>
		<input type="hidden" id="monogramcolor" value="#222222" />
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">&nbsp;</div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default">Guardar Monograma <span class="glyphicon glyphicon-menu-right"></span></button>
		</div>
		</form>
	</div>
	<div class="col-lg-6 col-md-6" id="monogrampatchtemplate">
		<span>ABC</span>
		.
		<img src="<?=base_url('user_files/uploads/images/single_patch_T.jpg')?>" />
	</div>
</div>
<?php echo $atencion?>

<script type="text/javascript">
	$(document).ready(function(){
		//Cambiar color del monograma
		$('#monogramdata a').click(function(){
		  var color = $(this).attr('data-color');
		  
		  $('#monogrampatchtemplate span').css('color',color);
		  $('#monogramdata form input[type="hidden"]').val(color);
		});
		
		//Cambiar texto del monograma
		$('#monogramdata input[type="text"]').keyup(function(){
			var monograma = $(this).val();
			var limit   = 5; // Límite del textarea
			var current = monograma.length;              // Número de caracteres actual
			if (limit < current) {                   // Más del límite de caracteres?
				// Establece el valor del textarea al límite
				$(this).val(monograma.substring(0, limit));
			}else{
				$('#monogrampatchtemplate span').html(monograma);
			}
			var c = this.selectionStart,
			r = /[^a-z0-9]/gi,
			v = $(this).val();
			if(r.test(v)) { //Evita caracteres especiales
				$(this).val(v.replace(r, ''));
				c--;
			}
			this.setSelectionRange(c, c);
		});
	});
</script>