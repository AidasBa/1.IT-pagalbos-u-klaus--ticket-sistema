<?php
require 'config.php';

for($i = 1; $i <= 1000; $i++)
{
    $pavadinimas = "Problema " . $i;

    $aprasymas = "Sugeneruota testine uzklausa Nr. " . $i;

    $prioritetai = ['zemas', 'vidutinis', 'aukstas'];

    $prioritetas = $prioritetai[array_rand($prioritetai)];

    $assigned_to = 0;

    $sql = "INSERT INTO tickets
    (pavadinimas, aprasymas, prioritetas, assigned_to, busena)
    VALUES
    ('$pavadinimas',
     '$aprasymas',
     '$prioritetas',
     '$assigned_to',
     'naujas')";

    $conn->query($sql);
}

echo "Sugeneruota 1000 uzklausu!";