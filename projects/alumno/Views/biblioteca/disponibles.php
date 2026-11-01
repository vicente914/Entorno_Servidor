<h2>Libros disponibles</h2>

<ul>
    <?php foreach($datos as $dato): ?>
        <li>
            <strong>Titulo: </strong><?= $dato['libro']->getTitulo() ?>
            <strong>Autor: </strong><?= $dato['autor']->getNombre() ?>
        </li>
    <?php endforeach; ?>
</ul>