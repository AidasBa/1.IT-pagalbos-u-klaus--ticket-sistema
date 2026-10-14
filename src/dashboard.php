<?php
require 'config.php';

$sql = "SELECT * FROM tickets ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>IT pagalbos užklausos</title>
</head>
<body>

<h1>IT pagalbos užklausos</h1>

<p>
    <a href="create.php">Sukurti naują užklausą</a>
</p>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Aprašymas</th>
        <th>Prioritetas</th>
        <th>Būsena</th>
        <th>Veiksmai</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>

    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['pavadinimas']; ?></td>
        <td><?= $row['aprasymas']; ?></td>
        <td><?= $row['prioritetas']; ?></td>
        <td><?= $row['busena']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Redaguoti</a>
            |
            <a href="delete.php?id=<?= $row['id']; ?>">Šalinti</a>
        </td>
    </tr>

    <?php } ?>

</table>

</body>
</html>