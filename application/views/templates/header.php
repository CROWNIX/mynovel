<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.css"); ?>">

    <!-- My Css -->
    <link rel="stylesheet" href="<?= base_url("assets/css/mynovel.css"); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("assets/fontawesome/css/all.min.css"); ?>">
    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url("assets/img/logo.jpeg"); ?>" alt="" width="30" height="29"
                    class="d-inline-block align-text-top me-2">
                <strong>MyNovel</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu category" aria-labelledby="navbarDropdownMenuLink">
                            <li class="ms-3 fw-bold">Category</li>
                            <li class="float-start"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Adventure</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Chicklit</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Classics</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Fanfiction</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Fantasy</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">General Fiction</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Horror</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Humor</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Mystery</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Non Fiction</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Paranormal</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Poetry</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Science Fiction</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Romance</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Spiritual</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Worewolf</a></li>
                            <li class="float-start"><a class="dropdown-item" href="#">Vampire</a></li>
                            <div class="clear"></div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Browse
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <a class="navbar-brand" href="#">
                        <i class="fas fa-home"></i>
                        <span class="text-uppercase">home</span>
                    </a>
                </ul>
                <ul class="navbar-nav">
                    <form class="d-flex">
                        <div class="input-group search mt-1">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Write
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $user["username"]; ?>
                            <img src="<?= base_url("assets/img/") . $user["image"]; ?>" alt="" width="30" height="29"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu profile" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user"></i>
                                    <span>My profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-bell"></i>
                                    <span>Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-bookmark"></i>
                                    <span>Bookmark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cog"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url("auth/logout"); ?>">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>