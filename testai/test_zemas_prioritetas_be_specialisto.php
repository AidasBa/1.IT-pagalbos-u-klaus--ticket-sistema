<?php

$prioritetas = "Žemas";
$specialistas = "";

if ($prioritetas === "Aukštas" && empty($specialistas)) {
    die("TEST NEPAVYKO");
}

echo "TEST PAVYKO";