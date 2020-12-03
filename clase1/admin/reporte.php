<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 de Ing. Web</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <?php
        include("seguridad/seguridad.php");
        $listaRol[1]="Administrador<br>";
        $listaRol[2]="Editor";        
    ?>
</head>
<body>
    <header class="cabeceraPrincipal">
        <img class="anime" src="../images/clei-logo.png" alt="Logotipo del evento">
        <h1>V Conferencia de desarrollo de software UTPL 2021</h1>
        <h4><?php echo "Bienvenido: ".$_SESSION['nombresUser'];
		echo "<br>Usted es un ".$listaRol[$_SESSION['rolUser']];
		echo "<br>"?></h4>
    </header>
    <nav class="menuPrincipal">
   
    <?php        
        if ($_SESSION['rolUser']==2) {
            echo "<a href='index.php'>Inicio</a>";
            echo "<a href='#'>Usuarios</a>";           
            echo "<a href='seguridad/salir.php?salir=true'>Cerrar sesion</a>";
        }
        if ($_SESSION['rolUser']==1) {
            echo "<a href='index.php'>Inicio</a>";
            echo "<a href='reporte.php'>Reportes</a>"; 
            echo "<a href='usuarios.php'>Usuarios</a>";                 
            echo "<a href='seguridad/salir.php?salir=true'>Cerrar sesion</a>";
        }                
       
    ?>   
    </nav>    
    <main>
    <link rel="stylesheet" href="../css/estilos.css">
        <section class="titleHeader">
            <h2 class="titleHeader">Personas Inscritas al evento</h2>
		</section>
		<div class = "reporte">     

   		 </div>
	</main>
	<div class = "tablaUsuario">
		<?php
			$miconexion = new clase_mysqli7;
			$miconexion ->conectar(DBHOST, DBUSER,DBPASS, DBNAME);
			$miconexion -> consulta("select * from inscritos");
			$miconexion -> verconsulta();
        ?>
	</div>
  
    <footer class="footer-distributed">
        <div class="footer-left">
            <img src="../images/logo-utpl.png">
            <h3>CLEI <span>Loja -Ecuador</span></h3>

            <p class="footer-links">
                <a href="../index.html">Inicio</a> |
                <a href="../internas/ponentes.html">Ponentes</a> |
                <a href="../internas/tarifas.html">Tarifas</a> |
                <a href="../internas/contactos.html">Contáctos</a>
            </p>
        </div>
        <div class="footer-center">
            <p>Derechos Reservados UTPL 2020 by: @davisalex22</p>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>XLVI CONFERENCIA LATINOAMERICANA DE INFORMÁTICA</span> Ingeniería de Software | Informática y Sociedad | Procesos de Negocio, Arquitecturas y Sistemas Organizacionales | Infraestructura, Hardware y Software | Educación Superior en
                Computación
            </p>
        </div>
    </footer>
</body>
</html>