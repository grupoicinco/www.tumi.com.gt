<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->fw_resource->request('RESOURCE_WEBSITE_TITLE')?> | <?php echo $this->router->fetch_class();?></title>
	<?php foreach($external_files as $external_file) echo $external_file?>
</head>

<!-- BODY BEGGINS -->	
<body>			
			<!-- top navbar for computers -->
			<nav class="navbar navbar-fixed-top navbar-inverse hidden-sm hidden-xs">
						<div class="navbar-header">
							<p class="navbar-text">
								<a class="navbar-link" href="#">NUEVA ALPHA BRAVO</a>
							</p>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li><a class="navbar-link" href="<?php echo base_url('perfil')?>">Hola Guido</a></li>
							<li><a class="navbar-link" href="<?php echo base_url('ingresa')?>">(¿No eres tu?)</a></li>
							<li><a class="navbar-link" href="#">Servicio al cliente</a></li>
							<li><a class="navbar-btn-buscar" data-toggle="collapse" href="#search-form" aria-expanded="false" aria-controls="collapseSearchForm"><span class="glyphicon glyphicon-search"></span> Buscar</a></li>
							<li><a href="<?php echo base_url('carro/compras')?>" class="navbar-btn-shop"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;3</a></li>
						</ul>
				</nav>
				
				<div class="search-form-container hidden-sm hidden-xs">
					<form class="navbar-form navbar-left navbar-search-form collapse" role="search" id="search-form">
						<input type="text" class="form-control" placeholder="Ingresa tu b&uacute;squeda aqu&iacute;" />
					</form>
				</div>
				
				<!-- Top navbar for mobile-->
				<nav class="navbar navbar-fixed-top navbar-default hidden-md hidden-lg">
					<ul id="profilenavbar" class="nav navbar-nav">
						<li><a class="navbar-toggle collapse navbar-btn" href="<?php echo base_url('ingresa')?>">(¿No eres tu?)</a></li>
						<li><a class="navbar-toggle collapse navbar-btn" aria-expanded="false" href="<?php echo base_url('perfil')?>">Hola Guido</a></li>
					</ul>
						<ul class="nav navbar-nav">
							<!-- display tablets menu -->
							<li class="pull-left">
								<a class="navbar-brand" href="<?php echo base_url()?>">
									<img src="<?php echo base_url('library/images/TUMI-transparencia.png')?>" alt="TUMI" />
								</a>
							</li>
							<li class=""><a class="navbar-toggle collapse navbar-btn navbar-btn-shop" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;3</a></li>
							<li class=""><a class="navbar-toggle collapse navbar-btn navbar-btn-buscar" aria-expanded="false" data-toggle="collapse" aria-controls="collapseMobileSearchForm" href="#mobile-search-form"><span class="glyphicon glyphicon-search"></span></a></li>
							<li>
								<a class="navbar-toggle navbar-btn navbar-menu-display" data-toggle="collapse" href="#mobile-main-menu" aria-controls="collapseMobileMainMenu"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
							</li>
						</ul>
						<form class="form-inline form-search collapse" id="mobile-search-form" role="form">
							<input type="text" placeholder="Ingresa tu b&uacute;squeda aqu&iacute;" />
						</form>						
						<ul class="nav nav-pills nav-stacked collapse" id="mobile-main-menu">
							<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('catalogo')?>" role="button" aria-haspopup="true" aria-expanded="false">Viajes</a>
								<ul class="dropdown-menu dropdown-submenu">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de Mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de registro</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffels</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">M&aacute;s vendidos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('catalogo')?>" role="button" aria-haspopup="true" aria-expanded="false">Bolsones</a>
								<ul class="dropdown-menu dropdown-submenu">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de Mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de registro</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffels</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">M&aacute;s vendidos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('catalogo')?>" role="button" aria-haspopup="true" aria-expanded="false">Accesorios</a>
								<ul class="dropdown-menu dropdown-submenu">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de Mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de registro</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffels</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">M&aacute;s vendidos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('catalogo')?>" role="button" aria-haspopup="true" aria-expanded="false">Mujeres</a>
								<ul class="dropdown-menu dropdown-submenu">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de Mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de registro</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffels</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">M&aacute;s vendidos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('catalogo')?>" role="button" aria-haspopup="true" aria-expanded="false">Personalizaci&oacute;n</a>
								<ul class="dropdown-menu dropdown-submenu">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de Mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de registro</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffels</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">M&aacute;s vendidos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('catalogo')?>" role="button" aria-haspopup="true" aria-expanded="false">SALE</a>
								<ul class="dropdown-menu dropdown-submenu">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de Mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de registro</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffels</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">M&aacute;s vendidos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url('catalogo')?>" role="button" aria-haspopup="true" aria-expanded="false">Mundo TUMI</a>
								<ul class="dropdown-menu dropdown-submenu">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de Mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Maletas de registro</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffels</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">M&aacute;s vendidos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
						</ul>
				</nav>
				
				
		<?php echo $this->fw_alerts->display_alert_message();?>
		<aside class="visible-md visible-lg">
			<div class="container-fluid">
				<!-- Logo -->
				<div class="row">
					
					<div id="logo" class="col-lg-12">
						<a href="<?php echo base_url()?>">
							<span class="helper"></span>
							<img src="<?php echo base_url('library/images/TUMI-transparencia.png')?>" alt="TUMI" />
						</a>
						<hr />
					</div>
				</div>
				
				<!-- First menu -->
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills nav-stacked" id="main-menu">
							<li role="presentation"><a href="<?php echo base_url('catalogo')?>">Viajes</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Equipaje de mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Equipaje para registrar</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffel de viaje</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Lo m&aacute;s vendido</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
									<li>
										<a href="<?php echo base_url('catalogo')?>" class="novedad">
											<h3>Nuevos Ingresos</h3>
											<img src="<?php echo base_url('user_files/uploads/images/22060NA2_main_T.jpg')?>" />
											<span>¿Que hay nuevo?</span>
										</a>
									</li>
								</ul>
							</li>
							<li role="presentation"><a href="<?php echo base_url('catalogo')?>">Bolsones</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portafolios</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portafolios con rodos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Mochilas</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Bandoleras</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Bolsos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Lo m&aacute;s vendido</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a href="<?php echo base_url('catalogo')?>">Accesorios</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Equipaje de mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Equipaje para registrar</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffel de viaje</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Lo m&aacute;s vendido</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a href="<?php echo base_url('catalogo')?>">Damas</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portafolios</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portafolios con rodos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Mochilas</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Bandoleras</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Bolsos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Lo m&aacute;s vendido</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation"><a href="<?php echo base_url('catalogo')?>">Personalizaci&oacute;n</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Equipaje de mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Equipaje para registrar</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffel de viaje</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Lo m&aacute;s vendido</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							<li role="presentation" class="SALE"><a href="<?php echo base_url('catalogo')?>">SALE</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portafolios</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portafolios con rodos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Mochilas</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Bandoleras</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Bolsos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Lo m&aacute;s vendido</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
						</ul>
						<hr />
						<ul class="nav nav-pills nav-stacked" id="main-menu">
							<li role="presentation"><a href="<?php echo base_url('catalogo')?>">Mundo TUMI</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Equipaje de mano</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Equipaje para registrar</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Duffel de viaje</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portatrajes</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Lo m&aacute;s vendido</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
						</ul>
						<hr />
						<ul class="nav nav-pills nav-stacked" id="main-menu">
							<li role="presentation"><a href="<?php echo base_url('catalogo')?>">Mi Tienda <span class="glyphicon glyphicon-map-marker active"></span></a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
									<li><a href="<?php echo base_url('catalogo')?>">Novedades</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portafolios</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Portafolios con rodos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Mochilas</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Bandoleras</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Bolsos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Repuestos</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Lo m&aacute;s vendido</a></li>
									<li><a href="<?php echo base_url('catalogo')?>">Ver todos</a></li>
								</ul>
							</li>
							</ul>
					</div>
				</div>
			</div>
		</aside>
		<div id="content-container" class="container-fluid">