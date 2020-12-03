<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 de Ing. Web</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header class="cabeceraPrincipal">
        <img class="anime" src="../images/clei-logo.png" alt="Logotipo del evento">
        <h1>V Conferencia de desarrollo de software UTPL 2021</h1>
    </header>
    <nav class="menuPrincipal">
        <a href="../index.html">Inicio</a>
        <a href="../internas/ponentes.html">Ponentes</a>
        <a href="../internas/campus.html">Campus</a>
        <a href="../internas/tarifas.html">Tarifas</a>
        <a href="registro.php">Registro</a>
        <a href="../internas/contactos.html">Contáctos</a>
    </nav>
    <main>
    <section class="titleHeader">
            <h2 class="titleHeader">Acceso a la Administración</h2>
        </section>
        <form method="post" action="validar.php">
             <div class="grupo">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario">
            </div>
             <div class="grupo">
                <label for="clave">Clave</label>
                <input type="password" id="clave" name="clave" placeholder="Ingrese su clave">
            </div>
            <button type="submit" class="btnIngresar">Ingresar</button>
        </form>
    </main>
  
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