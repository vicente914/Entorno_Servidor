<!-- Enlazamos el CSS (asegúrate de que la ruta sea correcta) -->
<link rel="stylesheet" href="assets/styles/style.css">

<div class="login-container">
    <h2>Iniciar Sesión</h2>

    <form action="index.php?action=procesar" method="POST">
        <p>
            <label for="nombre">Nombre de usuario:</label>
            <input type="text" id="nombre" name="usuario[nombre]" value="<?= htmlspecialchars($usuario->nombre ?? '') ?>">
            
            <?php if(isset($errores['nombre'])): ?>
                <span class="error"><?= htmlspecialchars($errores['nombre']) ?></span>
            <?php endif; ?>
        </p>

        <p>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="usuario[contrasena]" value="" placeholder="Mín. 8 caracteres, 1 mayúscula y 1 número">
            
            <?php if(isset($errores['contrasena'])): ?>
                <span class="error"><?= htmlspecialchars($errores['contrasena']) ?></span>
            <?php endif; ?>
        </p>

        <button type="submit">Iniciar sesión</button>
    </form>
</div>