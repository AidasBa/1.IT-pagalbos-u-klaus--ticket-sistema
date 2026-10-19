<?php

function galimaKurti($prioritetas, $assigned_to, $aprasymas)
{
    if($prioritetas == "aukstas" && empty($assigned_to))
    {
        return false;
    }

    if(strlen(trim($aprasymas)) < 5)
    {
        return false;
    }

    return true;
}

// Arrange
$prioritetas = "zemas";
$assigned_to = "";
$aprasymas = "";

// Act
$result = galimaKurti(
    $prioritetas,
    $assigned_to,
    $aprasymas
);

// Assert
if($result === false)
{
    echo "✅ PAVYKO";
}
else
{
    echo "❌ ATMESTA";
}