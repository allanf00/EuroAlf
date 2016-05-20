<?php 

	$cn = @mysql_connect('localhost','root','');
	if($cn)
	{
		mysql_select_db('kovacic',$cn);
	}

	if(isset($_GET['did']))
	{
		$id = $_GET['did'];
		$part = 'img/';
		$pic  = mysql_fetch_object(mysql_query("SELECT * FROM francia WHERE id = '$id'"));
		$image= $pic->profile;
		if(unlink($part.$image))
		{
			mysql_query("DELETE FROM francia WHERE id = '$id'");
		}

	}

	if(isset($_POST['upload']))
	{
		$dorsal = $_POST['dorsal'];
    $posicion = $_POST['posicion'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $partidosjugados = $_POST['partidosjugados'];
    $goles = $_POST['goles'];
    $amarillas = $_POST['amarillas'];
    $rojas = $_POST['rojas'];
		$image_name  = $_FILES['file']['name'];
		$image_type  = $_FILES['file']['type'];
		$store       = rand(0,100000).$_FILES['file']['name'];


		if($image_type == 'audio/mp3' || $image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/gif' || $image_type == 'image/png')
		{
	       move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$store);
	       mysql_query("INSERT INTO francia(dorsal,posicion,nombre,apellidos,edad,partidosjugados,goles, amarillas, rojas, image) VALUES('$dorsal','$posicion','$nombre','$apellidos','$edad',
          '$partidosjugados','$goles','$amarillas','$rojas','$store')");

		}
		else
		{
			echo "Invalide File";
		}
	}

	
?>
	
<html>
<head>
	<meta charset="utf-8">
	<title>Upload Picture</title>
  <link rel="stylesheet" href="css/estilos.css">
  <link   href="css/bootstrap.min.css" rel="stylesheet">
    
	<script type="text/javascript" src="js/jquery.js"></script>

</head>
<header>
    <nav>
      <ul>
        <li><a class="current" href="../interfazadministrador.php">Inicio</a></li>
        <li><a href="#">Clasificación</a>
          <div>
            <ul>
              <li><a href="../../gruposAdministrador/grupoa/administradorgrupoa.php">Grupo A</a></li>
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
<body style="background-color:brown"><br/>
  <div class="container" style="background-color:#eee;">


      
      <form action="" method="post" enctype="multipart/form-data">
   		<table class="table">
   				<tr>
   					<td>
   						
              <img id="blah" src="images/francia.jpg" alt="r image" style="width:316px;height:513px;" />
   						
   					</td>
   									
   				</tr>

   		</table>
   	 </form>

   	 <table class="table table-bordered table-hover">
   	 	 <thead>
   	 	 	 <tr>
   	 	 	 	 <th>Dorsal</th>
   	 	 	 	 <th>Posicion</th>
   	 	 	 	 <th>Nombre</th>
           <th>Ap</th>
           <th>Edad</th>
           <th>parti</th>
           <th>goles</th>
           <th>ama</th>
           <th>roj</th>
           <th>Action</th>
   	 	 	 </tr>
   	 	 </thead>
   	 	 <tbody>
   	 	 	 <?php 
   	 	 	 	$pic = mysql_query("SELECT * FROM francia");
   	 	 	 	while($row = @mysql_fetch_object($pic))
   	 	 	 	{
   	 	 	 		?>
   	 	 	 			<tr>
   	 	 	 			     <td><?= $row->dorsal ?></td>
                   <td><?= $row->posicion ?></td>
                   <td><?= $row->nombre ?></td>
                   <td><?= $row->apellidos ?></td>
                   <td><?= $row->edad ?></td>
                   <td><?= $row->partidosjugados ?></td>
                   <td><?= $row->goles ?></td>
                   <td><?= $row->amarillas ?></td>
                   <td><?= $row->rojas ?></td>
   	 	 	 			     <td><img src="img/<?= $row->image ?>" style="width:100px;height:100px;"></td>
   	 	 	 			     <td><a href="edit.php?eid=<?= $row->id ?>">Edit</a>|<a onclick="return confirm('Are you sure?')" href="a.php?did=<?= $row->id ?>">Delete</a></td>
   	 	 	 			</tr>
   	 	 	 		<?php 
   	 	 	 	}
   	 	 	 ?>
   	 	 </tbody>
   	 </table>

  </div>
</body>
</html>

<script type="text/javascript">
	$(function(){
		$("#images").change(function(){
            readURL(this);
	    });    
    });	

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>