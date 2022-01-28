<?php

require('Database.php');

$database = new Database('prodavnice');
$proizvod_id = $_GET['id_proizvoda'];
$query = "delete from proizvod where id=" . $proizvod_id;

$database->conn->query($query);
header('Location: izmena.php');
