<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark mb-5">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url("assets/img/logo.jpeg"); ?>" alt="" width="30" height="29"
                class="d-inline-block align-text-top me-2">
            <strong>My Novel</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        English
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Sign up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar  -->

<!-- main -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="<?= base_url("assets/img/device.png"); ?>" class="ms-5 device" alt="" width="500" height="300">
        </div>
        <div class="col-md-4 login">
            <div class="container d-flex align-items-center flex-column">
                <div class="row login-mynovel">
                    <h5 class="text-dark">Log in to My Novel</h5>
                </div>
                <?= $this->session->flashdata("message"); ?>
                <?php unset($_SESSION["message"]); ?>
                <form action="<?= base_url("auth"); ?>" method="post">
                    <div>
                        <label for="username" class="form-label">Username Or Email</label>
                        <input type="text" class="form-control <?= (form_error("username")) ? "is-invalid" : ''; ?>"
                            id="username" placeholder="Username or Email" name="username"
                            value="<?= set_value("username"); ?>">
                        <?= form_error("username", '<small class="text-danger">', "</small>"); ?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control <?= (form_error("password")) ? "is-invalid" : ''; ?>"
                            id="password" placeholder="Password" name="password">
                        <?= form_error("password", '<small class="text-danger">', "</small>"); ?>
                    </div>
                    <button type="submit" href="" class="btn btn-success btn-login mt-1 mb-2">Login</button>
                </form>
                <a href="" class="text-white text-decoration-none">Forgot Password?</a>
                <div>
                    <i class="fas fa-chevron-left text-dark"></i>
                    <a href="<?= base_url(); ?>" class="text-dark text-decoration-none">Back to all login options</a>
                </div>
                <p>Dont have an account?<a href="<?= base_url("auth/registration"); ?>"
                        class="text-danger text-decoration-none"> Sign up</a></p>
            </div>
        </div>
    </div>
</div>
<!-- end main  -->