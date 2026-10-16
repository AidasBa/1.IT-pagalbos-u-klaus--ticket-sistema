<?php

require 'config.php';

for($i = 1; $i <= 9000; $i++)
{
    $pavadinimas = "Problema " . $i;

    $aprasymas = "Sugeneruota testine uzklausa Nr. " . $i;

    $prioritetai = ['zemas', 'vidutinis', 'aukstas'];

    $prioritetas = $prioritetai[array_rand($prioritetai)];

    $user_id = 1;
    $assigned_to = 1;

    $sql = "INSERT INTO tickets
    (pavadinimas, aprasymas, prioritetas, user_id, assigned_to, busena)
    VALUES
    (
        '$pavadinimas',
        '$aprasymas',
        '$prioritetas',
        '$user_id',
        '$assigned_to',
        'naujas'
    )";

    $conn->query($sql);
}

echo "Sugeneruota 9000 uzklausu!";