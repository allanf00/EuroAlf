<?php
    //Inicializar la sesión
    session_start();
    //Reseteamos los datos de la sesión
    $_SESSION = array();
    //Sesión inválida de cookies
    if(isset($_COOKIE[session_name()])) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', 1, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));
    }
    
    session_destroy(); //Destruimos la sesión SIIIIIIIIIUUUUUUUUU
    header('Location: index.php');
?>