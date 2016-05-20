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
				<li><a class="current" href="interfazadministrador.php">Inicio</a></li>
				<li><a href="#">Clasificación</a>
					<div>
						<ul>
							<li><a href="administradorgrupoa.php">Grupo A</a></li>
							<li><a href="../grupob/administradorgrupob.php">Grupo B</a></li>
							<li><a href="../grupoc/administradorgrupoc.php">Grupo C</a></li>
							<li><a href="../grupod/administradorgrupod.php">Grupo D</a></li>
							<li><a href="../grupoe/administradorgrupoe.php">Grupo E</a></li>
							<li><a href="../grupof/administradorgrupof.php">Grupo F</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#"> Selecciones</a>
					<div>
						<ul>
							<li><a href="#">Albania</a></li>
							<li><a href="#">Alemania</a></li>
							<li><a href="#">Austria</a></li>
							<li><a href="#">Bélgica</a></li>
							<li><a href="#">Croacia</a></li>
							<li><a href="#">Eslovaquia</a></li>
							<li><a href="spain.php">España</a></li>
							<li><a href="#">Francia</a></li>
							<li><a href="#">Gales</a></li>
							<li><a href="#">Hungría</a></li>
							<li><a href="#">Inglaterra</a></li>
							<li><a href="#">Irlanda</a></li>
							<li><a href="#">Irlanda del Norte</a></li>
							<li><a href="#">Islandia</a></li>
							<li><a href="#">Italia</a></li>
							<li><a href="#">Polonia</a></li>
							<li><a href="#">Portugal</a></li>
							<li><a href="#">República Checa</a></li>
							<li><a href="#">Rumanía</a></li>
							<li><a href="#">Rusia</a></li>
							<li><a href="#">Suecia</a></li>
							<li><a href="#">Suiza</a></li>
							<li><a href="#">Turquía</a></li>
							<li><a href="#">Ucrania</a></li>
						</ul>
					</div>
				</li>

				<li><a href="#">Estadísticas</a>
				</li>
				<li><a href="#">Historia</a>
					<div>
						<ul>
							<li><a href="euro1960.html">Eurocopa 1960</a></li>
							<li><a href="euro1964.html">Eurocopa 1964</a></li>
							<li><a href="euro1968.html">Eurocopa 1968</a></li>
							<li><a href="euro1972.html">Eurocopa 1972</a></li>
							<li><a href="euro1976.html">Eurocopa 1976</a></li>
							<li><a href="euro1980.html">Eurocopa 1980</a></li>
							<li><a href="euro1984.html">Eurocopa 1984</a></li>
							<li><a href="euro1988.html">Eurocopa 1988</a></li>
							<li><a href="euro1992.html">Eurocopa 1992</a></li>
							<li><a href="euro1996.html">Eurocopa 1996</a></li>
							<li><a href="euro2000.html">Eurocopa 2000</a></li>
							<li><a href="euro2004.html">Eurocopa 2004</a></li>
							<li><a href="euro2008.html">Eurocopa 2008</a></li>
							<li><a href="euro2012.html">Eurocopa 2012</a></li>
							<li><a href="euro2016.html">Eurocopa 2016</a></li>
						</ul>
					</div>

				</li>

			</ul>
		</nav>
	</header>

<body>
    <div class="container">
    		<div class="row">
    			<h3>Grupo A</h3>
    		</div>
			<div class="row">
				<p>
					<a href="creargrupoa.php" class="btn btn-success">Crear</a>
				</p>
				
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
					   $sql = 'SELECT * FROM grupoa ORDER BY posicion ASC';
	 				   foreach ($pdo->query($sql) as $row) {
						   		echo '<tr>';
							   	if ($row['id'] == '5') {
  								echo "<a href='francia.php'>Francia</a> ";
					  			 }
					  			 if ($row['nombre'] == 'Suiza') {
  								echo "<a href='suiza.php'>Suiza</a> ";
					  			 }
					  			 if ($row['nombre']=='Albania') {
  								echo "<a href='albania.php'>Albania</a> ";
					  			 }
					  			 if ($row['nombre'] == 'Rumanía') {
  								echo "<a href='rumania.php'>Rumanía</a> ";
					  			 }
							   	echo '<td>'. $row['posicion'] . '</td>';
							   	echo '<td>'. $row['nombre'] . '</td>';
							   	echo '<td>'. $row['partidosjugados'] . '</td>';
							   	echo '<td>'. $row['ganados'] . '</td>';
							   	echo '<td>'. $row['empatados'] . '</td>';
							   	echo '<td>'. $row['perdidos'] . '</td>';
							   	echo '<td>'. $row['golesfavor'] . '</td>';
							   	echo '<td>'. $row['golescontra'] . '</td>';
							   	echo '<td>'. $row['puntos'] . '</td>';
							   	echo '<td width=250>';
							   	echo '<a class="btn" href="informaciongrupoa.php?id='.$row['id'].'">Informacion</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-success" href="actualizargrupoa.php?id='.$row['id'].'">Actualizar</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-danger" href="borrargrupoa.php?id='.$row['id'].'">Borrar</a>';
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