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
					<li><a href="p3_jimenez_25.php">Strpos</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Problema No. 2: Función .min</h1>
			</div>

			<aside>
				<div class="widget">
					<h3>¿Para qué nos sirve la función .min?</h3>
					<ul>
						<li><a href="#">Permite devolver el mínimo valor numérico registrado en un conjunto de valores del mismo tipo.</a></li>
						<li><a href="#">Su formato es: min($variable_coleccion);</a></li>
					</ul>
					<h4>Veamos nuestro caso</h4>
					<ul>
						<li><a href="#">Apartir de un conjunto de números enteros almacenados en un arreglo llamado $números,
						determinar el menor elemento de 1, 2, 5 y 10.</a></li>
					</ul>
				</div>
			</aside>

			<figure>
				<img src="img/min2.png" alt="">
			</figure>

			<div class="articulo">
				<article>
				<h5>Ejercicio utilizando la función .min()</h5>
					<br>
				<p>Mariana junta monedas de 1, 2, 5 y 10 pesos mexicanos desde hace tres meses; ¿De todas las monedas cuáles son las que tienen un valor menor?</p>
				<br>
				<h6>Resultado</h6>
				<br>
				<?php
					include "p7_jimenez_25_php/min.php";
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