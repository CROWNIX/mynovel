<!-- Main  -->
<div class="container detail">
    <div class="row">
        <div class="col-3" style="position: relative;">
            <div class=" card px-3 pt-3 pb-3 py-3" style="width: 13rem; position:fixed">
                <img src="<?= base_url("assets/img/" . $keranjang["cover"]); ?>" class="card-img-top" alt="...">
            </div>
        </div>
        <div class="col-6 pt-3" style="position: relative;">
            <div class="row">
                <div class="col-9">
                    <span><?= $keranjang["penulis"]; ?></span>
                </div>
                <div class="col">
                    <i class="far fa-heart fa-lg"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <span class="fw-bold"><?= $keranjang["judul"]; ?></span>
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
                    <h5 class="text-primary">Rp. <?= $keranjang["harga"]; ?></h5>
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
                                    <h5 class="text-primary">Rp. <?= $keranjang["harga"]; ?></h5>
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
                    <p><?= $keranjang["deskripsi"]; ?></p>
                </div>
            </div>
            <div class="card card-detail mt-3" style="width: 100%;" id="detail">
                <div class="card-body">
                    <h5>Detail</h5>
                    <div class="row fw-bold">
                        <div class="col">
                            <span>Jumlah Halaman</span>
                            <p><?= $keranjang["jumlah_halaman"]; ?></p>
                            <span>ISBN</span>
                            <p><?= $keranjang["isbn"]; ?></p>
                            <span>Bahasa</span>
                            <p>Indonesia</p>
                        </div>
                        <div class="col">
                            <span>Penerbit</span>
                            <p class="text-primary"><?= $keranjang["penerbit"]; ?></p>
                            <span>Berat</span>
                            <p><?= $keranjang["berat"]; ?> Kg</p>
                            <span>Lebar</span>
                            <p><?= $keranjang["lebar"]; ?> Cm</p>
                            <span>Panjang</span>
                            <p><?= $keranjang["panjang"]; ?> Cm</p>
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
                    <i class="fas fa-minus-circle"></i>
                    <span class="jumlahBeli"><?= $keranjang["stok"]; ?></span>
                    <i class="fas fa-plus-circle me-1"></i>
                    <span>Stok <?= $novel["stok"]; ?></span>
                    <input type="hidden" value="<?= $keranjang["stok"]; ?>" class="detail-stok" name="stok">
                    <input type="hidden" value="<?= $keranjang["harga"]; ?>" class="detail-harga" name="harga">
                    <input type="hidden" value="<?= $keranjang["id"]; ?>" name="novel_id">
                    <input type="hidden" value="<?= $user["username"]; ?>" name="pembeli">
                    <input type="hidden" value="<?= $novel["harga"]; ?>" class="novel-price">
                    <span class="beli mt-3 mb-4"></span>
                    <span class="me-5">Sub total</span>
                    <span class="text-primary ms-4">Rp. <span class="harga"><?= $keranjang["harga"]; ?></span></span>
                    <button type="submit" class="btn btn-primary mt-3 rounded-pill text-center" style="width: 100%;"
                        data-bs-toggle="modal" data-bs-target="#formModal">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Checkout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url("novel/pesanan"); ?>" method="post">
                    <input type="hidden" value="<?= $keranjang["stok"]; ?>" class="pesanan-stok" name="stok">
                    <input type="hidden" value="<?= $keranjang["harga"]; ?>" class="pesanan-harga" name="harga">
                    <input type="hidden" value="<?= $keranjang["id"]; ?>" name="novel_id">
                    <input type="hidden" value="<?= $user["username"]; ?>" name="pembeli">
                    <input type="hidden" value="" name="total" class="total">
                    <input type="hidden" value="<?= $novel["toko_id"]; ?>" name="toko_id">
                    <h5 class="mb-1">Alamat Pengiriman</h5>
                    <label for="provinsi_id" class="form-label">Provinsi</label>
                    <select class="form-select" aria-label="Default select example" name="provinsi_id" id="provinsi_id"
                        required>
                        <option value="">--Pilih Provinsi--</option>
                        <?php forEach($provinsi as $prov): ?>
                        <option value="<?= $prov["id"]; ?>"><?= $prov["provinsi"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="kabupaten_id" class="form-label kabupatenLabel">Kabupaten</label>
                    <select class="form-select" aria-label="Default select example" name="kabupaten_id"
                        id="kabupaten_id" required>
                    </select>
                    <label for="kecamatan_id" class="form-label kecamatanLabel">Kecamatan</label>
                    <select class="form-select" aria-label="Default select example" name="kecamatan_id"
                        id="kecamatan_id" required>
                    </select>
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" placeholder="Alamat Tujuan" required
                        name="alamat"></textarea>
                    <label for="kode" class="form-label">Kode Pos</label>
                    <input type="number" class="form-control" id="kode" placeholder="Masukan Kode Pos" required
                        name="kode_pos">
                    <label for="penerima" class="form-label">Penerima</label>
                    <input type="text" class="form-control" id="penerima" placeholder="Masukan Nama Penerima" required
                        name="penerima">
                    <label for="no-telp" class="form-label">No Telepon</label>
                    <input type="number" class="form-control mb-4" id="no-telp" placeholder="Masukan No Telepon"
                        required name="no_telepon">
                    <h5>Detail Pembayaran</h5>
                    <table cellpadding="2">
                        <tr>
                            <td>Total Tagihan</td>
                            <td class="text-end">:</td>
                            <td>Rp.</td>
                            <td id="total-tagihan"><?= $keranjang["harga"]; ?></td>
                        </tr>
                        <tr>
                            <td>Ongkos Pengiriman</td>
                            <td width="50" class="text-end">:</td>
                            <td>Rp.</td>
                            <td id="ongkos-pengiriman">10000</td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Sub Total</h5>
                            </td>
                            <td class="text-end">:</td>
                            <td>Rp.</td>
                            <td id="sub-total"></td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</div>