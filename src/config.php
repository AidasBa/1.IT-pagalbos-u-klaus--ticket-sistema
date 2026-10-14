<?php

$conn = new mysqli("localhost", "root", "", "ticket_sistema");

if ($conn->connect_error) {
    die("Klaida: " . $conn->connect_error);
}
?>