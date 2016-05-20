<?php 
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		/*$posicionError = null;
		$nombreError = null;
		$partidosjugadosError = '';
		$ganadosError = '';
		$empatadosError = '';
		$perdidosError = '';
		$golesfavorError = '';
		$golescontraError = 'n';
		$puntosError = '';*/


		// keep track post values
		$dorsal = $_POST['dorsal'];
		$posicion = $_POST['posicion'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$edad = $_POST['edad'];
		$partidosjugados = $_POST['partidosjugados'];
		$goles = $_POST['goles'];
		$amarillas = $_POST['amarillas'];
		$rojas = $_POST['rojas'];
		
		// validate input
		$valid = true;
		/*if (empty($posicion)) {
			$posicionError = 'Please enter Position';
			$valid = false;
		}
		
		if (empty($nombre)) {
			$nombreError = 'Please enter Name';
			$valid = false;
		} 
		
		if (empty($partidosjugados)) {
			$partidosjugadosError = 'Please enter Matches played';
			$valid = false;
		}

		if (empty($ganados)) {
			$ganadosError = 'Please enter Matches Won';
			$valid = false;
		}
		
		if (empty($empatados)) {
			$empatadosError = 'Please enter Matches Tied.';
			$valid = false;
		}
		
		if (empty($perdidos)) {
			$perdidosError = 'Please enter Matches Lost';
			$valid = false;
		}
		
		if (empty($golesfavor)) {
			$golesfavorError = 'Please enter Goles a Favor';
			$valid = false;
		}
		
		if (empty($golescontra)) {
			$golescontraError = 'Please enter Goles en Contra';
			$valid = false;
		}

		if (empty($puntos)) {
			$puntosError = 'Please enter Points';
			$valid = false;
		}*/
		
		
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO austria (dorsal,posicion,nombre,apellidos,edad,partidosjugados,goles, amarillas, rojas) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($dorsal,$posicion,$nombre,$apellidos,$edad,$partidosjugados, $goles, $amarillas, $rojas));
			Database::disconnect();
			header("Location: administradoraustria.php");
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Insertar Jugador</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="crearaustria.php" method="post">
					  <div class="control-group <?php echo !empty($dorsalError)?'error':'';?>">
					    <label class="control-label">Dorsal</label>
					    <div class="controls">
					      	<input name="dorsal" type="text"  placeholder="Dorsal" value="<?php echo !empty($dorsal)?$dorsal:'';?>">
					      	<?php if (!empty($dorsalError)): ?>
					      		<span class="help-inline"><?php echo $dorsalError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($posicionError)?'error':'';?>">
					    <label class="control-label">Posición</label>
					    <div class="controls">
					      	<input name="posicion" type="text"  placeholder="Posición" value="<?php echo !empty($posicion)?$posicion:'';?>">
					      	<?php if (!empty($posicionError)): ?>
					      		<span class="help-inline"><?php echo $posicionError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($nombreError)?'error':'';?>">
					    <label class="control-label">Nombre</label>
					    <div class="controls">
					      	<input name="nombre" type="text" placeholder="Jugador" value="<?php echo !empty($nombre)?$nombre:'';?>">
					      	<?php if (!empty($nombreError)): ?>
					      		<span class="help-inline"><?php echo $nombreError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($apellidosError)?'error':'';?>">
					    <label class="control-label">Apellidos</label>
					    <div class="controls">
					      	<input name="apellidos" type="text" placeholder="Apellidos" value="<?php echo !empty($apellidos)?$apellidos:'';?>">
					      	<?php if (!empty($apellidosError)): ?>
					      		<span class="help-inline"><?php echo $apellidosError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					   <div class="control-group <?php echo !empty($edadError)?'error':'';?>">
					    <label class="control-label">Edad</label>
					    <div class="controls">
					      	<input name="edad" type="text"  placeholder="Edad" value="<?php echo !empty($edad)?$edad:'';?>">
					      	<?php if (!empty($edadError)): ?>
					      		<span class="help-inline"><?php echo $edadError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($partidosjugadosError)?'error':'';?>">
					    <label class="control-label">Partidos Jugados</label>
					    <div class="controls">
					      	<input name="partidosjugados" type="text"  placeholder="Partidos Jugados" value="<?php echo !empty($partidosjugados)?$partidosjugados:'';?>">
					      	<?php if (!empty($partidosjugadosError)): ?>
					      		<span class="help-inline"><?php echo $partidosjugadosError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  </div>
					  <div class="control-group <?php echo !empty($golesError)?'error':'';?>">
					    <label class="control-label">Goles</label>
					    <div class="controls">
					      	<input name="goles" type="text"  placeholder="Goles" value="<?php echo !empty($goles)?$goles:'';?>">
					      	<?php if (!empty($golesError)): ?>
					      		<span class="help-inline"><?php echo $golesError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($amarillasError)?'error':'';?>">
					    <label class="control-label">Amarillas</label>
					    <div class="controls">
					      	<input name="amarillas" type="text"  placeholder="Amarillas" value="<?php echo !empty($amarillas)?$amarillas:'';?>">
					      	<?php if (!empty($amarillasError)): ?>
					      		<span class="help-inline"><?php echo $amarillasError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($rojasError)?'error':'';?>">
					    <label class="control-label">Rojas</label>
					    <div class="controls">
					      	<input name="rojas" type="text"  placeholder="Rojas" value="<?php echo !empty($rojas)?$rojas:'';?>">
					      	<?php if (!empty($rojasError)): ?>
					      		<span class="help-inline"><?php echo $rojasError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Actualizar</button>
						  <a class="btn" href="administradoraustria.php">Volver</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>