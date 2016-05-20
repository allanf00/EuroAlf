<?php 
	
	require 'database.php';

	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: administradorgrupof.php");
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
		$posicion = $_POST['posicion'];
		$nombre = $_POST['nombre'];
		$partidosjugados = $_POST['partidosjugados'];
		$ganados = $_POST['ganados'];
		$empatados = $_POST['empatados'];
		$perdidos = $_POST['perdidos'];
		$golesfavor = $_POST['golesfavor'];
		$golescontra = $_POST['golescontra'];
		$puntos = $_POST['puntos'];
		
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
			$sql = "UPDATE grupof  set posicion = ?, nombre = ?, partidosjugados =?, ganados =?, empatados = ?, perdidos = ?, golesfavor=?, golescontra=?, puntos=? WHERE id = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($posicion,$nombre,$partidosjugados, $ganados, $empatados, $perdidos, $golesfavor, $golescontra, $puntos, $id));
			Database::disconnect();
			header("Location: administradorgrupof.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM grupof where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$posicion = $data['posicion'];
		$nombre = $data['nombre'];
		$partidosjugados = $data['partidosjugados'];
		$ganados = $data['ganados'];
		$empatados = $data['empatados'];
		$perdidos = $data['perdidos'];
		$golesfavor = $data['golesfavor'];
		$golescontra = $data['golescontra'];
		$puntos = $data['puntos'];
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
		    			<h3>Actualizar Selección</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="actualizargrupof.php?id=<?php echo $id?>" method="post">
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
					    <label class="control-label">Selección</label>
					    <div class="controls">
					      	<input name="nombre" type="text" placeholder="Selección" value="<?php echo !empty($nombre)?$nombre:'';?>">
					      	<?php if (!empty($nombreError)): ?>
					      		<span class="help-inline"><?php echo $nombreError;?></span>
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
					  <div class="control-group <?php echo !empty($ganadosError)?'error':'';?>">
					    <label class="control-label">Ganados</label>
					    <div class="controls">
					      	<input name="ganados" type="text"  placeholder="Ganados" value="<?php echo !empty($ganados)?$ganados:'';?>">
					      	<?php if (!empty($ganadosError)): ?>
					      		<span class="help-inline"><?php echo $ganadosError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($empatadosError)?'error':'';?>">
					    <label class="control-label">Empatados</label>
					    <div class="controls">
					      	<input name="empatados" type="text"  placeholder="Empatados" value="<?php echo !empty($empatados)?$empatados:'';?>">
					      	<?php if (!empty($empatadosError)): ?>
					      		<span class="help-inline"><?php echo $empatadosError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($perdidosError)?'error':'';?>">
					    <label class="control-label">Perdidos</label>
					    <div class="controls">
					      	<input name="perdidos" type="text"  placeholder="Perdidos" value="<?php echo !empty($perdidos)?$perdidos:'';?>">
					      	<?php if (!empty($perdidosError)): ?>
					      		<span class="help-inline"><?php echo $perdidosError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($golesfavorError)?'error':'';?>">
					    <label class="control-label">Goles a Favor</label>
					    <div class="controls">
					      	<input name="golesfavor" type="text"  placeholder="Goles a Favor" value="<?php echo !empty($golesfavor)?$golesfavor:'';?>">
					      	<?php if (!empty($golesfavorError)): ?>
					      		<span class="help-inline"><?php echo $golesfavorError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($golescontraError)?'error':'';?>">
					    <label class="control-label">Goles en Contra</label>
					    <div class="controls">
					      	<input name="golescontra" type="text"  placeholder="Goles en Contra" value="<?php echo !empty($golescontra)?$golescontra:'';?>">
					      	<?php if (!empty($golescontraError)): ?>
					      		<span class="help-inline"><?php echo $golescontraError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($puntosError)?'error':'';?>">
					    <label class="control-label">Puntos</label>
					    <div class="controls">
					      	<input name="puntos" type="text"  placeholder="Puntos" value="<?php echo !empty($puntos)?$puntos:'';?>">
					      	<?php if (!empty($puntosError)): ?>
					      		<span class="help-inline"><?php echo $puntosError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Actualizar</button>
						  <a class="btn" href="administradorgrupof.php">Volver</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>