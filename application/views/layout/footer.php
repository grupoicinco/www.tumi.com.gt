</div><!-- content-container -->
<div class="container-fluid" id="footerinfo">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h3>Servicio al Cliente</h3>
			<p><a href="#">Reclamos</a></p>
			<p><a href="#">Mi cuenta</a></p>
			<p><a href="#">Acerca de TUMI</a></p>
			<p><a href="#">Gift Cards</a></p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h3>Tienda Preferida</h3>
			<address>
				<p><strong>TUMI Arkadia</strong></p>
				<p>Boulevard Los Pr&oacute;ceres 18 calle<br />
				26-21 zona 10. Comercial Arkadia local 353<br />
				<abbr title="Teléfono">T:</abbr> (502) 2211-0063</p>
			</address>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h3>Cont&aacute;ctenos</h3>
			<a href="#">Env&iacute;anos un correo</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h3>Selecciona tu regi&oacute;n</h3>
			<form action="" method="post" class="form-inline" role="form">
				<select name="region">
					<option value="http://www.tumi.com">Estados Unidos</option>
					<option value="http://www.tumi.com">Australia</option>
					<option value="http://www.tumi.com">Jap&oacute;n</option>
					<option value="http://www.tumi.com">Alemania</option>
				</select>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h3>Reg&iacute;strate a nuestro bolet&iacute;n</h3>
			<form method="post" class="form-inline">
				<div class="form-group">
					<div class="input-group">
						<input type="text" placeholder="Ingresa tu correo" class="form-control" />
						<div class="input-group-btn">
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-menu-right"></span></button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h3>Registra tu TUMI</h3>
			<form method="post" class="form-inline">
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
	</div>
</div>
<div class="container-fluid" id="footersocial">
	<div class="row">
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
			<ul class="list-inline">
				<li><a href="http://www.facebook.com/TumiTravel" target="_blank" class="socicon">b</a></li>
				<li><a href="http://www.twitter.com/Tumitravel" target="_blank" class="socicon">a</a></li>
				<li><a href="http://www.pinterest.com/Tumitravel" target="_blank" class="socicon">d</a></li>
				<li><a href="http://www.youtube.com/Tumitravel" target="_blank" class="socicon">r</a></li>
				<li><a href="http://www.instagram.com/Tumitravel" target="_blank" class="socicon">x</a></li>
			</ul>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="text-align: right; font-family: 'adobe-caslon';" >
			<p><small>&copy; <?=date('Y')?> Tumi, Inc. <a href="http://intl.tumi.com/s/privacyPolicy" target="_blank">Pol&iacute;tica de privacidad</a></small></p>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		//Submenu display
		$('ul#main-menu li a').hover(
			function(){
				$(this).next('ul').css('display','block').parent().siblings().find('ul').css('display','none');
				$(this).next('ul').css('display','block').parent().parent().siblings().find('li ul').css('display','none');
		});
		$('#content-container, nav.navbar, #footerinfo, #footersocial').hover(
			function(){
				$('ul#main-menu li ul').css('display', 'none');
				$('ul#main-menu li[role="presentation"]:not(".SALE")').children('a').css('color','#222');
		});
		//Set active when selected
		$("ul#main-menu li[role='presentation']").hover(
			function(){
			$(this).children("a").css({'color': '#C41E3A'}).parent().siblings('li:not(".SALE")').children('a').css({'color':'#222'});
			$(this).children("a").css({'color': '#C41E3A'}).parent().parent().siblings().find('li[role="presentation"]:not(".SALE")').children('a').css({'color':'#222'});
		});
	});
</script>
</body></html>