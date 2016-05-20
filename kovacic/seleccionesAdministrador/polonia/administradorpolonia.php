<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tabla</title>
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<header>
		<nav>
			<ul>
				<li><a class="current" href="../interfazadministrador.php">Inicio</a></li>
				<li><a href="#">Clasificación</a>
					<div>
						<ul>
							<li><a href="../../gruposAdministrador/grupoa/administradorgrupoa.php">Grupo A</a></li>
							<li><a href="../../gruposAdministrador/grupob/administradorgrupob.php">Grupo B</a></li>
							<li><a href="../../gruposAdministrador/grupoc/administradorgrupoc.php">Grupo C</a></li>
							<li><a href="../../gruposAdministrador/grupod/administradorgrupod.php">Grupo D</a></li>
							<li><a href="../../gruposAdministrador/grupoe/administradorgrupoe.php">Grupo E</a></li>
							<li><a href="../../gruposAdministrador/grupof/administradorgrupof.php">Grupo F</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#"> Selecciones</a>
					<div>
						<ul>
							<li><a href="../albania/administradoralbania.php">Albania</a></li>
							<li><a href="../alemania/administradoralemania.php">Alemania</a></li>
							<li><a href="../austria/administradoraustria.php">Austria</a></li>
							<li><a href="../belgica/administradorbelgica.php">Bélgica</a></li>
							<li><a href="../croacia/administradorcroacia.php">Croacia</a></li>
							<li><a href="../eslovaquia/administradoreslovaquia.php">Eslovaquia</a></li>
							<li><a href="../spain/administradorspain.php">España</a></li>
							<li><a href="../francia/administradorfrancia.php">Francia</a></li>
							<li><a href="../gales/administradorgales.php">Gales</a></li>
							<li><a href="../hungria/administradorhungria.php">Hungría</a></li>
							<li><a href="../inglaterra/administradoringlaterra.php">Inglaterra</a></li>
							<li><a href="../irlanda/administradorirlanda.php">Irlanda</a></li>
							<li><a href="../irlandadelnorte/administradorirlandadelnorte.php">Irlanda del Norte</a></li>
							<li><a href="../islandia/administradorislandia.php">Islandia</a></li>
							<li><a href="../italia/administradoritalia.php">Italia</a></li>
							<li><a href="../polonia/administradorpolonia.php">Polonia</a></li>
							<li><a href="../portugal/administradorportugal.php">Portugal</a></li>
							<li><a href="../republicacheca/administradorrepublicacheca.php">República Checa</a></li>
							<li><a href="../rumania/administradorrumania.php">Rumanía</a></li>
							<li><a href="../rusia/administradorrusia.php">Rusia</a></li>
							<li><a href="../suecia/administradorsuecia.php">Suecia</a></li>
							<li><a href="../suiza/administradorsuiza.php">Suiza</a></li>
							<li><a href="../turquia/administradorturquia.php">Turquía</a></li>
							<li><a href="../ucrania/administradorucrania.php">Ucrania</a></li>
						</ul>
					</div>
				</li>

				<li><a href="#">Estadísticas</a>
					<div>
						<ul>
							<li><a href="../estadisticasAdministrador/pichichi/administradorpichichi.php">Pichichi</a></li>
							<li><a href="../estadisticasAdministrador/zamora/administradorzamora.php">Zamora</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#">Historia</a>
					<div>
						<ul>
							<li><a href="../../historiaAdministrador/euro1960.html">Eurocopa 1960</a></li>
							<li><a href="../../historiaAdministrador/euro1964.html">Eurocopa 1964</a></li>
							<li><a href="../../historiaAdministrador/euro1968.html">Eurocopa 1968</a></li>
							<li><a href="../../historiaAdministrador/euro1972.html">Eurocopa 1972</a></li>
							<li><a href="../../historiaAdministrador/euro1976.html">Eurocopa 1976</a></li>
							<li><a href="../../historiaAdministrador/euro1980.html">Eurocopa 1980</a></li>
							<li><a href="../../historiaAdministrador/euro1984.html">Eurocopa 1984</a></li>
							<li><a href="../../historiaAdministrador/euro1988.html">Eurocopa 1988</a></li>
							<li><a href="../../historiaAdministrador/euro1992.html">Eurocopa 1992</a></li>
							<li><a href="../../historiaAdministrador/euro1996.html">Eurocopa 1996</a></li>
							<li><a href="../../historiaAdministrador/euro2000.html">Eurocopa 2000</a></li>
							<li><a href="../../historiaAdministrador/euro2004.html">Eurocopa 2004</a></li>
							<li><a href="../../historiaAdministrador/euro2008.html">Eurocopa 2008</a></li>
							<li><a href="../../historiaAdministrador/euro2012.html">Eurocopa 2012</a></li>
							<li><a href="../../historiaAdministrador/euro2016.html">Eurocopa 2016</a></li>
						</ul>
					</div>

				</li>

			</ul>
		</nav>
	</header>

<body>
    <div class="container">
    		<div class="row">
    			<h3>Polonia</h3>
    		</div>
			<div class="row">
				<p>
					<a href="crearpolonia.php" class="btn btn-success">Crear</a>
				</p>
				
				<table class="table table-striped table-bordered">
		              <thead>
		                <tr>
		                  <th>Dorsal</th>
		                  <th>Posición</th>
		                  <th>Nombre</th>
		                  <th>Apellidos</th>
		                  <th>Edad</th>
		                  <th>Partidos Jugados</th>
		                  <th>Goles</th>
		                  <th>Amarillas</th>
		                  <th>Rojas</th>
		                </tr>
		              </thead>
		              <tbody>
		              <?php 
					   include 'database.php';
					   $pdo = Database::connect();
					   $sql = 'SELECT * FROM polonia ORDER BY dorsal ASC';
	 				   foreach ($pdo->query($sql) as $row) {
						   		
							   	echo '<td>'. $row['dorsal'] . '</td>';
							   	echo '<td>'. $row['posicion'] . '</td>';
							   	echo '<td>'. $row['nombre'] . '</td>';
							   	echo '<td>'. $row['apellidos'] . '</td>';
							   	echo '<td>'. $row['edad'] . '</td>';
							   	echo '<td>'. $row['partidosjugados'] . '</td>';
							   	echo '<td>'. $row['goles'] . '</td>';
							   	echo '<td>'. $row['amarillas'] . '</td>';
							   	echo '<td>'. $row['rojas'] . '</td>'; 	
							   	echo '<td width=250>';
							   	echo '<a class="btn" href="informacionpolonia.php?id='.$row['id'].'">Informacion</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-success" href="actualizarpolonia.php?id='.$row['id'].'">Actualizar</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-danger" href="borrarpolonia.php?id='.$row['id'].'">Borrar</a>';
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