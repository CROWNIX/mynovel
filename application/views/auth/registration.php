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
                    <a class="nav-link active" href="<?= base_url("auth"); ?>">Sign in</a>
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
        <div class="col-md-4 registration">
            <div class="container d-flex align-items-center flex-column">
                <div class="row registration-mynovel">
                    <h5>Create an Account</h5>
                </div>
                <form action="<?= base_url("Auth/registration"); ?>" method="post">
                    <div>
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control <?= (form_error("username")) ? "is-invalid" : ''; ?>"
                            id="username" placeholder="Username" name="username" value="<?= set_value("username"); ?>">
                        <?= form_error("username", '<small class="text-danger">', "</small>"); ?>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control <?= (form_error("email")) ? "is-invalid" : ''; ?>"
                            id="email" placeholder="Email" name="email" value="<?= set_value("email"); ?>">
                        <?= form_error("email", '<small class="text-danger">', "</small>"); ?>
                    </div>
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                            class="form-control <?= (form_error("password1")) ? "is-invalid" : ''; ?>" id="password"
                            placeholder="Password" name="password1">
                        <?= form_error("password1", '<small class="text-danger">', "</small>"); ?>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label ">Confirm Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Confirm Password"
                            name="password2">
                    </div>
                    <button type="submit" class="btn btn-success btn-login mt-1 mb-2">Sign up</button>
                </form>
                <p class="">already have an account?<a href="<?= base_url("auth"); ?>"
                        class="text-danger text-decoration-none">
                        Sign in</a></p>
            </div>
        </div>
    </div>
</div>
<!-- end main  -->