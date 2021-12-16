<div class="row mt-3 pe-4" style="width:100%">
    <div class="col-lg-3" style="position: relative;">
        <nav id="sidebar" class="mt-5 rounded" style="position: fixed;">
            <div class="p-4">
                <div class="d-flex">
                    <img src="<?= base_url("assets/img/profile.jpg"); ?>" class="rounded-circle" alt="" width="80"
                        height="80">
                    <div class="ms-3 pt-2">
                        <h5 class="fw-bold">TOKOMIRAHSAE</h5>
                        <i class="far fa-star fa-lg"></i>
                        <span class="vertikal"></span>
                        <i class="far fa-user fa-lg"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <div class="bg-light px-2 py-1 rounded">
                        <h6 class="mb-0 fw-bold">Toko Buka</h6>
                    </div>
                    <div class="d-flex">
                        <i class="far fa-clock me-1 mt-1 fw-bold"></i>
                        <p class="mb-0">24 Jam</p>
                    </div>
                </div>
                <span class="horizontal"></span>
                <div class="d-flex justify-content-between">
                    <p class="mb-0">Saldo</p>
                    <p class="mb-0 fw-bold">Rp.0</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="mb-0">Kredit TopAds</p>
                    <p class="mb-0 fw-bold">Rp.0</p>
                </div>
                <span class="horizontal"></span>
                <ul class="list-unstyled components mb-5">
                    <li class="mb-2">
                        <i class="fas fa-home fa-lg"></i>
                        <a href="#" class="text-decoration-none fw-bold text-dark">Home</a>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-comment-dots fa-lg"></i>
                        <a href="#" class="text-decoration-none fw-bold text-dark">Chat</a>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-comment-alt fa-lg"></i>
                        <a href="#" class="text-decoration-none fw-bold text-dark">Diskusi</a>
                    </li>
                    <li class="mb-2 dropdown-produk">
                        <i class="fas fa-box-open"></i>
                        <a class="dropdown-toggle text-decoration-none fw-bold text-dark" data-bs-toggle="collapse"
                            href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Produk
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="">
                                <ul>
                                    <li>
                                        <a href="<?= base_url("toko/tambah"); ?>"
                                            class="text-decoration-none text-dark">Tambah Produk</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url("toko/produk"); ?>"
                                            class="text-decoration-none text-dark">Daftar Produk</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-box-open"></i>
                        <a class="dropdown-toggle text-decoration-none fw-bold text-dark" data-bs-toggle="collapse"
                            href="#pesanan" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Pesanan
                        </a>
                        <div class="collapse" id="pesanan">
                            <div class="">
                                <ul>
                                    <li>
                                        <a href="<?= base_url("toko/pesanan"); ?>"
                                            class="text-decoration-none text-dark">Pesanan Saya</a>
                                    </li>
                                    <li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Content -->
    <div id="content" class="col-lg p-3 mt-5 daftar-produk rounded" style="position: relative;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Info Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php $n = 0; ?>
                <?php forEach($pesanan as $p): ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $novel[$n++]["judul"]; ?></td>
                    <td><?= $p["stok"]; ?></td>
                    <td><?= $p["harga"]; ?></td>
                    <td>14 desember 2021</td>
                    <td><?= $p["status"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>