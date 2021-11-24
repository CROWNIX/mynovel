<div class="container" style="margin-top: 150px;">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <img src="<?= base_url("assets/img/toko.jpeg"); ?>" alt="" width="320">
        </div>
        <div class="col-lg-4 rounded pt-4 form-toko px-4">
            <h5 class="text-center">Halo <?= $user["username"]; ?> isi detail tokomu!</h5>
            <form action="<?= base_url("toko/form"); ?>" method="post">
                <div class="">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Toko</label>
                    <input type="text" class="form-control <?= (form_error("namaToko")) ? "is-invalid" : ''; ?>"
                        id="exampleFormControlInput1" name="namaToko">
                    <?= form_error("namaToko", '<small class="text-danger">', "</small>"); ?>
                </div>
                <div class="">
                    <label for="exampleDataList" class="form-label fw-bold">Provinsi</label>
                    <input class="form-control <?= (form_error("provinsi")) ? "is-invalid" : ''; ?>"
                        list="datalistOptions" id="exampleDataList" name="provinsi">
                    <?= form_error("provinsi", '<small class="text-danger">', "</small>"); ?>
                    <datalist id="datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                </div>
                <div class="">
                    <label for="exampleDataList" class="form-label fw-bold">Kota atau Kecamatan</label>
                    <input class="form-control <?= (form_error("kota")) ? "is-invalid" : ''; ?>" list="datalistOptions"
                        id="exampleDataList" name="kota">
                    <?= form_error("kota", '<small class="text-danger">', "</small>"); ?>
                    <datalist id=" datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                </div>
                <button type="submit" class="btn btn-secondary mt-3" style="width: 100%;">Buka Toko Gratis</button>
            </form>
        </div>
    </div>
</div>