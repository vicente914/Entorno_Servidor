<h1>Alta alumno:</h1>

<form action="index.php?action=procesar" method="POST">
    <p>
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
    </p>

    <p>
        <label for="apellidos">Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos">
    </p>
    
    <p>
        <label for="fechaNac">Fecha de nacimiento</label>
        <input type="date" id="fechaNac" name="fechaNac">
    </p>

    <p>
        <label for="correo">Correo Electrónico: </label>
        <input type="email" id="correo" name="correo">
    </p>

    <p>
        <label for="lenguajes[]">¿Que lenguajes de programación conoces?</label>
        <input type="checkbox" name="lenguajes[]" value="C++" >C++
        <input type="checkbox" name="lenguajes[]" value="JavaScript">JavaScript
        <input type="checkbox" name="lenguajes[]" value="PHP">PHP
        <input type="checkbox" name="lenguajes[]" value="Phyton">Phyton
    </p>

    <p>
        <label for="crearEstaticas">¿Sabes crear páginas web estáticas?</label>
        <input type="radio" name="crearEstaticas" value="si" checked>Si
        <input type="radio" name="crearEstaticas" value="no">No
    </p>

    <p>
        <label for="comentarios">Comentarios:</label>
        <textarea name="comentarios" rows="4" columns="30"></textarea>
    </p>

    <p>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="cont1" required>
    </p>

    <p>
        <label for="contrasena">Repita la contraseña:</label>
        <input type="password" name="contrasena" id="cont2" required>
    </p>

    <button type="submit">Enviar datos</button>
</form>