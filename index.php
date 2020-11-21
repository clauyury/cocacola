<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Coca cola la bebida mas deliciosa del mundo">
		<meta name="keywords" content="bebida, gaseosa, cola">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Inicio - Coca Cola
		</title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/a8e893a215.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<a href="index.html">
					<img src="img/logo.svg" class="logo">
				</a>
				<nav>
					<a href="#inicio">Inicio</a>
					<a href="#nosotros">Nosotros</a>
					<a href="#servicios">Servicios</a>
					<a href="#galeria">Galeria</a>
					<a href="#contactenos">Contactenos</a>
				</nav>
				<a href="#" class="hamb"><i class="fas fa-bars"></i></a>
			</div>
		</header>
		<main>
			<section id="inicio">
				<img src="img/bannerprincipal.jpg">
				<div class="bloque-inicio">
					<h1>Bienvenidos a Coca Cola</h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
					<a href="#nosotros" class="boton boton-rojo">Ver más</a>
				</div>
			</section>
			<section id="nosotros" class="seccion">
				<div class="container">
					<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</section>
			<section id="servicios" class="seccion">
				<div class="container">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio1.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 1</h3>
									<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<a href="#" class="boton boton-blanco" >Ver más</a>
								</div>
							</div>	
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio2.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 2</h3>
									<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>	
						</div>
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio3.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 3</h3>
									<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									<a href="#" class="boton boton-blanco">Ver más</a>
								</div>
							</div>	
						</div>
					</div>
					
				</div>
			</section>
			<section id="galeria">
				<div class="container-fluid">
					<div class="row">
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio1.jpg">
								<h4>Imagen1</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio2.jpg">
								<h4>Imagen2</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio3.jpg">
								<h4>Imagen3</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio1.jpg">
								<h4>Imagen4</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio2.jpg">
								<h4>Imagen5</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio3.jpg">
								<h4>Imagen6</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="contactenos" class="seccion">
				<iframe width="520" height="400" frameborder="0" scrolling="no" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Guayaquil+(curso)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
				<div class="container-fluid">
					<div class="row">
						<div class=" columna columna-41 columna-mobile-100 empujar-58 empujar mobile-0 sinpadding-mobile">
							<form action="index.php" method="post">
								<div class="form-block">
									<input type="text" name="nombre" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-block">
									<textarea name="mensaje" placeholder="Mensaje"></textarea>
								</div>
								<div class="form-block bloque-ultimo">
									<input type="submit" class="boton boton-negro" value="Enviar">
								</div>
								<?php

									if($_SERVER["REQUEST_METHOD"] == "POST")
									{
										$nombre = $_POST["nombre"] ;
										$email = $_POST["email"] ;
										$mensaje = $_POST["mensaje"] ;

										if(isset($nombre))
										{
											if(isset($email))
											{
												if(isset($mensaje))
												{
													$para = "clauyury@gmail.com";
													$asunto = "Esto es una prueba";
													$cuerpo = $nombre."\n".$email."\n".$mensaje;
													$adicional = "From: noreply@curso basico.com";

													mail($para,$asunto,$cuerpo,$adicional);

												?>
													<p>Envio Exitoso</p>

												<?php
												}
											}
										}
									}
								?>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer>
			<div class="container">
				<div class="row">
					<div class="columna columna-25 columna-mobile-100">
						<img src="img/logo-blanco.png" class="logo-footer">
						<p>
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.	
						</p>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Temas relacionados
						</h3>
						<ul>
							<li><a href="#">Tema 1</a></li>
							<li><a href="#">Tema 2</a></li>
							<li><a href="#">Tema 3</a></li>	
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Datos de Contacto
						</h3>
						<ul>
							<li>clauyury@hotmail.com</li>
							<li>+593984704528</li>
							<li>Guasmo Central<br>Guayaquil - Ecuador</li>	
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Redes Sociales
						</h3>
						<ul class="redes">
							<li>
								<a href="#">
									<i class="fab fa-facebook-square"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter-square"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-instagram-square"></i>
								</a>
							</li>	
						</ul>
					</div>
				</div>
			</div>
			<div class="barra-footer">
				&copy; Drechos Reservados - 2020				
			</div>	
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>
	</body>
</html>


