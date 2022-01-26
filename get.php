<?php

require('Database.php');
require('proizvod.php');

$database = new Database('prodavnice');

$proizvod_id = $_POST['keyID'];

$query = "select * from proizvod where id=" . $proizvod_id;

$rzt = $database->conn->query($query);

while ($rztRed = mysqli_fetch_assoc($rzt)) {

    $proizvod = new Proizvod();
    $proizvod->id = $proizvod_id;
    $proizvod->proizvod = $rztRed['proizvod'];
    $proizvod->opis = $rztRed['opis'];
    $proizvod->cena = $rztRed['cena'];
    $proizvod->prodavnica_id = $rztRed['prodavnica_id'];
    $proizvod->dobavljac_id = $rztRed['dobavljac_id'];
}

echo json_encode($proizvod);
