<h2>Datos del formulario</h2>
<h3>Alumno: <?= $datos['nombre'] ?></h3>

<ul>
    <li>Apellidos: <?= $datos['apellidos'] ?></li>
    <li>Fecha de nacimiento: <?= $datos['fechaNac'] ?></li>
    <li>Correo: <?= $datos['correo'] ?></li>
    <li>Lenguajes: 
        <ul>
            <?php foreach($datos['lenguajes'] as $lenguaje):?>
                <li><?= $lenguaje ?></li>
            <?php endforeach;?>
        </ul>
    </li>
    <li>¿Sabe crear páginas web estáticas? <?= $datos['crearEstaticas'] ?></li>
    <li>Comentarios: <?= $datos['comentarios'] ?></li>
    <li>Contraseña: <?= $datos['contrasena'] ?></li>
</ul>

<a href="index.php"><button>Volver al formulario</button></a>