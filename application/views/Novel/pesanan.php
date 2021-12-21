<div class="flash-data" data-pesan="<?= $this->session->userdata("pesan"); ?>"
    data-judul="<?= $this->session->userdata("judul"); ?>" data-aksi="<?= $this->session->userdata("aksi"); ?>"></div>
<?php unset(
        $_SESSION['pesan'],
        $_SESSION['judul'],
        $_SESSION["aksi"]
); ?>

<div class="container" style="margin-top: 100px; background-color:rgba(255, 255, 255, 0.6)">
    <div class="row">
        <div class="col">
            <h3 class="mb-3">Pesanan Saya</h3>
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
                    <?php forEach($pesanan as $p): ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $p["judul"] ?></td>
                        <td><?= $p["stok"]; ?></td>
                        <td><?= $p["harga"]; ?></td>
                        <td>14 desember 2021</td>
                        <td><?= $p["status"]; ?></td>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>