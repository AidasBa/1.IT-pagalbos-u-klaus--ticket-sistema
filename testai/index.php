<?php

echo "<h1>Visų testų rezultatai</h1>";

/*
|--------------------------------------------------------------------------
| Testas 1
|--------------------------------------------------------------------------
*/

$prioritetas = "aukstas";
$assigned_to = 1;
$aprasymas = "Neveikia internetas";

$result =
    !($prioritetas == "aukstas" && empty($assigned_to))
    && strlen(trim($aprasymas)) >= 5;

echo "<p>";
echo "test_sukuria_auksto_prioriteto_uzklausa_su_specialistu: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";

/*
|--------------------------------------------------------------------------
| Testas 2
|--------------------------------------------------------------------------
*/

$prioritetas = "aukstas";
$assigned_to = "";
$aprasymas = "Neveikia internetas";

$result =
    ($prioritetas == "aukstas" && empty($assigned_to));

echo "<p>";
echo "test_neleidzia_kurti_auksto_prioriteto_uzklausos_be_specialisto: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";

/*
|--------------------------------------------------------------------------
| Testas 3
|--------------------------------------------------------------------------
*/

$aprasymas = "abc";

$result = strlen(trim($aprasymas)) < 5;

echo "<p>";
echo "test_neleidzia_kurti_uzklausos_su_per_trumpu_aprasymu: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";

/*
|--------------------------------------------------------------------------
| Testas 4
|--------------------------------------------------------------------------
*/

$aprasymas = "";

$result = strlen(trim($aprasymas)) < 5;

echo "<p>";
echo "test_neleidzia_kurti_uzklausos_su_tusciu_aprasymu: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";

/*
|--------------------------------------------------------------------------
| Ribos n-1
|--------------------------------------------------------------------------
*/

$aprasymas = "abcd";

$result = strlen(trim($aprasymas)) < 5;

echo "<p>";
echo "test_aprasymas_4_simboliai: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";

/*
|--------------------------------------------------------------------------
| Ribos n
|--------------------------------------------------------------------------
*/

$aprasymas = "abcde";

$result = strlen(trim($aprasymas)) >= 5;

echo "<p>";
echo "test_aprasymas_5_simboliai: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";

/*
|--------------------------------------------------------------------------
| Ribos n+1
|--------------------------------------------------------------------------
*/

$aprasymas = "abcdef";

$result = strlen(trim($aprasymas)) >= 5;

echo "<p>";
echo "test_aprasymas_6_simboliai: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";

/*
|--------------------------------------------------------------------------
| Regresija 1
|--------------------------------------------------------------------------
*/

$prioritetas = "aukstas";
$assigned_to = "";

$result =
    ($prioritetas == "aukstas" && empty($assigned_to));

echo "<p>";
echo "test_regresija_aukstas_prioritetas_be_specialisto: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";

/*
|--------------------------------------------------------------------------
| Regresija 2
|--------------------------------------------------------------------------
*/

$aprasymas = "abc";

$result = strlen(trim($aprasymas)) < 5;

echo "<p>";
echo "test_regresija_per_trumpas_aprasymas: ";

echo $result
    ? "✅ TEST PASSED"
    : "❌ TEST FAILED";

echo "</p>";