<?php
$tunnukset = "../../../tunnukset.php";
if (file_exists($tunnukset)){
    include_once("../../../tunnukset.php");
    } 
else {
    die("Tiedostoa ei löydy, ota yhteys ylläpitoon.");
    }    
$palvelin = $db_server_local;
$kayttaja = $db_username_local;  // tämä on tietokannan käyttäjä, ei tekemäsi järjestelmän
$salasana = $db_password_local;
$tietokanta ?? "autokanta";
$yhteys = new mysqli($palvelin, $kayttaja, $salasana, $tietokanta);
if ($yhteys->connect_error) {
   die("Yhteyden muodostaminen epäonnistui: " . $yhteys->connect_error);
   }
$yhteys->set_charset("utf8");

?>