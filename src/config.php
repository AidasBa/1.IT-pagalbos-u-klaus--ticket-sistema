<?php

error_reporting(0);

try {

    $conn = @new mysqli("localhost", "root", "", "ticket_sistema");

    if ($conn->connect_error) {
        throw new Exception();
    }

} catch (Exception $e) {

    die("
    <h2 style='color:red;text-align:center;margin-top:100px;'>
        Šiuo metu duomenų bazė nepasiekiama, prašome bandyti vėliau.
    </h2>
    ");

}