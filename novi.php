         <div class="modal fade" id="noviProizvod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Novi proizvod</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <label class="form-label">Proizvod</label>
                         <input type="text" class="form-control mb-1" id="proizvod">
                         <label class="form-label">Opis</label>
                         <input type="text" class="form-control mb-1" id="opis_proizvoda">
                         <label class="form-label">Cena</label>
                         <input type="number" class="form-control mb-1" id="cena_proizvoda">
                         <label class="form-label">Prodavnica</label>
                         <select class="form-select mb-1" id="select-prodavnica">
                             <?php
                                include('Database.php');
                                $database = new Database("prodavnice");
                                $sql1 = "select id,naziv naziv from prodavnica";
                                $rzt1 = $database->conn->query($sql1);

                                while ($prod = mysqli_fetch_assoc($rzt1)) {
                                ?>
                                 <option value="<?php echo $prod['id']; ?>"><?php echo $prod['naziv']; ?></option>
                             <?php
                                }
                                ?>
                         </select>
                         <label class="form-label">Dobavljač</label>
                         <select class="form-select" id="select-dobavljac">
                             <?php
                                $sql2 = "select * from dobavljac";
                                $rzt2 = $database->conn->query($sql2);

                                while ($dob = mysqli_fetch_assoc($rzt2)) {
                                ?>
                                 <option value="<?php echo $dob['id']; ?>"><?php echo $dob['naziv']; ?></option>
                             <?php
                                }
                                ?>
                         </select>

                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-primary" id="dugme_sacuvaj">Sačuvaj proizvod</button>
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                     </div>
                 </div>
             </div>
         </div>