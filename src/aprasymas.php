<?php
session_start();
require 'config.php';

$id = $_GET['id'];

if(isset($_POST['komentaras']))
{
    $komentaras = $_POST['komentaras'];
    $role = $_SESSION['role'];

    $sql = "INSERT INTO comments
            (tekstas, ticket_id, user_id, role)
            VALUES
            ('$komentaras', '$id', 1, '$role')";

    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM tickets WHERE id = $id");
$ticket = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Užklausos aprašymas</title>

<link rel="stylesheet" href="../assets/style.css">

</head>
<body>

<p>
    <a href="dashboard.php">
        Grįžti į užklausų sąrašą
    </a>
</p>


<h1><?= $ticket['pavadinimas']; ?></h1>

<p>
    <strong>Būsena:</strong>
    <?= $ticket['busena']; ?>
</p>

<hr>

<h3>Problemos aprašymas</h3>

<p>
    <?= $ticket['aprasymas']; ?>
</p>

<hr>

<h3>Komentarai</h3>

<form method="POST">

    <textarea
        name="komentaras"
        placeholder="Rašykite komentarą..."
        required>
    </textarea>

    <br><br>

    <button type="submit">
        Siųsti komentarą
    </button>

</form>

<?php

$comments = $conn->query("
SELECT *
FROM comments
WHERE ticket_id = $id
ORDER BY id DESC
");

while($comment = $comments->fetch_assoc())
{
?>

<hr>

<p>
    <strong>
        <?= ucfirst($comment['role']); ?>
    </strong>
</p>

<p>
    <?= $comment['tekstas']; ?>
</p>

<?php
}
?>

</body>
</html>