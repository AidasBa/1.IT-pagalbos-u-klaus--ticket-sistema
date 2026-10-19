<?php
require 'config.php';

if(isset($_POST['submit']))
{
    $pavadinimas = $_POST['pavadinimas'];
    $aprasymas = $_POST['aprasymas'];
    $prioritetas = $_POST['prioritetas'];
    $assigned_to = (int)($_POST['assigned_to'] ?? 0);

 
    // VT-1
    if($prioritetas == "aukstas" && empty($assigned_to))
    {
        die("Aukšto prioriteto užklausa privalo turėti priskirtą specialistą.");
    }

    
    if(!empty($assigned_to) && $assigned_to != 1)
    {
        die("Toks specialistas neegzistuoja.");
    }

    if($assigned_to == 0)
{
    $assigned_to = "NULL";
}

    // VT-2
    if(strlen(trim($aprasymas)) < 5)
    {
        die("Aprašymas turi būti bent 5 simbolių ilgio.");
    }

    $sql = "INSERT INTO tickets
    (pavadinimas, aprasymas, prioritetas, user_id, assigned_to, busena)
    VALUES
    ('$pavadinimas', '$aprasymas', '$prioritetas', 1, $assigned_to, 'naujas')";

    $conn->query($sql);

    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Nauja užklausa</title>

    <link rel="stylesheet" href="../assets/style.css">

</head>
<body>

<h1>Sukurti užklausą</h1>

<form method="POST">

    <input
        type="text"
        name="pavadinimas"
        placeholder="Pavadinimas"
        required>

    <br><br>

    <textarea
        name="aprasymas"
        placeholder="Aprašymas"
        required></textarea>

    <br><br>

    <select name="prioritetas">
        <option value="zemas">Žemas</option>
        <option value="vidutinis">Vidutinis</option>
        <option value="aukstas">Aukštas</option>
    </select>

    <br><br>

    <label>
        Priskirti specialistą:
    </label>

    <br><br>

    <select name="assigned_to">

        <option value="">
            Nepasirinkta
        </option>

        <option value="1">
            Specialistas
        </option>

    </select>

    <br><br>

    <button type="submit" name="submit">
        Kurti
    </button>

</form>

<br>

<p>
    <a href="dashboard.php">
        Grįžti į užklausų sąrašą
    </a>
</p>

</body>
</html>