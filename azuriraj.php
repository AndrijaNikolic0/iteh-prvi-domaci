<?php

require('Database.php');
require('proizvod.php');
$database = new Database('prodavnice');

$proizvod = new Proizvod();
$proizvod->id = $_POST['keyID'];
$proizvod->proizvod = $_POST['keyProizvod'];
$proizvod->opis = $_POST['keyOpis'];
$proizvod->cena = $_POST['keyCena'];
$proizvod->prodavnica_id = $_POST['keyProdavnica_id'];
$proizvod->dobavljac_id = $_POST['keyDobavljac_id'];

$sql = "update proizvod set proizvod='$proizvod->proizvod', opis='$proizvod->opis', cena='$proizvod->cena', prodavnica_id='$proizvod->prodavnica_id', dobavljac_id='$proizvod->dobavljac_id' where id=$proizvod->id";
$success = $database->conn->query($sql);

if ($success) {
    echo 'Proizvod izmenjen';
} else {
    echo 'Greška, proizvod nije izmenjen';
}
