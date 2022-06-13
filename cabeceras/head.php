<?
session_start();
$idUsuario =  $_SESSION['id'];
$usu_nombre =  $_SESSION['nombre'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>PROVIDENCIA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
<link rel="stylesheet" href="css/responsiveslides.css" /> 
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script src="js/responsiveslides.js"></script>
<script src="js/funcion.js"></script>

<script>
	$(function () {
	  $("#slidez").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		maxwidth: 960,
		namespace: "centered-btns"
	  });
	});
</script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		$(function() {
			$("#slidez").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				maxwidth: 960,
				namespace: "centered-btns"
			});
		});
	</script>
</head>

<body id="page1">












	<div class="body6">
		<div class="body1">
			<div class="body5">
				<div class="main zerogrid">
					<!-- header -->
					<header>
						<h1><a href="index.html" id="logo"><img src="images/logo.png" /></a></h1>
						<nav>
							<ul id="top_nav">
								<li><a href="index.html"><img src="images/icon_1.gif" alt=""></a></li>
								<li><a href="#" onclick="cerrarSesion();"><img src="images/icon_2.gif" alt=""></a></li>
								<li class="end"><a href="Contacts.html"><img src="images/icon_3.gif" alt=""></a></li>
							</ul>
						</nav>
						<nav>
							<ul id="menu">
								<li class="active"><a href="index.html">Taqueria</a></li>
								<li><a href="Cuisine.html">Menu</a></li>
								<li><a href="Wine.html">Ingredientes</a></li>
								<!-- <li><a href="CookBook.html">CookBook</a></li> -->
								<li><a href="Contacts.html">Contactenos</a></li>
							</ul>
						</nav>
					</header>
					<!-- / header -->
					<!-- content -->




					<article id="content">
						<div class="slider_bg">
							<div class="slider">
								<ul class="items">
									<li>
										<img src="images/taco2.jpg" alt="">
										<div class="banner">
											<strong><span>Platinum</span></strong>
											<b>Lo mejor de nuestra taqueria</b>
											<p>
												<span>Los tacos al pastor son la primera de las recetas mexicanas de Providencia.com<br>
												porque es la que viene más rápido a la cabeza de la mayoría de los mexicanos (al menos de los que viven en la Ciudad de México). Curiosamente, no se trata de una comida muy antigua.</p>
										</div>
									</li>
									<li>
										<img src="images/taco3.jpg" alt="">
										<div class="banner">
											<strong><span>JR</span></strong>
											<b>Especial para</b>
											<p>
												<span>Los tacos de carnitas de puerco son uno de los platos más populares en todo México<br>
													son una receta deliciosa para disfrutar un fin de semana, en días especiales o reuniones familiares.</span>
											</p>
										</div>
									</li>
									<li>
										<img src="images/taco5.jpg" alt="">
										<div class="banner">
											<strong><span>Basico</span></strong>
											<b> tacos de carnitas estilo Michoacán para vender</b>
											<p>
												<!-- <span>Paquete de  <br> -->
												es se dice que primero hay que escoger una cerdita, ya que a diferencia del macho contiene mayor cantidad de colágeno y grasa.</span>
											</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="slider-response">
								<div class="rslides_container">
									<ul class="rslides" id="slidez">
										<li><img src="images/taco2.jpg" alt=""></li>
										<li><img src="images/taco3.jpg" alt=""></li>
										<li><img src="images/taco5.jpg" alt=""></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="wrap">
							<section class="col-1-3">
								<div class="wrap-col">
									<div class="box">
										<div>
											<h2>PAQUETE <span> BASICO</span></h2>
											<figure><img src="images/taco2.jpg" alt=""></figure>
											<p class="pad_bot1">This <a href="http://blog.templatemonster.com/2011/08/01/free-website-template-jquery-slider-typography-restaurant/" class="list_1">Deliccio Template</a> goes with two packages – with PSD source files and without them. PSD source is available for free for the registered members.</p>
											<a href="#" class="button1" onclick="addOrden(1,<?= $idUsuario ?>);">ORDENAR</a>
										</div>
									</div>
								</div>
							</section>
							<section class="col-1-3">
								<div class="wrap-col">
									<div class="box">
										<div>
											<h2>PAQUETE <span>ESPECIAL</span></h2>
											<figure><img src="images/taco3.jpg" alt=""></figure>
											<p class="pad_bot1">This is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com team. This website template is optimized for 1024x768 screen res.</p>
											<a href="#" class="button1" onclick="addOrden(2,<?= $idUsuario ?>);">ORDENAR</a>
										</div>
									</div>
								</div>
							</section>
							<section class="col-1-3">
								<div class="wrap-col">
									<div class="box">
										<div>
											<h2>PAQUETE <span>PLATINUM</span></h2>
											<figure><img src="images/taco5.jpg" alt=""></figure>
											<ul class="list1 pad_bot1">
												<li><a href="#">Lorem ipsum dolor sit amet</a></li>
												<li><a href="#">Consectetur adipisicing elit sed</a></li>
												<li><a href="#">Eiusmod tempor incididunt labore</a></li>
												<li><a href="#">Ut enim ad minim veniam</a></li>
											</ul>
											<a href="#" class="button1" onclick="addOrden(3,<?= $idUsuario ?>);">ORDENAR</a>
										</div>
									</div>
								</div>
							</section>
							<section class="col-1-3">
								<div class="wrap-col">
									<div class="box">
										<div>
											<h2>PAQUETE <span>JR</span></h2>
											<figure><img src="images/taco6.jpg" alt=""></figure>
											<p class="pad_bot1">This <a href="http://blog.templatemonster.com/2011/08/01/free-website-template-jquery-slider-typography-restaurant/" class="list_1">Deliccio Template</a> goes with two packages – with PSD source files and without them. PSD source is available for free for the registered members.</p>
											<a href="#" class="button1" onclick="addOrden(4,<?= $idUsuario ?>);">ORDENAR</a>
										</div>
									</div>
								</div>
							</section>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
	<div class="body2">
		<div class="main zerogrid">
			<article id="content2">
				<div class="wrapper">
					<section class="col-2-3">
						<h2>¿Que incluyen los paquetes?</h2>
						<div class="wrapper">
							<div class="col-1-2">
								<div class="wrap-col">
									<div class="wrapper pad_bot2">
										<figure class="left marg_right1"><img src="images/taco3.jpg" alt=""></figure>
										<p>
											<a href="#">Igrendientes</a><br>
											Unde omnis iste natus error volu accusantium doloremque.
										</p>
									</div>
									<div class="wrapper">
										<figure class="left marg_right1"><img src="images/taco2.jpg" alt=""></figure>
										<p>
										<a href="#">Igrendientes</a><br>
											Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.
										</p>
									</div>
								</div>
							</div>
							<div class="col-1-2">
								<div class="wrap-col">
									<div class="wrapper pad_bot2">
										<figure class="left marg_right1"><img src="images/taco5.jpg" alt=""></figure>
										<p>
										<a href="#">Igrendientes</a><br>
											Rem aperiam, eaque ipsa quae ab illo inventore veritatis.
										</p>
									</div>
									<div class="wrapper">
										<figure class="left marg_right1"><img src="images/taco6.jpg" alt=""></figure>
										<p>
										<a href="#">Igrendientes</a><br>
											Aut odit aut fugit, sed quia consequuntur magni dolores eos qui.
										</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="col-1-3">
						<div class="wrap-col">
							<h2>Paquetes</h2>
							<ul class="testimonials">
								<li class="row">
									<span>1</span>
									<p>
										“Remperam eaquepsa quae abillo inventore vertatis.”
										<img src="images/signature1.jpg" alt="">
									</p>
								</li>
								<li class="row">
									<span>2</span>
									<p>
										“Quasi arctecto beatae vitae dicta sunt explicabo.”
										<img src="images/signature2.jpg" alt="">
									</p>
								</li>
								<li class="row">
									<span>3</span>
									<p>
										“Nemo enim ipsam volupta<br>
										tem quia voluptas.”<img src="images/signature3.jpg" alt="">
									</p>
								</li>
								<li class="row">
									<span>4</span>
									<p>
										“Nemo enim ipsam volupta<br>
										tem quia voluptas.”<img src="images/signature3.jpg" alt="">
									</p>
								</li>
							</ul>
						</div>
					</section>
				</div>
			</article>
			<!-- / content -->
		</div>
	</div>