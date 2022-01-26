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

    <div class="pocetna">
        <h3 id="naslov-index">Internet tehnologije - Rad sa proizvodima - PHP MySQL</h3>
        <div class="dugmici">
            <div class="dugme">
                <button type="button" class="btn btn-primary a" data-bs-toggle="modal" data-bs-target="#noviProizvod">Novi proizvod</button>
            </div>
            <div id="1"></div>
            <div class="dugme">
                <a href="pregled.php"><button class="btn btn-primary a">Pregled svih proizvoda</button></a>
            </div>
            <div id="2"></div>
            <div class="dugme">
                <a href="izmena.php"> <button class="btn btn-primary a">Izmena proizvoda</button></a>
            </div>
            <div id="3"></div>

        </div>

        <?php require('novi.php') ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</body>

</html>