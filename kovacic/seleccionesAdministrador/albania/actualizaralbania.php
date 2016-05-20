<?php 
	
	require 'database.php';

	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: administradoralbania.php");
	}
	
	if ( !empty($_POST)) {
		// keep track validation errors
		/*$nameError = null;
		$emailError = null;
		$mobileError = null;
		$casaError = null;
		$perroError = null;
		$olaError = null;
		$maError = null;
		$weError = null;*/
		
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
		

		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE albania  set dorsal = ?, posicion = ?, nombre =?, apellidos =?, edad = ?, partidosjugados = ?, goles=?, amarillas=?, rojas=? WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($dorsal,$posicion,$nombre, $apellidos, $edad, $partidosjugados, $goles, $amarillas, $rojas, $id));
			Database::disconnect();
			header("Location: administradoralbania.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM albania where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$dorsal = $data['dorsal'];
		$posicion = $data['posicion'];
		$nombre = $data['nombre'];
		$apellidos = $data['apellidos'];
		$edad = $data['edad'];
		$partidosjugados = $data['partidosjugados'];
		$goles = $data['goles'];
		$amarillas = $data['amarillas'];
		$rojas = $data['rojas'];
		Database::disconnect();
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
		    			<h3>Actualizar Plantilla</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="actualizaralbania.php?id=<?php echo $id?>" method="post">
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
						  <a class="btn" href="administradoralbania.php">Volver</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>