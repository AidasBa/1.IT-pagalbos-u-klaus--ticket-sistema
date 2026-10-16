<?php

session_start();

if(!isset($_SESSION['role']))
{
    header("Location: login.php");
    exit();
}

require 'config.php';

$paieska = $_GET['paieska'] ?? '';
$prioritetas = $_GET['prioritetas'] ?? '';
$rikiavimas = $_GET['rikiavimas'] ?? 'desc';
$limit = $_GET['limit'] ?? 20;

if($rikiavimas != 'asc')
{
    $rikiavimas = 'desc';
}

$sql = "SELECT * FROM tickets WHERE 1=1";

if($_SESSION['role'] == 'specialistas')
{
    $sql .= " AND busena != 'uzbaigtas'";
}

if($paieska != '')
{
    $sql .= " AND pavadinimas LIKE '%$paieska%'";
}

if($prioritetas != '')
{
    $sql .= " AND prioritetas = '$prioritetas'";
}

$sql .= " ORDER BY id $rikiavimas LIMIT $limit";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>IT pagalbos užklausos</title>

    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h1>IT pagalbos užklausos</h1>

<p>
Prisijungta kaip:
<strong><?= $_SESSION['role']; ?></strong>

<a href="logout.php">
    Atsijungti
</a>
</p>

<form method="GET">

    <input
        type="text"
        name="paieska"
        placeholder="Ieškoti pagal pavadinimą"
        value="<?= htmlspecialchars($paieska); ?>">

    <select name="prioritetas">

        <option value="">Visi prioritetai</option>

        <option value="zemas" <?= $prioritetas == 'zemas' ? 'selected' : ''; ?>>
            Žemas
        </option>

        <option value="vidutinis" <?= $prioritetas == 'vidutinis' ? 'selected' : ''; ?>>
            Vidutinis
        </option>

        <option value="aukstas" <?= $prioritetas == 'aukstas' ? 'selected' : ''; ?>>
            Aukštas
        </option>

    </select>

    <select name="rikiavimas">

        <option value="desc" <?= $rikiavimas == 'desc' ? 'selected' : ''; ?>>
            Naujausi (ID)
        </option>

        <option value="asc" <?= $rikiavimas == 'asc' ? 'selected' : ''; ?>>
            Seniausi (ID)
        </option>

    </select>

    <input type="hidden" name="limit" value="20">

    <button type="submit">
        Filtruoti
    </button>

</form>

<br>

<p>
    <a href="create.php">Sukurti naują užklausą</a>

    <?php if($_SESSION['role'] == 'specialistas') { ?>
        |
        <a href="archyvas.php">Archyvas</a>
    <?php } ?>
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

        <td><?= htmlspecialchars($row['pavadinimas']); ?></td>

        <td>
            <a href="aprasymas.php?id=<?= $row['id']; ?>">
                Peržiūrėti problemą
            </a>
        </td>

        <td><?= $row['prioritetas']; ?></td>

        <td>

        <?php if($_SESSION['role'] == 'specialistas') { ?>

        <form method="POST" action="status.php">

            <input
                type="hidden"
                name="id"
                value="<?= $row['id']; ?>">

            <select name="busena">

                <option value="naujas"
                    <?= $row['busena'] == 'naujas' ? 'selected' : ''; ?>>
                    Naujas
                </option>

                <option value="vykdomas"
                    <?= $row['busena'] == 'vykdomas' ? 'selected' : ''; ?>>
                    Vykdomas
                </option>

                <option value="uzbaigtas"
                    <?= $row['busena'] == 'uzbaigtas' ? 'selected' : ''; ?>>
                    Užbaigtas
                </option>

            </select>

            <button type="submit">
                Keisti
            </button>

        </form>

        <?php } else { ?>

            <?= $row['busena']; ?>

        <?php } ?>

        </td>

        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">
                Redaguoti
            </a>
            |
            <a href="delete.php?id=<?= $row['id']; ?>">
                Šalinti
            </a>
        </td>

    </tr>

    <?php } ?>

</table>

<br><br>

<div id="loadmore"></div>

<?php

if($limit == 20)
{
    $nextLimit = 100;
}
else
{
    $nextLimit = $limit + 100;
}

?>

<form method="GET">

    <input
        type="hidden"
        name="paieska"
        value="<?= htmlspecialchars($paieska); ?>">

    <input
        type="hidden"
        name="prioritetas"
        value="<?= $prioritetas; ?>">

    <input
        type="hidden"
        name="rikiavimas"
        value="<?= $rikiavimas; ?>">

    <input
        type="hidden"
        name="limit"
        value="<?= $nextLimit; ?>">

    <input
        type="hidden"
        name="scroll"
        value="1">

    <button type="submit">
        Užkrauti daugiau
    </button>

</form>

<?php if(isset($_GET['scroll']) && $_GET['scroll'] == 1) { ?>
<script>
document.getElementById('loadmore').scrollIntoView();
</script>
<?php } ?>

</body>
</html>