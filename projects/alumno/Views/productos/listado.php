<h1>Listado de productos</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Precio con IVA</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($productos as $producto): ?>
        <tr>
            <td><?= $producto->getNombre() ?></td>
            <td><?= $producto->getPrecio() ?>€</td>
            <td><?= $producto->getPrecioConIva() ?>€</td>
            <td>
                <?php if($producto->getStock() === 0): ?>
                    <?= "Stock agotado" ?>
                <?php else:?>
                    <?= $producto->getStock() ?>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p>Total de productos: <?= $totalProductos ?></p>
<p>Valor total del inventario: <?= $valorInventario ?></p>