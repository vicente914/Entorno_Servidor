<h2>Detalles del libro <?= $libro->getTitulo() ?></h2>

<ul>
    <li><strong>Año de publicacion: </strong><?= $libro->getAnio() ?></li>

    <li>
        <strong>Estado: </strong>
        <?= $libro->getDisponible() ? 'Disponible' : 'No disponible' ?>
    </li>

    <li>
        <strong>Autor: </strong>
        <?= $autor->getNombre() ?>
    </li>
</ul>