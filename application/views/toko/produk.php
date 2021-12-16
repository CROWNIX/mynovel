<div class="flash-data" data-pesan="<?= $this->session->userdata("pesan"); ?>"
    data-judul="<?= $this->session->userdata("judul"); ?>" data-aksi="<?= $this->session->userdata("aksi"); ?>"></div>
<?php unset(
        $_SESSION['pesan'],
        $_SESSION['judul'],
        $_SESSION["aksi"]
); ?>
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
        <div class="d-flex justify-content-between">
            <h4>Daftar Produk</h4>
            <div class="d-flex">
                <div class="dropdown me-2">
                    <a class="btn btn-secondary dropdown-toggle btn-light opacity-75" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Atur Sekaligus
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <a href="<?= base_url("toko/tambah"); ?>" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    Tambah produk
                </a>
            </div>
        </div>
        <h5 class="text-success mt-3 mb-0">Semua Produk</h5>
        <span class="horizontal"></span>
        <div class="d-flex justify-content-between">
            <form class="d-flex">
                <div class="input-group search mt-1">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="button" id="button-addon2"><i
                            class="fas fa-search"></i></button>
                </div>
            </form>
            <div class="d-flex">
                <div class="dropdown me-2">
                    <a class="btn btn-secondary dropdown-toggle btn-light opacity-75" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown me-2">
                    <a class="btn btn-secondary dropdown-toggle btn-light opacity-75" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Etalase
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown me-2">
                    <a class="btn btn-secondary dropdown-toggle btn-light opacity-75" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Filter
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown me-2">
                    <a class="btn btn-secondary dropdown-toggle btn-light opacity-75" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Urutkan
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <span class="horizontal"></span>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Info Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php forEach($novel as $n) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $n["judul"]; ?></td>
                    <td><?= rupiah($n["harga"]); ?></td>
                    <td><?= $n["stok"]; ?></td>
                    <td>
                        <a href="<?= base_url("toko/delete/{$n["id"]}"); ?>" class="btn btn-danger"
                            style="width: 90px;"><i class="far fa-trash-alt"></i>
                            Hapus</a>
                        <a href="" class="btn btn-success" style="width: 90px;"><i class="far fa-edit"></i> Edit</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>