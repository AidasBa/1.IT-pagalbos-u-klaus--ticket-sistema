<?php
require 'config.php';

$id = $_GET['id'];

if(isset($_POST['update']))
{
    $pavadinimas = $_POST['pavadinimas'];
    $aprasymas = $_POST['aprasymas'];
    $prioritetas = $_POST['prioritetas'];

    $sql = "UPDATE tickets
            SET
            pavadinimas='$pavadinimas',
            aprasymas='$aprasymas',
            prioritetas='$prioritetas'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: dashboard.php");
    exit();
}



$result = $conn->query("SELECT * FROM tickets WHERE id=$id");
$ticket = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Redaguoti užklausą</title>

<link rel="stylesheet" href="../assets/style.css">

</head>
<body>

<h1>Redaguoti užklausą</h1>

<form method="POST">

    <input
        type="text"
        name="pavadinimas"
        value="<?= $ticket['pavadinimas']; ?>"
        required>

    <br><br>

    <textarea
        name="aprasymas"
        required><?= $ticket['aprasymas']; ?></textarea>

    <br><br>

    <select name="prioritetas">
        <option value="zemas">Žemas</option>
        <option value="vidutinis">Vidutinis</option>
        <option value="aukstas">Aukštas</option>
    </select>

    <br><br>

    <button type="submit" name="update">
        Išsaugoti
    </button>

</form>

</body>
</html>
