<?php

$prioritetas = "aukstas";
$assigned_to = "";

if($prioritetas == "aukstas" && empty($assigned_to))
{
    echo "✅ PAVYKO";
}
else
{
    echo "❌ ATMESTA";
}