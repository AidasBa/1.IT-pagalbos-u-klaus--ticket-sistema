<?php
session_start();

if(isset($_POST['role']))
{
    $_SESSION['role'] = $_POST['role'];

    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Prisijungimas</title>

<link rel="stylesheet" href="../assets/style.css">

</head>
<body>

<h1>IT Pagalbos Sistema</h1>

<form method="POST">

    <button type="submit"
            name="role"
            value="darbuotojas">

        Darbuotojas

    </button>

    <br><br>

    <button type="submit"
            name="role"
            value="specialistas">

        IT Specialistas

    </button>

</form>

</body>
</html>