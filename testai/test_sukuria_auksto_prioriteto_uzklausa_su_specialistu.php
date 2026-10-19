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
$prioritetas = "aukstas";
$assigned_to = 1;
$aprasymas = "Neveikia internetas";

// Act
$result = galimaKurti($prioritetas, $assigned_to, $aprasymas);

// Assert
if($result === true)
{
    echo "✅ PAVYKO";
}
else
{
    echo "❌ ATMESTA";
}