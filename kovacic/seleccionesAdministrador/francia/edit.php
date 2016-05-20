<?php 
	$cn = @mysql_connect('localhost','root','');
	if($cn)
	{
		mysql_select_db('kovacic',$cn);
	}

	if(isset($_GET['eid']))
	{
		$id    = $_GET['eid'];
		$val   = mysql_fetch_object(mysql_query("SELECT * FROM francia WHERE id = '$id'"));
	}

	if(isset($_POST['upload']))
	{
    $id          = $_GET['eid'];
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

    if(empty($image_name))
    {
       mysql_query("UPDATE francia SET dorsal = '$dorsal', posicion = '$posicion', nombre = '$nombre', apellidos = '$apellidos', 
        edad = '$edad', partidosjugados = '$partidosjugados', goles = '$goles' , amarillas = '$amarillas', rojas = '$rojas' WHERE id = '$id'");
       header('location:a.php');
    }
    else
    {
      if($image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/gif' || $image_type == 'image/png')
      {
           $part  = 'img/';
           $oldpic= $_POST['oldpic'];
           if(unlink($part.$oldpic))
           {
             move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$store);
             mysql_query("UPDATE francia SET dorsal = '$dorsal', posicion = '$posicion', nombre = '$nombre', apellidos = '$apellidos', 
        edad = '$edad', partidosjugados = '$partidosjugados', goles = '$goles' , amarillas = '$amarillas', rojas = '$rojas', image = '$store' WHERE id = '$id'");
             header('location:a.php');
           }

      }
      else
      {
        echo "Invalide File";
      }  
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
  <div class="container" style="background-color:#fff;">
      <center><h3 style="color:blue">Upload Picture</h3></center>

      <form action="" method="post" enctype="multipart/form-data">
   		<table class="table">
   				<tr>
   					<td>
   						<label>Picture Name</label>
   						<input type="text" name="dorsal" value="<?= $val->dorsal ?>" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="posicion" value="<?= $val->posicion ?>" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="nombre" value="<?= $val->nombre ?>" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="apellidos" value="<?= $val->apellidos ?>" class="form-control">

              <label>Picture Name</label>
              <input type="text" name="edad" value="<?= $val->edad ?>" class="form-control">

                <label>Picture Name</label>
              <input type="text" name="partidosjugados" value="<?= $val->partidosjugados ?>" class="form-control">

                <label>Picture Name</label>
              <input type="text" name="goles" value="<?= $val->goles ?>" class="form-control">

                <label>Picture Name</label>
              <input type="text" name="amarillas" value="<?= $val->amarillas ?>" class="form-control">

                <label>Picture Name</label>
              <input type="text" name="rojas" value="<?= $val->rojas ?>" class="form-control">
   						
   					</td>
   					<td>
   						
   						<img id="blah" src="img/<?=$val->image?>" alt="your image" style="width:140px;height:120px;" />
              <label>Profile</label>
              <input type="file" name="file" class="form-control" id="images">
              <input type="hidden" name="oldpic" value="<?=$val->image?>">
   					</td> 
   					<td>
   					  <label>&nbsp;</label>
   					  <input type="submit" value="update" class="btn btn-primary" name="upload"></td>  					
   				</tr>

   		</table>
   	 </form>
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