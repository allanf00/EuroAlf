<?php 
	require 'database.php';
	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}
	
	if ( null==$id ) {
		header("Location: administradorgrupoc.php");
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM grupoc where id = ?";
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
		    			<h3>Información de la Selección</h3>
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
					    <label class="control-label">Partidos Jugados</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['partidosjugados'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Ganados</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['ganados'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Empatados</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['empatados'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Perdidos</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['perdidos'];?>
						    </label>
					    </div>
					    <div class="control-group">
					    <label class="control-label">Goles a Favor</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['golesfavor'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Goles en Contra</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['golescontra'];?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Puntos</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['puntos'];?>
						    </label>
					    </div>
					  </div>
					  </div>
					    <div class="form-actions">
						  <a class="btn" href="administradorgrupoc.php">Back</a>
					   </div>
					
					 
					</div>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>