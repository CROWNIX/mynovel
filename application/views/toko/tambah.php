<div class="container mb-3" style="margin-top: 120px;">
    <div class="row">
        <div class="col">
            <h3>Tambah Produk</h2>
        </div>
    </div>
</div>
<form action="" method="post" enctype="multipart/form-data">
    <div class="container p-4 mb-3" style="background-color: rgba(255, 255, 255, 0.5);">
        <div class="row mb-5">
            <div class="col">
                <h5>Upload Produk</h5>
                <p>Hindari penjualan produk palsu/melanggar hak kekayaan intelektual, supaya produkmu tidak
                    dihapus.<span class="text-success"> Pelajari Selengkapnya</span>
                </p>
            </div>
        </div>
        <div class="row upload">
            <div class="col-lg-3">
                <h6>Foto Produk</h6>
                <p>Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px,
                </p>
                <p>Pilih foto produk atau tarik dan letakan foto disini, cantumkan minimal foto utama untuk cover produk
                    agar produk semakin menarik pembeli</p>
            </div>
            <div class="col">
                <div
                    class="box border border-dark p-4 rounded text-center <?= (form_error("cover")) ? "invalid" : ''; ?>">
                    <input type="file" id="cover" hidden onchange="previewImg()" name="cover">
                    <label for="cover" class="cover-label">
                        <i class="far fa-image fa-3x"></i><br>
                        Foto Utama
                    </label>
                    <img class="cover-preview" src="" alt="" width="130" height="130">
                </div>
                <span class="cover-name"></span>
                <?= form_error("cover", '<small class="text-danger">', "</small>"); ?>
            </div>
            <div class="col">
                <div class="box border border-dark p-4 rounded text-center">
                    <input type="file" id="image2" hidden onchange="previewImg2()" name="image2">
                    <label for="image2" class="image2-label">
                        <i class="far fa-image fa-3x"></i><br>
                        Foto 2
                    </label>
                    <img class="image2-preview" src="" alt="" width="130" height="130">
                </div>
                <span class="image2-name"></span>
            </div>
            <div class="col">
                <div class="box border border-dark p-4 rounded text-center">
                    <input type="file" id="image3" hidden onchange="previewImg3()" name="image3">
                    <label for="image3" class="image3-label">
                        <i class="far fa-image fa-3x"></i><br>
                        Foto 3
                    </label>
                    <img class="image3-preview" src="" alt="" width="130" height="130">
                </div>
                <span class="image3-name"></span>
            </div>
            <div class="col">
                <div class="box border border-dark p-4 rounded text-center">
                    <input type="file" id="image4" hidden onchange="previewImg4()" name="image4">
                    <label for="image4" class="image4-label">
                        <i class="far fa-image fa-3x"></i><br>
                        Foto 4
                    </label>
                    <img class="image4-preview" src="" alt="" width="130" height="130">
                </div>
                <span class="image4-name"></span>
            </div>
            <div class="col">
                <div class="box border border-dark p-4 rounded text-center">
                    <input type="file" id="image5" hidden onchange="previewImg5()" name="image5">
                    <label for="image5" class="image5-label">
                        <i class="far fa-image fa-3x"></i><br>
                        Foto 5
                    </label>
                    <img class="image5-preview" src="" alt="" width="130" height="130">
                </div>
                <span class="image5-name"></span>
            </div>
        </div>
    </div>
    <div class="container p-4 mb-3" style="background-color: rgba(255, 255, 255, 0.5);">
        <div class="row mb-5">
            <div class="col">
                <h5>Informasi Produk</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="nama" class="form-label">
                    <h6>Nama Produk</h6>
                </label>
                <p>Cantumkan minimal 40 karakter agar semakin menarik dan mudah ditemukan oleh pembeli
                </p>
            </div>
            <div class="col">
                <input type="text" class="form-control <?= (form_error("judul")) ? "is-invalid" : ''; ?>" id="nama"
                    placeholder="Contoh : insecurity is My Middle Name" autocomplete="off" name="judul"
                    value="<?= set_value("judul"); ?>">
                <?= form_error("judul", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <h6>Kategori</h6>
            </div>
            <div class="col">
                <select class="form-select <?= (form_error("kategori_id")) ? "is-invalid" : ''; ?>"
                    aria-label="Default select example" name="kategori_id">
                    <option value="1">Action</option>
                    <option value="2">Adventure</option>
                    <option value="3">Chicklit</option>
                    <option value="4">Classics</option>
                    <option value="5">Fanfiction</option>
                    <option value="6">Fantasy</option>
                    <option value="7">Horror</option>
                    <option value="8">Humor</option>
                    <option value="9">Mystery</option>
                    <option value="10">Non Fiction</option>
                    <option value="11">Paranormal</option>
                    <option value="12">Romance</option>
                </select>
                <?= form_error("kategori_id", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="penulis" class="form-label">
                    <h6>Penulis</h6>
                </label>
            </div>
            <div class="col">
                <input type="text" class="form-control <?= (form_error("penulis")) ? "is-invalid" : ''; ?>" id="penulis"
                    placeholder="Masukan Nama Penulis" autocomplete="off" name="penulis"
                    value="<?= set_value("penulis"); ?>">
                <?= form_error("penulis", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="penerbit" class="form-label">
                    <h6>Penerbit</h6>
                </label>
            </div>
            <div class="col">
                <input type="text" class="form-control  <?= (form_error("penerbit")) ? "is-invalid" : ''; ?>"
                    id="penerbit" placeholder="Masukan Nama Penerbit" autocomplete="off" name="penerbit"
                    value="<?= set_value("penerbit"); ?>">
                <?= form_error("penerbit", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="jumlahHalaman" class="form-label">
                    <h6>Jumlah Halaman</h6>
                </label>
            </div>
            <div class="col">
                <input type="number" class="form-control <?= (form_error("jumlah_halaman")) ? "is-invalid" : ''; ?>"
                    id="jumlahHalaman" placeholder="Masukan Jumlah Halaman" autocomplete="off" name="jumlah_halaman"
                    value="<?= set_value("jumlah_halaman"); ?>">
                <?= form_error("jumlah_halaman", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
    </div>
    <div class="container p-4 mb-3" style="background-color: rgba(255, 255, 255, 0.5);">
        <div class="row mb-5">
            <div class="col">
                <h5>Detail Produk</h5>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <h6>Kondisi</h6>
            </div>
            <div class="col d-flex">
                <div class="form-check me-2">
                    <input class="form-check-input" type="radio" id="baru" checked name="kondisi" value="baru">
                    <label class="form-check-label" for="baru">
                        Baru
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="bekas" name="kondisi" value="bekas">
                    <label class="form-check-label" for="bekas">
                        Bekas
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="deskripsi" class="form-label">
                    <h6>Deskripsi Produk</h6>
                </label>
                <p>Deskripsi Produk berisi cerita singkat atau sinopsis novel.</p>
            </div>
            <div class="col">
                <textarea class="form-control <?= (form_error("deskripsi")) ? "is-invalid" : ''; ?>" id="deskripsi"
                    rows="3" name="deskripsi"><?= set_value("deskripsi"); ?></textarea>
                <?= form_error("deskripsi", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
    </div>
    <div class="container p-4 mb-3" style="background-color: rgba(255, 255, 255, 0.5);">
        <div class="row mb-5">
            <div class="col">
                <h5>Harga</h5>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="minimumPemesanan" class="form-label">
                    <h6>Minimum Pemesanan</h6>
                </label>
            </div>
            <div class="col">
                <fieldset disabled>
                    <input type="text" id="minimumPemesanan" class="form-control" placeholder="1">
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="hargaSatuan" class="form-label">
                    <h6>Harga Satuan</h6>
                </label>
            </div>
            <div class="col">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Rp</span>
                    <input type="number" class="form-control <?= (form_error("harga")) ? "is-invalid" : ''; ?>"
                        placeholder="Masukan Harga" aria-label="Username" aria-describedby="basic-addon1"
                        id="hargaSatuan" name="harga" value="<?= set_value("harga"); ?>">
                </div>
                <?= form_error("harga", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
    </div>
    <div class="container p-4 mb-3" style="background-color: rgba(255, 255, 255, 0.5);">
        <div class="row mb-5">
            <div class="col">
                <h5>Pengelolaan Produk</h5>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="stok" class="form-label">
                    <h6>Stok Produk</h6>
                </label>
            </div>
            <div class="col">
                <input type="number" id="stok" class="form-control <?= (form_error("stok")) ? "is-invalid" : ''; ?>"
                    placeholder="Masukan Jumlah Produk" name="stok" value="<?= set_value("stok"); ?>">
                <?= form_error("stok", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label for="isbn" class="form-label">
                    <h6>ISBN</h6>
                </label>
                <p>Gunakan ISBN jika kamu ingin menandai produkmu</p>
            </div>
            <div class="col">
                <input type="text" id="isbn" class="form-control <?= (form_error("isbn")) ? "is-invalid" : ''; ?>"
                    placeholder="Masukan ISBN" name="isbn" value="<?= set_value("isbn"); ?>">
                <?= form_error("isbn", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
    </div>
    <div class="container p-4 mb-3" style="background-color: rgba(255, 255, 255, 0.5);">
        <div class="row mb-5">
            <div class="col">
                <h5>Berat Produk</h5>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="berat" class="form-label">
                    <h6>Berat Produk</h6>
                </label>
                <p>Masukan berat dengan menimbang produk setelah dikemas</p>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Gr</span>
                    <input type="number" class="form-control <?= (form_error("berat")) ? "is-invalid" : ''; ?>"
                        placeholder="Masukan berat" aria-label="Username" aria-describedby="basic-addon1" id="berat"
                        name="berat" value="<?= set_value("berat"); ?>">
                </div>
                <?= form_error("berat", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h6>Ukuran Produk</h6>
                <p>Masukan Ukuran Produk setelah dikemas untuk menghitung berat volume</p>
            </div>
            <div class="col-lg-6 d-flex align-items-start">
                <div class="input-group mb-3 me-2">
                    <input type="number" class="form-control <?= (form_error("panjang")) ? "is-invalid" : ''; ?>"
                        placeholder="Panjang" aria-label="Username" aria-describedby="basic-addon1" name="panjang"
                        value="<?= set_value("panjang"); ?>">
                    <span class="input-group-text" id="basic-addon1">Cm</span>
                </div>
                <?= form_error("panjang", '<small class="text-danger">', "</small>"); ?>
                <div class="input-group mb-3">
                    <input type="number" class="form-control <?= (form_error("lebar")) ? "is-invalid" : ''; ?>"
                        placeholder="Lebar" aria-label="Username" aria-describedby="basic-addon1" name="lebar"
                        value="<?= set_value("lebar"); ?>">
                    <span class="input-group-text" id="basic-addon1">Cm</span>
                </div>
                <?= form_error("lebar", '<small class="text-danger">', "</small>"); ?>
            </div>
        </div>
    </div>
    <input type="hidden" name="toko_id" value="<?= $toko["id"]; ?>">
    <div class="container d-flex justify-content-end mb-3">
        <a href="<?= base_url("toko"); ?>" class="btn btn-danger me-2" style="width: 100px">Batal</a>
        <button class="btn btn-success" type="submit" style="width: 100px">Simpan</button>
    </div>
</form>