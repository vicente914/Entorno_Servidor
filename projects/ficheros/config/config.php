<?php
// Controlador y acción que se ejecutan si la URL no indica ninguno
define('CONTROLLER_DEFAULT', 'Foto');
define('ACTION_DEFAULT', 'formulario');

// Carpeta física donde se guardan las imágenes (para PHP: move_uploaded_file, scandir...)
define('IMAGES_DIR', __DIR__ . '/../public/images/');
// Ruta que usa el navegador para pedir las imágenes (para el <img src="...">)
define('IMAGES_URL', 'images/');
