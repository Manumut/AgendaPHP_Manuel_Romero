<?php
require_once("../Vista/cabecera.html");
?>
    <header id="">
        <h1>AGENDA PERSONAL</h1>
        <nav>
            <a href="../Vista/iniAmig.php">Amigos</a>
            <a href="../Vista/iniJuegos.php">Juegos</a>
            <a href="../Vista/iniPrestamos.php">Prestamos</a>
            <a href="../Vista/login.php">Salir</a>
        </nav>
        <div>
            <a href="../Vista/masJuego.php">Insertar Juegos</a>
            <a href="../Vista/buscJuego.php">Buscar Juegos</a>
        </div>
    </header> 

    <main id="buscadores">
        <div class="form-busc">
            <h1>BUSCAR JUEGOS</h1>
            <form action="../Controlador/index.php" method="POST">
                <label for="busqueda">Titulo del juego / Plataforma</label>
                <input type="text" id="busqueda" name="busqueda" required>
                <button type="submit">Buscar</button>
            </form>

            <?php if (!empty($resultados)): ?>
                <h2>Resultados</h2>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                    </tr>
                    <?php foreach ($resultados as $amigo): ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <p>No se encontraron resultados.</p>
            <?php endif; ?>
        </div>
    </main>



<?php
require_once("../Vista/footer.html");
?>