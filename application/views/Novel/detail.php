<!-- Main  -->
<div class="container detail">
    <div class="row">
        <div class="col-3" style="position: relative;">
            <div class=" card px-3 pt-3 pb-3 py-3" style="width: 13rem; position:fixed">
                <img src="<?= base_url("assets/img/" . $novel["cover"]); ?>" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-6 pt-3" style="position: relative;">
            <div class="row">
                <div class="col-9">
                    <span><?= $novel["penulis"]; ?></span>
                </div>
                <div class="col">
                    <i class="far fa-heart fa-lg"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <span class="fw-bold"><?= $novel["judul"]; ?></span>
                </div>
                <div class="col">
                    <i class="fas fa-share-alt fa-lg"></i>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-9">
                </div>
                <div class="col">
                    <i class="fab fa-whatsapp fa-lg text-success"></i>
                </div>
            </div>
            <a href="" class="text-decoration-none text-dark me-3">Pilih format novel</a>
            <a href="#deskripsi" class="text-decoration-none text-dark me-3">Deskripsi novel</a>
            <a href="#detail" class="text-decoration-none text-dark me-3">Detail novel</a>
            <a href="" class="text-decoration-none text-dark me-3">Review</a>
            <span class="line mt-2 mb-2"></span>
            <p class="fw-bold">Format buku yang tersedia</p>
            <div class="card card-detail" style="width: 15rem;">
                <div class="card-body">
                    <h4>Soft Cover</h4>
                    <small class="text-secondary">Mulai dari</small>
                    <h5 class="text-primary">Rp. <?= $novel["harga"]; ?></h5>
                </div>
            </div>
            <div class="card card-detail mt-3" style="width: 100%;">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5>Format buku terpilih</h5>
                        <a href="" class="text-decoration-none fw-bold text-primary">Pilih Lainnya</a>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url("assets/img/gambar1.jpg"); ?>" alt="..." width="80" height="110">
                        </div>
                        <div class="col">
                            <i class="fas fa-store ms-1"></i>
                            <span>Cengkareng</span>
                            <i class="fas fa-map-marker-alt ms-2"></i>
                            <span>Jakarta Barat</span>
                            <div class="row mt-3">
                                <div class="col d-flex justify-content-between">
                                    <h5 class="text-primary">Rp. <?= $novel["harga"]; ?></h5>
                                    <h5 class="text-secondary">Soft Cover</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-detail mt-3" style="width: 100%;">
                <div class="card-body" id="deskripsi">
                    <h5>Deskripsi Buku :</h5>
                    <p><?= $novel["deskripsi"]; ?></p>
                </div>
            </div>
            <div class="card card-detail mt-3" style="width: 100%;" id="detail">
                <div class="card-body">
                    <h5>Detail</h5>
                    <div class="row fw-bold">
                        <div class="col">
                            <span>Jumlah Halaman</span>
                            <p><?= $novel["jumlah_halaman"]; ?></p>
                            <span>ISBN</span>
                            <p><?= $novel["isbn"]; ?></p>
                            <span>Bahasa</span>
                            <p>Indonesia</p>
                        </div>
                        <div class="col">
                            <span>Penerbit</span>
                            <p class="text-primary"><?= $novel["penerbit"]; ?></p>
                            <span>Berat</span>
                            <p><?= $novel["berat"]; ?> Kg</p>
                            <span>Lebar</span>
                            <p><?= $novel["lebar"]; ?> Cm</p>
                            <span>Panjang</span>
                            <p><?= $novel["panjang"]; ?> Cm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3" style="position: relative;">
            <div class=" card px-3 pt-3 pb-3 py-3 card-detail" style="width: 18rem; position:fixed">
                <span>Ingin beli berapa?</span>
                <p class="fw-bold">Jumlah barang</p>
                <div>
                    <form action="<?= base_url("novel/keranjang"); ?>" method="post">
                        <i class="fas fa-minus-circle"></i>
                        <span class="jumlahBeli">1</span>
                        <i class="fas fa-plus-circle me-1"></i>
                        <span>Stok <?= $novel["stok"]; ?></span>
                        <input type="hidden" value="1" class="detail-stok" name="stok">
                        <input type="hidden" value="<?= $novel["harga"]; ?>" class="detail-harga" name="harga">
                        <input type="hidden" value="<?= $novel["id"]; ?>" name="novel_id">
                        <input type="hidden" value="<?= $user["username"]; ?>" name="pembeli">
                        <input type="hidden" value="<?= $novel["harga"]; ?>" class="novel-price">
                        <span class="beli mt-3 mb-4"></span>
                        <span class="me-5">Sub total</span>
                        <span class="text-primary ms-4">Rp. <span class="harga"><?= $novel["harga"]; ?></span></span>
                        <button type="submit"
                            class="btn btn-light text-primary mt-3 me-1 rounded-pill border border-primary"><i
                                class="fas fa-shopping-cart"></i>
                            Keranjang</button>
                        <button type="submit" class="btn btn-primary mt-3 rounded-pill">Beli Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>