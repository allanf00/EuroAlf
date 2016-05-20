<?php 
	require 'database.php';
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: administradorsuiza.php");
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM suiza where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
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
		    			<h3>Información del Jugador</h3>
		    		</div>
		    		
		    		<div class="form-horizontal" >
					  <div class="control-group">
					    <label class="control-label">Dorsal</label>
					    <div class="controls">
						    <label class="checkbox">
						     	<?php echo $data['dorsal'];?>
						    </label>
					    </div>
					  </div>
	    			<div class="form-horizontal" >
					  <div class="control-group">
					    <label class="control-label">Posición</label>
					    <div class="controls">
						    <label class="checkbox">
						     	<?php echo $data['posicion'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Nombre</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['nombre'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Apellidos</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['apellidos'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Edad</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['edad'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Partidos Jugados</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['partidosjugados'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Goles</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['goles'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Amarillas</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['amarillas'];?>
						    </label>
					    </div>
					    <div class="control-group">
					    <label class="control-label">Rojas</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['rojas'];?>
						    </label>
					    </div>
					  </div>
					  
					  </div>
					    <div class="form-actions">
						  <a class="btn" href="administradorsuiza.php">Back</a>
					   </div>
					
					 
					</div>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>