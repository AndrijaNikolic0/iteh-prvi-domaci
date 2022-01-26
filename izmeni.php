        <div class="modal fade" id="izmenaProizvoda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Izmena proizvoda</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id_izm">
                        <label class="form-label">Proizvod</label>
                        <input type="text" class="form-control mb-1" id="proizvod_izm">
                        <label class="form-label">Opis</label>
                        <input type="text" class="form-control mb-1" id="opis_proizvoda_izm">
                        <label class="form-label">Cena</label>
                        <input type="number" class="form-control mb-1" id="cena_proizvoda_izm">
                        <label class="form-label">Prodavnica</label>
                        <select class="form-select mb-1" id="select-prodavnica_izm">
                            <?php
                            $sql1 = "select id,nazivProdavnice from prodavnica";
                            $rzt1 = $database->conn->query($sql1);

                            while ($prod = mysqli_fetch_assoc($rzt1)) {
                            ?>
                                <option value="<?php echo $prod['id']; ?>"><?php echo $prod['nazivProdavnice']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label class="form-label">Dobavljač</label>
                        <select class="form-select" id="select-dobavljac_izm">
                            <?php
                            $sql2 = "select id,nazivDobavljaca from dobavljac";
                            $rzt2 = $database->conn->query($sql2);

                            while ($dob = mysqli_fetch_assoc($rzt2)) {
                            ?>
                                <option value="<?php echo $dob['id']; ?>"><?php echo $dob['nazivDobavljaca']; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="dugme_sacuvaj_izmene">Sačuvaj proizvod</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>