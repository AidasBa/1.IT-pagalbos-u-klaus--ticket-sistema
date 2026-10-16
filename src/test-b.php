<?php

require 'config.php';

$paieska = $_GET['paieska'] ?? '';

$pradzia = microtime(true);

$sql = "
SELECT *
FROM tickets
WHERE pavadinimas LIKE '%$paieska%'
";

$result = $conn->query($sql);

$laikas_ms = (microtime(true) - $pradzia) * 1000;

?>

<h2>Versija B (WHERE SQL)</h2>

<p>
Laikas: <strong><?= round($laikas_ms, 2); ?> ms</strong>
</p>

<form method="GET">
    <input type="text" name="paieska">
    <button type="submit">Ieškoti</button>
</form>

<hr>

<?php while($row = $result->fetch_assoc()) { ?>
    <?= $row['pavadinimas']; ?><br>
<?php } ?>