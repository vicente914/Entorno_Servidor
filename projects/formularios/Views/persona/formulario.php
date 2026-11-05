<link rel="stylesheet" href="assets/styles/style.css">
 
<div class="login-container">
    <h1>Candidatura persona:</h1>
 
    <form action="index.php?action=procesar" method="POST">
        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="persona[nombre]" value="<?= htmlspecialchars($persona->nombre ?? '') ?>">
 
            <?php if (isset($errores['nombre'])): ?>
                <span class="error"><?= htmlspecialchars($errores['nombre']) ?></span>
            <?php endif; ?>
        </p>
 
        <p>
            <label for="apellidos">Apellidos: </label>
            <input type="text" id="apellidos" name="persona[apellidos]" value="<?= htmlspecialchars($persona->apellidos ?? '') ?>">
 
            <?php if (isset($errores['apellidos'])): ?>
                <span class="error"><?= htmlspecialchars($errores['apellidos']) ?></span>
            <?php endif; ?>
        </p>
 
        <p>
            <label for="correo">Correo Electrónico: </label>
            <input type="email" id="correo" name="persona[correo]" value="<?= htmlspecialchars($persona->correo ?? '') ?>">
 
            <?php if (isset($errores['correo'])): ?>
                <span class="error"><?= htmlspecialchars($errores['correo']) ?></span>
            <?php endif; ?>
        </p>
 
        <p>
            <label for="telefono">Número de teléfono:</label>
            <input type="text" id="telefono" name="persona[telefono]" value="<?= htmlspecialchars($persona->telefono ?? '') ?>">
 
            <?php if (isset($errores['telefono'])): ?>
                <span class="error"><?= htmlspecialchars($errores['telefono']) ?></span>
            <?php endif; ?>
        </p>
 
        <p>
            <span>¿Cuál es tu situación laboral?</span>
            <label>
                <input type="radio" name="persona[situacionLaboral]" value="sin_empleo"
                    <?= $persona->situacionLaboral === 'sin_empleo' ? 'checked' : '' ?>> Sin empleo
            </label>
            <label>
                <input type="radio" name="persona[situacionLaboral]" value="media_jornada"
                    <?= $persona->situacionLaboral === 'media_jornada' ? 'checked' : '' ?>> Media jornada
            </label>
            <label>
                <input type="radio" name="persona[situacionLaboral]" value="tiempo_completo"
                    <?= $persona->situacionLaboral === 'tiempo_completo' ? 'checked' : '' ?>> Tiempo completo
            </label>
 
            <?php if (isset($errores['situacionLaboral'])): ?>
                <span class="error"><?= htmlspecialchars($errores['situacionLaboral']) ?></span>
            <?php endif; ?>
        </p>
 
        <p>
            <span>¿Qué lenguajes de programación conoces?</span>
            <?php foreach (['C++', 'JavaScript', 'PHP', 'Python', 'Java'] as $lenguaje): ?>
                <label>
                    <input type="checkbox" name="persona[lenguajes][]" value="<?= htmlspecialchars($lenguaje) ?>"
                        <?= in_array($lenguaje, $persona->lenguajes, true) ? 'checked' : '' ?>>
                    <?= htmlspecialchars($lenguaje) ?>
                </label>
            <?php endforeach; ?>
 
            <?php if (isset($errores['lenguajes'])): ?>
                <span class="error"><?= htmlspecialchars($errores['lenguajes']) ?></span>
            <?php endif; ?>
        </p>
 
        <p>
            <label for="url">URL para consultar trabajos anteriores suyos:</label>
            <input type="url" id="url" name="persona[url]" value="<?= htmlspecialchars($persona->url ?? '') ?>" required>
 
            <?php if (isset($errores['url'])): ?>
                <span class="error"><?= htmlspecialchars($errores['url']) ?></span>
            <?php endif; ?>
        </p>
 
        <button type="submit">Enviar datos</button>
    </form>
</div>