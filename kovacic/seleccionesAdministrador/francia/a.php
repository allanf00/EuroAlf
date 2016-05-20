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
	
	<title>Upload Picture</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body style="background-color:brown"><br/>
  <div class="container" style="background-color:#eee;">
      <center><h3 style="color:blue">Upload Picture</h3></center>

      <form action="" method="post" enctype="multipart/form-data">
   		<table class="table">
   				<tr>
   					<td>
   						<label>Picture Name</label>
   						<input type="text" name="dorsal" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="posicion" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="nombre" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="apellidos" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="edad" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="partidosjugados" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="goles" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="amarillas" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="rojas" class="form-control">
   						
   					</td>
   					<td>
   						<label>Profile</label>
   						<input type="file" name="file" class="form-control" id="images">
   						<img id="blah" src="#" alt="your image" style="width:140px;height:120px;" />
   					</td> 
   					<td>
   					  <label>&nbsp;</label>
   					  <input type="submit" value="upload" class="btn btn-primary" name="upload"></td>  					
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
           <th>Image</th>
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