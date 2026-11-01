<h2>Lista de libros</h2>

<ul>
    <?php foreach($datos as $dato): ?>
        <li>
            <?= $dato['libro']->getTitulo() ?> --> Autor:    
            <?= $dato['autor']->getNombre() ?>
        </li>
    <?php endforeach; ?>
</ul>