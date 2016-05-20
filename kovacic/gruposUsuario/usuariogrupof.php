<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tabla</title>
    <link   href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<header>
		<nav>
			<ul>
				<li><a class="current" href="interfazusuario.php">Inicio</a></li>
				<li><a href="#">Clasificación</a>
					<div>
						<ul>
							<li><a href="../gruposUsuario/usuariogrupoa.php">Grupo A</a></li>
							<li><a href="../gruposUsuario/usuariogrupob.php">Grupo B</a></li>
							<li><a href="../gruposUsuario/usuariogrupoc.php">Grupo C</a></li>
							<li><a href="../gruposUsuario/usuariogrupod.php">Grupo D</a></li>
							<li><a href="../gruposUsuario/usuariogrupoe.php">Grupo E</a></li>
							<li><a href="../gruposUsuario/usuariogrupof.php">Grupo F</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#"> Selecciones</a>
					<div>
						<ul>
							<li><a href="../seleccionesUsuario/albania/albania.php">Albania</a></li>
							<li><a href="../seleccionesUsuario/alemania/alemania.php">Alemania</a></li>
							<li><a href="../seleccionesUsuario/austria/austria.php">Austria</a></li>
							<li><a href="../seleccionesUsuario/belgica/belgica.php">Bélgica</a></li>
							<li><a href="../seleccionesUsuario/croacia/croacia.php">Croacia</a></li>
							<li><a href="../seleccionesUsuario/eslovaquia/eslovaquia.php">Eslovaquia</a></li>
							<li><a href="../seleccionesUsuario/spain/spain.php">España</a></li>
							<li><a href="../seleccionesUsuario/francia/francia.php">Francia</a></li>
							<li><a href="../seleccionesUsuario/gales/gales.php">Gales</a></li>
							<li><a href="../seleccionesUsuario/hungria/hungria.php">Hungría</a></li>
							<li><a href="../seleccionesUsuario/inglaterra/inglaterra.php">Inglaterra</a></li>
							<li><a href="../seleccionesUsuario/irlanda/irlanda.php">Irlanda</a></li>
							<li><a href="../seleccionesUsuario/irlandadelnorte/irlandadelnorte.php">Irlanda del Norte</a></li>
							<li><a href="../seleccionesUsuario/islandia/islandia.php">Islandia</a></li>
							<li><a href="../seleccionesUsuario/italia/italia.php">Italia</a></li>
							<li><a href="../seleccionesUsuario/polonia/polonia.php">Polonia</a></li>
							<li><a href="../seleccionesUsuario/portugal/portugal.php">Portugal</a></li>
							<li><a href="../seleccionesUsuario/republicacheca/republicacheca.php">República Checa</a></li>
							<li><a href="../seleccionesUsuario/rumania/rumania.php">Rumanía</a></li>
							<li><a href="../seleccionesUsuario/rusia/rusia.php">Rusia</a></li>
							<li><a href="../seleccionesUsuario/suecia/suecia.php">Suecia</a></li>
							<li><a href="../seleccionesUsuario/suiza/suiza.php">Suiza</a></li>
							<li><a href="../seleccionesUsuario/turquia/turquia.php">Turquía</a></li>
							<li><a href="../seleccionesUsuario/ucrania/ucrania.php">Ucrania</a></li>
						</ul>
					</div>
				</li>

				<li><a href="#">Estadísticas</a>
					<div>
						<ul>
							<li><a href="estadisticasUsuario/pichichi/usuariopichichi.php">Pichichi</a></li>
							<li><a href="estadisticasUsuario/zamora/usuariozamora.php">Zamora</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#">Historia</a>
					<div>
						<ul>
							<li><a href="#">Eurocopa 1960</a></li>
							<li><a href="#">Eurocopa 1964</a></li>
							<li><a href="#">Eurocopa 1968</a></li>
							<li><a href="#">Eurocopa 1972</a></li>
							<li><a href="#">Eurocopa 1976</a></li>
							<li><a href="#">Eurocopa 1980</a></li>
							<li><a href="#">Eurocopa 1984</a></li>
							<li><a href="#">Eurocopa 1988</a></li>
							<li><a href="#">Eurocopa 1992</a></li>
							<li><a href="#">Eurocopa 1996</a></li>
							<li><a href="#">Eurocopa 2000</a></li>
							<li><a href="#">Eurocopa 2004</a></li>
							<li><a href="euro2008.php">Eurocopa 2008</a></li>
							<li><a href="#">Eurocopa 2012</a></li>
							<li><a href="#">Eurocopa 2016</a></li>
						</ul>
					</div>

				</li>

			</ul>
		</nav>
	</header>

<body>
    <div class="container">
    		<div class="row">
    			<h3>Grupo F</h3>
    		</div>
			<div class="row">
				
				<table class="table table-striped table-bordered">
		              <thead>
		                <tr>
		                  <th>Posición</th>
		                  <th>Selección</th>
		                  <th>Partidos Jugados</th>
		                  <th>Ganados</th>
		                  <th>Empatados</th>
		                  <th>Perdidos</th>
		                  <th>Goles a Favor</th>
		                  <th>Goles en Contra</th>
		                  <th>Puntos</th>
		                </tr>
		              </thead>
		              <tbody>
		              <?php 
					   include 'database.php';
					   $pdo = Database::connect();
					   $sql = 'SELECT * FROM grupof ORDER BY posicion ASC';
	 				   foreach ($pdo->query($sql) as $row) {
						   		echo '<tr>';
							   	echo '<td>'. $row['posicion'] . '</td>';
							   	echo '<td>'. $row['nombre'] . '</td>';
							   	echo '<td>'. $row['partidosjugados'] . '</td>';
							   	echo '<td>'. $row['ganados'] . '</td>';
							   	echo '<td>'. $row['empatados'] . '</td>';
							   	echo '<td>'. $row['perdidos'] . '</td>';
							   	echo '<td>'. $row['golesfavor'] . '</td>';
							   	echo '<td>'. $row['golescontra'] . '</td>';
							   	echo '<td>'. $row['puntos'] . '</td>';
							   	echo '</td>';
							   	echo '</tr>';
					   }
					   Database::disconnect();
					  ?>
				      </tbody>
	            </table>
    	</div>
    </div> <!-- /container -->
  </body>
</html>