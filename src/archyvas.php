<?php

session_start();

if(!isset($_SESSION['role']))
{
    header("Location: login.php");
    exit();
}

if($_SESSION['role'] != 'specialistas')
{
    header("Location: dashboard.php");
    exit();
}

require 'config.php';

$sql = "
    SELECT *
    FROM tickets
    WHERE busena = 'uzbaigtas'
    ORDER BY id DESC
";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Archyvas</title>

    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h1>Užbaigtų užklausų archyvas</h1>

<p>
    <a href="dashboard.php">Grįžti atgal</a>
</p>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Prioritetas</th>
        <th>Būsena</th>
        <th>Aprašymas</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>

    <tr>

        <td><?= $row['id']; ?></td>

        <td><?= htmlspecialchars($row['pavadinimas']); ?></td>

        <td><?= $row['prioritetas']; ?></td>

        <td><?= $row['busena']; ?></td>

        <td>
            <a href="aprasymas.php?id=<?= $row['id']; ?>">
                Peržiūrėti
            </a>
        </td>

    </tr>

    <?php } ?>

</table>

</body>
</html>