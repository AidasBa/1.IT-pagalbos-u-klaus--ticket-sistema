<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "ticket_sistema_test"
);

if ($conn->connect_error)
{
    die("Klaida: " . $conn->connect_error);
}