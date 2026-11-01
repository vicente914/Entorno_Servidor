<h2>Ficha del autor</h2>
<h3><?= $autor->getNombre() ?></h3>

<h3>Libros del autor</h3>

<ul>
    <?php foreach($libros as $libro): ?>
        <li>
            <strong>Titulo: </strong>
            <?= $libro->getTitulo() ?>
        </li>
    <?php endforeach ?>

</ul>
