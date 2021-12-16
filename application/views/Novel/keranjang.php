<div class="flash-data" data-pesan="<?= $this->session->userdata("pesan"); ?>"
    data-judul="<?= $this->session->userdata("judul"); ?>" data-aksi="<?= $this->session->userdata("aksi"); ?>"></div>
<?php unset(
        $_SESSION['pesan'],
        $_SESSION['judul'],
        $_SESSION["aksi"]
); ?>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <?php forEach($keranjang as $k) : ?>
        <div class="col">
            <div class="card px-2 py-2 mb-5 novel" style="width: 190px;">
                <img src="<?= base_url("assets/img/" . $k["cover"]); ?>" class="card-img-top rounded" alt="..."
                    width="50" height="250">
                <a href="<?= base_url("novel/checkout/" . $k["novel_id"]); ?>" class="fw-bold text-decoration-none"
                    style="color: #278180;"><?= $k["judul"]; ?></a>
                <span class="text-success"><?= rupiah($k["harga"]); ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>