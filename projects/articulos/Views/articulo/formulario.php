<h2>Buscar artículo</h2>

<?php require __DIR__ . '/_form.php'; ?>

<?php if (!empty($error)): ?>
    <p style="color:red"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
