<?php
/*
Codecdemy PHP
Unit 2

Learn PHP variables
*/
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;
$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;


echo "1: ".$riel;
echo "\n2: ".$kyat;
echo "\n3: ".$krones;
echo "\n4: ".$lek;
$result = ($riel * $riel_to_usd)+($kyat*$kyat_to_usd)+($krones*$krones_to_usd)+($lek*$lek_to_usd)-4;
echo "\nMoney:" .$result;
