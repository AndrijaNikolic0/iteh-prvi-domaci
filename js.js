$(function () {
    noviProizvod();
    getProizvod();
    azuriranjeProizvoda();
    $('#tabelaproizvodi').DataTable();
});


function noviProizvod() {

    $(document).on('click', '#dugme_sacuvaj', function () {

        let proizvod = $('#proizvod').val();
        let opis = $('#opis_proizvoda').val();
        let cena = $('#cena_proizvoda').val();
        let prodavnica = $('#select-prodavnica').val();
        let dobavljac = $('#select-dobavljac').val();

        $.ajax(
            {
                url: 'ubaci.php',
                method: 'post',
                data: { keyProizvod: proizvod, keyOpis: opis, keyCena: cena, keyProdavnica: prodavnica, keyDobavljac: dobavljac },
                success: function (data) {
                    alert(data);
                }
            });

    })
}

function getProizvod() {

    $(document).on('click', '#izmena_dugme', function () {

        let proizvod_id = $(this).attr('value');

        $.ajax({
            url: 'get.php',
            method: 'post',
            data: { keyID: proizvod_id },
            dataType: 'JSON',

            success: function (data) {
                $('#izmenaProizvoda').modal('show');
                $('#id_izm').val(data.id);
                $('#proizvod_izm').val(data.proizvod);
                $('#opis_proizvoda_izm').val(data.opis);
                $('#cena_proizvoda_izm').val(data.cena);
                $('#select-prodavnica_izm').val(data.prodavnica_id);
                $('#select-dobavljac_izm').val(data.dobavljac_id);
            }
        });
    })
}

function azuriranjeProizvoda() {

    $(document).on('click', '#dugme_sacuvaj_izmene', function () {

        let id = $('#id_izm').val();
        let proizvod = $('#proizvod_izm').val();
        let opis = $('#opis_proizvoda_izm').val();
        let cena = $('#cena_proizvoda_izm').val();
        let prodavnica_id = $('#select-prodavnica_izm').val();
        let dobavljac_id = $('#select-dobavljac_izm').val();

        $.ajax({
            url: 'azuriraj.php',
            method: 'post',
            data: {
                keyID: id,
                keyProizvod: proizvod,
                keyOpis: opis,
                keyCena: cena,
                keyProdavnica_id: prodavnica_id,
                keyDobavljac_id: dobavljac_id,
            },

            success: function (data) {
                alert(data);
            }
        })
    });
}
