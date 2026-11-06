<h2>Artículo encontrado</h2>

<ul>
    <li><strong>ID:</strong> <?= htmlspecialchars((string) $articulo->getId()) ?></li>
    <li><strong>Nombre:</strong> <?= htmlspecialchars($articulo->getNombre()) ?></li>
    <li><strong>Descripción:</strong> <?= htmlspecialchars($articulo->getDescripcion()) ?></li>
    <li><strong>Precio:</strong> <?= htmlspecialchars(number_format($articulo->getPrecio(), 2, ',', '.')) ?> €</li>
</ul>

<h3>Nueva búsqueda</h3>
<?php require __DIR__ . '/_form.php'; ?>
