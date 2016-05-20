<?php 
	$cn = mysqli_connect('localhost','root','');
	if($cn)
	{
		mysqli_select_db('uploadphp',$cn);
	}

	if(isset($_GET['did']))
	{
		$id = $_GET['did'];
		$part = 'img/';
		$pic  = mysqli_fetch_object(mysqli_query("SELECT * FROM tbpicture WHERE id = '$id'"));
		$image= $pic->profile;
		if(unlink($part.$image))
		{
			mysqli_query("DELETE FROM tbpicture WHERE id = '$id'");
		}

	}

	if(isset($_POST['upload']))
	{
		$picturename = $_POST['picturename'];
		$image_name  = $_FILES['file']['name'];
		$image_type  = $_FILES['file']['type'];
		$store       = rand(0,100000).$_FILES['file']['name'];


		if($image_type == 'audio/mp3' || $image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/gif' || $image_type == 'image/png')
		{
	       move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$store);
	       mysqli_query("INSERT INTO tbpicture(picturename,profile) VALUES('$picturename','$store')");

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
	<link rel="stylesheet" href="css/estilos.css">
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
   						<input type="text" name="picturename" class="form-control">
   						
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
   	 	 	 	 <th>ID</th>
   	 	 	 	 <th>PictureName</th>
   	 	 	 	 <th>Profile</th>
   	 	 	 	 <th>Action</th>
   	 	 	 </tr>
   	 	 </thead>
   	 	 <tbody>
   	 	 	 <?php 
   	 	 	 	$pic = mysqli_query("SELECT * FROM tbpicture");
   	 	 	 	while($row = mysqli_fetch_object($pic))
   	 	 	 	{
   	 	 	 		?>
   	 	 	 			<tr>
   	 	 	 			     <td><?= $row->id ?></td>
   	 	 	 			     <td><?= $row->picturename ?></td>
   	 	 	 			     <td><img src="img/<?= $row->profile ?>" style="width:100px;height:100px;"></td>
   	 	 	 			     <td><a href="edit.php?eid=<?= $row->id ?>">Edit</a>|<a onclick="return confirm('Are you sure?')" href="index.php?did=<?= $row->id ?>">Delete</a></td>
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