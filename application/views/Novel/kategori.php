<div class="flash-data" data-flashdata="<?= $this->session->flashdata("kategori"); ?>"></div>
<?php unset($_SESSION["kategori"]); ?>
<?php if($novel) : ?>
<div class="container" style="margin-top:100px">
    <div class="row">
        <h1 class="text-white"><?= $novel[0]["kategori"]; ?>(<?= count($novel); ?>)</h1>
    </div>

    <div class="row">
        <?php forEach($novel as $n) : ?>
        <div class="col mt-2">
            <div class="card px-2 pt-2 mb-5 novel" style="width: 190px; height:100%;">
                <img src="<?= base_url("assets/img/" . $n["cover"]); ?>" class="card-img-top rounded" alt="..."
                    width="50" height="250">
                <a href="<?= base_url("novel/detail/" . $n["id"]); ?>" class="fw-bold text-decoration-none"
                    style="color: #278180;"><?= $n["judul"]; ?></a>
                <div class="d-flex icon ms-1">
                    <div><i class="fas fa-eye me-1"></i><small class="me-2">250k</small></div>
                    <div><i class="fas fa-heart me-1 text-danger"></i><small class="me-2">250k</small></div>
                    <div><i class="fas fa-star text-warning me-1"></i><small>4.9</small></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php endif ?>