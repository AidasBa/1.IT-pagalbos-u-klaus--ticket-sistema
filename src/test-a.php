<?php

require 'config.php';

$paieska = $_GET['paieska'] ?? '';

$pradzia = microtime(true);

$sql = "SELECT * FROM tickets";
$result = $conn->query($sql);

$rasta = [];

while($row = $result->fetch_assoc())
{
    if(stripos($row['pavadinimas'], $paieska) !== false)
    {
        $rasta[] = $row;
    }
}

$laikas_ms = (microtime(true) - $pradzia) * 1000;

?>

<h2>Versija A (PHP filtravimas)</h2>

<p>
Laikas: <strong><?= round($laikas_ms, 2); ?> ms</strong>
</p>

<form method="GET">
    <input type="text" name="paieska">
    <button type="submit">Ieškoti</button>
</form>

<hr>

<?php foreach($rasta as $row) { ?>
    <?= $row['pavadinimas']; ?><br>
<?php } ?>