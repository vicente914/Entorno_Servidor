<form action="index.php" method="GET">
    <input type="hidden" name="controller" value="articulo">
    <input type="hidden" name="action" value="buscar">

    <label for="id">Identificador del artículo:</label>
    <input type="text" name="id" id="id" value="<?= htmlspecialchars($valor ?? '') ?>">
    <button type="submit">Buscar</button>
</form>
