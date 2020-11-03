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
				<h1>Problema No. 1: Casa de Prestamo</h1>
			</div>
			<aside>
				<div class="widget">
					<h3>¿De qué trata el ejercicio de la Casa de Prestamo?</h3>
					<ul>
					<br>
						<li><a href="#">Una casa de préstamo necesita crear una aplicación 
							web que permita simular los montos de las cuotas 
							que un cliente debe realizar; además de mostrar 
							las fechas posibles de pago a partir del mes siguiente.</a></li>
							<br>
							</ul>

						<h4>Tomando en cuenta que:</h4>
						<ul>
						<br>
						<li><a href="#">La aplicación no deberá mostrar mensajes de error.</a></li>
						<li><a href="#">El número de cuotas cuenta con un criterio especial de impuesto, el cual se muestra en el siguiente
							cuadro.</a></li>
						<li><a href="#">Valide el ingreso del nombre del cliente mostrando el mensaje «Debe registrar nombre del
							cliente», en caso el usuario deje vacía esta sección.</a></li>
							<li><a href="#">Valide el ingreso del monto prestado mostrando el mensaje «Debe registrar correctamente el
							monto de préstamo», solo cuando el usuario deje vacío o ingrese una cadena en el cuadro de
							texto del monto prestado.</a></li>
							<li><a href="#">Use la estructura for para la impresión del número de cuotas, fechas de pago y monto mensual,
							según el número de cuotas seleccionado.</a></li>
							<li><a href="#">Inicialmente, la ventana no debe mostrar los resultados hasta que presione el botón Cotizar.</a></li>

					</ul>
				</div>
			</aside>

			<figure>
				<img src="img/prestamo.jpg" alt="">
			</figure>

			<div class="articulo">
				<article>
				<?php
					include "p7_jimenez_25_php/casadeprestamo.php";
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