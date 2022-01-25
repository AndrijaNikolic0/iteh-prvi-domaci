$(function () {
    noviProizvod();
});


function noviProizvod() {

    $(document).on('click', '#dugme_sacuvaj', function () {

        let proizvod = $('#proizvod').val();
        var opis = $('#opis_proizvoda').val();
        var cena = $('#cena_proizvoda').val();
        var prodavnica = $('#select-prodavnica').val();
        var dobavljac = $('#select-dobavljac').val();

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