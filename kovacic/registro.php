<?php
//Eurocopa
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password= $_POST['password'];
	$reppassword=$_POST['reppassword'];

	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
	$check_mail=mysql_num_rows($checkemail);
		if($password==$reppassword){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO usuarios VALUES('','$username','$password','$email','')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>