<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'];  ?></title>
    <link type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/newstyle.css">
</head>

<body>
    <div class="row">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: white;">
            <div class="container">
                <div class="col col-lg-2">
                    <img src="<?= BASEURL; ?>/img/icon.png" alt="" width="30" height="30">
                    <a class="navbar-brand fw-bold text-start" href="#">housing</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon float-end"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="true" href="<?= BASEURL; ?>/">Home</a>
                        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                        <a class="nav-link" href="<?= BASEURL; ?>/contact">Contact Us</a>
                    </div>
                </div>

            </div>
        </nav>
    </div>


    <div class="container mt-4">