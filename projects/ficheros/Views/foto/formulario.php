<h1>Subida de archivos con PHP</h1>

<form action="index.php?controller=Foto&action=procesar" enctype="multipart/form-data" method="POST">
    <input type="file" name="foto" id="foto" accept="image/*">
    <button type="submit">Enviar</button>
</form>

<?php if (isset($errores['foto'])): ?>
    <p style="color:red"><?= htmlspecialchars($errores['foto']) ?></p>
<?php endif; ?>

<?php if (!empty($exito)): ?>
    <p style="color:green"><?= htmlspecialchars($exito) ?></p>
<?php endif; ?>

<h1>Listado de imágenes</h1>

<?php foreach ($fotos as $foto): ?>
    <p><img src="<?= htmlspecialchars($foto->getUrl()) ?>" alt="<?= htmlspecialchars($foto->getNombre()) ?>" width="300"></p>
<?php endforeach; ?>
