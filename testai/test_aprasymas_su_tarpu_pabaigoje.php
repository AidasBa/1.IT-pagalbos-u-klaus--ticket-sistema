<?php

$aprasymas = "abcde     ";

$result = strlen(trim($aprasymas)) >= 5;

if($result)
{
    echo "✅ TEST PAVYKO";
}
else
{
    echo "❌ TEST ATMESTA";
}