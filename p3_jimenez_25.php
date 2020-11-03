<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>25 Jiménez Deyra</title>
    
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
				<a href="#"><img src="img/logo.png" alt="FalconMasters"></a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="p1_jimenez_25.php">Casa de Préstamo</a></li>
					<li><a href="p2_jimenez_25.php">Función Min</a></li>
					<li><a href="p3_jimenez_25.html">Strpos</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Problema No. 3: Strpos()</h1>
			</div>

			<aside>
				<div class="widget">
					<h3>¿De qué forma nos ayuda la función Srtpos()</h3>
					<ul>
						<li><a href="#">Determina la posición del primer valor encontrado en una cadena de caracteres; hay que tener en
						cuenta que el punto de inicio de las posiciones es cero.</a></li> 
						<li><a href="#">Su formato es:
						$variable_posicion = strpos($variable,'contenido');</a></li>
					</ul>
					<h4>Variaciones</h5>
					<ul>
						<li><a href="#">strrpos: Devuelve la posición de la última vez que se
						encontró un valor dentro de una cadena</a></li>
						<li><a href="#">stripos: Tiene la misma función que strpos, pero
						adiciona que no distingue entre mayúsculas y minúsculas.</a></li>
						<li><a href="#">strripos: Devuelve la posición de la última vez que se
						encontró un valor dentro de una cadena, sin distinguir las mayúsculas de las minúsculas.</a></li>
					</ul>
				</div>
			</aside>
			
			<figure>
				<img src="img/strpos.png" alt="">
			</figure>

			<div class="articulo">
				<article>
					<h5>Ejercicio utilizando la función Strpos()</h5>
					<br>
				<p>¿En qué posición se encuentra el "@" en la siguiente dirección de correo eléctronico de Manuel?</p>
				<br>
				<p> manuel.torresr@hotmail.com</p>
				<br>
				<h6>Resultado</h6>
				<br>
				<?php
					include "p7_jimenez_25_php/strpos.php";
				?>
				</article>
			</div>

		</div>
	</section>
	<footer>
		<div class="wrapp">
            <p> No lista 25 </p>
            <p> SUBMÓDULO 2:
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
            <p>https://github.com/deyrajimenez</p>
		</div>
	</footer>
</body>
</html>