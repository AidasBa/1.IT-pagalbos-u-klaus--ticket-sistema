<?php

$prioritetas = "Vidutinis";
$specialistas = "";

if ($prioritetas === "Aukštas" && empty($specialistas)) {
    die("TEST NEPAVYKO");
}

echo "TEST PAVYKO";