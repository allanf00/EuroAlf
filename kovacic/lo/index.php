<?PHP
    session_start();
?>
//SERVER nginx buscar para posible traslado de Apache a Nginx
<html>
    <head>
        <title>INSO II: Euro 2016</title>
        <meta name="description" content="Practica Ingenieria del Software II Web Euro 2016" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>

<body>
    <div id="wrapper">
        <header>
            <div id="logo">
                <div id="logo_text">
                    <h1><a href="index.php">Eurocopa 2016</a></h1>
                    <h2>Alfonso-Dani-Javier</h2>
                </div>
            </div>
        <nav>
            <div id="menu_container">
                <ul class="sf-menu" id="nav">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="php/noticias.php">Noticias</a></li>
                    <li><a href="php/contacto">Contacto</a></li>

                    <?php if (isset($_SESSION['usuario'])){
                        echo "<li><a href=''><span class='green'><strong>$user</strong></span></a><li>";
                        }else{
                            echo "<li><a href='Registro.html'></a></li>";
                        }
                    ?>

                </ul>
            </div>
        </nav>
    </header>

    <div id="site_content">
        <div id="sidebar_container">
            <div class="sidebar">
            <?php if (!isset($_SESSION['usuario'])){
                echo "<h3>Inicio de sesi&oacute;n</h3>";
                echo    "<FORM NAME='green' action='login.php' method='POST'>";
                echo        "<p><strong>Usuario</strong><br/>";
                echo        "<input type='text' name='usuario' size='15' maxlength='30' /></p>";
                echo        "<p><strong>Contraseña</strong><br/>";
                echo        "<input type='password' name='password' size='15' maxlength='30' /></p>";
                echo    "<INPUT type='submit' value='Enviar' />&nbsp;&nbsp;";
                echo    "<INPUT type='reset' value='Eliminar' />";
                echo    "</FORM>";
                echo    "<br/>";
                
                if(isset($_GET["user"])){
                    echo "<p class='Error'>Usuario o contraseña incorrectos</p>";
                }
                echo "<p><h href='#'>Has olvidado la contraseña? </a></p>";
            }else if (isset($_SESSION['usuario'])){
               
                echo "<br/><p><h3>Bienvenido, <span class='green'><strong>$user</strong></span></p>";
                echo "<a href='Logout.php'>Desconectar</p>";
            }
            ?>
            </div>
            <div class="sidebar">
                <h3>Últimas Noticias</h3>
                <h4>Ampliacíon de información</h4>
                <h5>30 de Abril, 2016</h5>
                <p>Benzema no jugar&aacute; la Eurocopa 2016. <a href="php/noticias.php">Leer m&aacute;s...</a></p>
            </div>
            <div class="sidebar">
                <h3>Men&uacute;</h3>
                <ul>
                    <li><a href="Grupos.php">Grupos</a></li>
                    <li><a href="Selecciones.php">Seleciones</a></li>
                    <li><a href="Jugadores.php">Jugadores</a></li>
                    <li><a href="Calendario.php">Calendario</a></li>
                </ul>
            </div>
        </div>

    <div class="content">
        <h1>Bienvenido a Eurocopa 2016</h1>
        <p>
            Esta es una aplicación web para la práctica de Ingenieria del Software II de Grado en Ingenier&iacute;a Inform&aacute;tica de la <a href="http://www.unileon.es">Universidad de Le&oacute;n</a>. En esta aplicación podrás realizar consultar e informarte de todo el torneo de fútbol. Podrás ver al aplicación sin problemas ya que será pública, pero para una mejor interacción y poder saber todo lo que sucederá en el tornio deberás primero ser un mienbro registrado de la aplicación.
        </p>
        <p>
            Si todavía no eres un mienbro de la aplicación, puedes hacerlo en la sección de la izquierda o pulsando en este enlace de <a href="php/Registro.php">registro de usuarios nuevos.</a>
        </p>
        <h2>Últimos ganadores del torneo</h2>
        <p>Estos son los úlitmos ganadores del torneo.</p>
        <div id="selecciones-ultimos-ganadores">
            <img src="imagenes/seleciones/nombreSeleccion.png" alt="">
            <img src="imagenes/seleciones/nombreSeleccion.png" alt="">
            <img src="imagenes/seleciones/nombreSeleccion.png" alt="">
            <img src="imagenes/seleciones/nombreSeleccion.png" alt="">
            <img src="imagenes/seleciones/nombreSeleccion.png" alt="">
        </div>
    </div>
    </div>
    <div id="scroll">
        <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
    <footer>
    <p><img src="images/twitter.png" alt="twitter" />&nbsp;<img src="images/facebook.png" alt="facebook" />&nbsp;<img src="images/rss.png" alt="rss" /></p>
    <p><a class="active" href="index.php">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.php">Contact Us</a></p>
    <p>Copyright &copy; | Design by Alfonso - Dani - Javier</p>
    </footer>
    </div>
</body>
</html>