<?php

$servename = "localhost";
$DBuname = "phpmyadmin";
$DBPass = "Maxx14009";
$DBname = "cs230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

