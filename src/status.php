<?php
require 'config.php';

$id = $_POST['id'];
$busena = $_POST['busena'];

$sql = "UPDATE tickets
        SET busena='$busena'
        WHERE id=$id";

$conn->query($sql);

header("Location: dashboard.php");
exit();