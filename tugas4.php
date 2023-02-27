<<?php

$kalimat = "kasur rusak";
$kalimat = str_replace(" ", "", strtolower($kalimat));

if ($kalimat == strrev($kalimat)) {
    echo "Kalimat ini adalah palindrom.";
} else {
    echo "Kalimat ini bukan palindrom.";
}
?>