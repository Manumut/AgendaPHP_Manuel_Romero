<?php
require_once('cabecera.html');
?>
    <header>
        <h1>AGENDA PERSONAL</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">Accede</a>
        </nav>
    </header>

    
    <section>
        <div class="form-ini">
            <h2>Inicia Sesión</h2>
            <form action="../Controlador/index.php" method="POST">
                <input type="hidden" name="accion" value="inicio">

                <label for="user">Nombre</label>
                <input type="text" name="user" value=<?php if(isset($_COOKIE["usuario"])) echo $_COOKIE["usuario"]; ?> > <!--En este input se almacena el nombre introducido en la cookie    -->
                <br>
                <label for="psw">Contraseña</label>
                <input type="password" name="psw">
                <br>
                
                <label >
                    <input type="checkbox" name="recuerdame" <?php if (isset($_COOKIE["usuario"])) echo "checked";?> >
                    Recuerdame
                </label>
                <br>
                <input type="submit" value="Enviar" name="enviar">
            </form>
        </div>
    </section>


    
    
<?php
    require_once('footer.html');
?>