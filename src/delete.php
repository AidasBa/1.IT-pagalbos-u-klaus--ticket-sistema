<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM tickets WHERE id = $id";

$conn->query($sql);

header("Location: dashboard.php");
exit();