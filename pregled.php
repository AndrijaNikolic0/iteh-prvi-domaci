<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>

<body>

    <div class="pregled">

        <div class="tabela">

            <table class="tbl table-bordered table-striped" id="tabelaproizvodi">
                <thead>
                    <tr>
                        <th>ID Proizvoda</th>
                        <th>Naziv</th>
                        <th>Opis</th>
                        <th>Cena</th>
                        <th>Prodavnica</th>
                        <th>Dobavljač</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include('Database.php');
                    $database = new Database('prodavnice');
                    $sql = "select pzd.id, pzd.proizvod, pzd.opis, pzd.cena, prod.nazivProdavnice, dob.nazivDobavljaca from proizvod pzd join prodavnica prod on pzd.prodavnica_id=prod.id join dobavljac dob on pzd.dobavljac_id=dob.id";
                    $rzt = $database->conn->query($sql);

                    while ($rztRed = mysqli_fetch_assoc($rzt)) {
                    ?>
                        <tr>
                            <td><?php echo $rztRed['id'] ?></td>
                            <td><?php echo $rztRed['proizvod'] ?></td>
                            <td><?php echo $rztRed['opis'] ?></td>
                            <td><?php echo $rztRed['cena'] ?></td>
                            <td><?php echo $rztRed['nazivProdavnice'] ?></td>
                            <td><?php echo $rztRed['nazivDobavljaca'] ?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</body>

</html>