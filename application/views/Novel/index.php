<!-- Slide Show -->
<section class="slideshow mb-5">
    <div class="container">
        <h4 class="fw-bold">Annalise lari ketika akan akad</h4>
        <p class="text-secondary">Aria mendadak jadi mempelai dan menikahi mahesa-dosennya</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url("assets/img/gambar6.jpg"); ?>" class="d-block w-100" alt="..." height="400">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url("assets/img/sunset.jpg"); ?>" class="d-block w-100" alt="..." height="400">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url("assets/img/starry1.jpg"); ?>" class="d-block w-100" alt="..." height="400">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- End of Slide Show -->

<!-- Main Content -->
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-white">Welcome Home, <?= $user["username"]; ?></h4>
                <span></span>
            </div>
        </div>
    </div>
    <div class="container mt-5 ps-5">
        <div class="row">
            <div class="col">
                <h4 class="text-dark">Top Picks For You</h4>
            </div>
        </div>
        <div class="row">
            <?php forEach($novel as $n) : ?>
            <div class="col mt-2">
                <div class="card px-2 pt-2 mb-5 novel" style="width: 190px; height:100%;">
                    <img src="<?= base_url("assets/img/novel/" . $n["cover"]); ?>" class="card-img-top rounded"
                        alt="..." width="50" height="250">
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
</main>