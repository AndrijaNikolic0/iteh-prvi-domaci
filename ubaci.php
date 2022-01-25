 <?php
    include('Database.php');
    require 'proizvod.php';

    $database = new Database("prodavnice");

    $proizvod = new Proizvod();
    $proizvod->proizvod = $_POST['keyProizvod'];
    $proizvod->opis = $_POST['keyOpis'];
    $proizvod->cena = $_POST['keyCena'];
    $proizvod->prodavnica_id = $_POST['keyProdavnica'];
    $proizvod->dobavljac_id = $_POST['keyDobavljac'];

    $sql = "insert into proizvod (proizvod, opis, cena, prodavnica_id, dobavljac_id) 
    values ('$proizvod->proizvod', '$proizvod->opis', '$proizvod->cena', '$proizvod->prodavnica_id', '$proizvod->dobavljac_id')";

    $success = $database->conn->query($sql);

    if ($success) {
        echo "Proizvod ubačen u bazu";
    } else {
        echo "Greška, proizvod nije ubačen u bazu";
    }

    ?>