<?php
require 'config.php';

if(isset($_POST['submit']))
{
    $pavadinimas = $_POST['pavadinimas'];
    $aprasymas = $_POST['aprasymas'];
    $prioritetas = $_POST['prioritetas'];
    $assigned_to = $_POST['assigned_to'];


    if($prioritetas == "aukstas" && empty($assigned_to))
    {
        die("Aukšto prioriteto užklausa privalo turėti priskirtą darbuotoją.");
    }

    if(strlen(trim($aprasymas)) < 5)
    {
        die("Aprašymas turi būti bent 5 simbolių ilgio.");
    }

    $sql = "INSERT INTO tickets
    (pavadinimas, aprasymas, prioritetas, assigned_to, busena)
    VALUES
    ('$pavadinimas', '$aprasymas', '$prioritetas', '$assigned_to', 'naujas')";

    $conn->query($sql);

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nauja užklausa</title>
</head>
<body>

<h1>Sukurti užklausą</h1>

<form method="POST">

    <input type="text"
           name="pavadinimas"
           placeholder="Pavadinimas"
           required>

    <br><br>

    <textarea
        name="aprasymas"
        placeholder="Aprašymas"
        required>
    </textarea>

    <br><br>

    <select name="prioritetas">
        <option value="zemas">Žemas</option>
        <option value="vidutinis">Vidutinis</option>
        <option value="aukstas">Aukštas</option>
    </select>

    <br><br>

    <input type="number"
           name="assigned_to"
           placeholder="Darbuotojo ID">

    <br><br>

    <button type="submit" name="submit">
        Kurti
    </button>

</form>

</body>
</html>