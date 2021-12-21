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

    <!-- Page Content  -->
    <div id="content" class="col-lg p-3 mt-5 daftar-produk rounded" style="position: relative;">
        <div class="container">
            <div class="row mb-3">
                <div class="col-3 text-center" style="border-right: 1px solid black;">
                    <h5>0</h5>
                    <span>Belum Bayar</span>
                </div>
                <div class="col-3 text-center" style="border-right: 1px solid black;">
                    <h5>0</h5>
                    <span>Pengiriman Perlu Diproses</span>
                </div>
                <div class="col-3 text-center" style="border-right: 1px solid black;">
                    <h5>0</h5>
                    <span>Pengiriman Telah Diproses</span>
                </div>
                <div class="col-3 text-center" style="border-right: 1px solid black;">
                    <h5>0</h5>
                    <span>Menunggu Respon Pembatalan</span>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-3 text-center" style="border-right: 1px solid black;">
                    <h5>0</h5>
                    <span>Menunggu Respon Pengembalian</span>
                </div>
                <div class="col-3 text-center" style="border-right: 1px solid black;">
                    <h5>0</h5>
                    <span>Produk Diblokir</span>
                </div>
                <div class="col-3 text-center" style="border-right: 1px solid black;">
                    <h5>0</h5>
                    <span>Produk Habis</span>
                </div>
                <div class="col-3 text-center" style="border-right: 1px solid black;">
                    <h5>0</h5>
                    <span>Promo Akan Datang</span>
                </div>
            </div>
        </div>
    </div>
</div>