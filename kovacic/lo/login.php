<?php
    session_start();
    
    $mysqli = mysqli_connect("localhost", "root", "", "kovacic");
    
    if($mysqli) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password = '$password'";
        $result = $mysqli->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            $_SESSION['id']=$row["id"];
            
            if($tipo=='admin') {
                $_SESSION['admin']=$tipo;
                header('Location: interfazadministrador.php');
            }else{
                $_SESSION['usuario']=$tipo;
                header('Location: interfazusuario.php');
            }
        }else{
            header('Location: index.php?user=error');
        }
        
        mysqli_close($mysqli);
    }else{
        echo "No se ha podido realizar la conexión a la base de datos.<br />";
    }
?>