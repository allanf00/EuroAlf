
<?php
//Eurocopa
session_start();
	require("connect_db.php");

	$password=$_POST['password'];
	$username=$_POST['email'];


	$sql2=mysql_query("SELECT * FROM usuarios WHERE email='$username'");
	if($f2=mysql_fetch_array($sql2)){
		if($password==$f2['passwordadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['usuario']=$f2['usuario'];
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='interfazadministrador.php'</script>";
		
		}
	}


	$sql=mysql_query("SELECT * FROM usuarios WHERE email='$username'");
	if($f=mysql_fetch_array($sql)){
		if($password==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['usuario']=$f['usuario'];
			header("Location: interfazusuario.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>