<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }


        .DaftarLL {
            position: relative;
            text-align: center;
            top: 0;
            left: 5%;
            height: 100px;
            width: 90%;
            margin-bottom: 450px;
        }

        .HeaderLL {
            position: center;
            top: 0;
            right: 0;
            left: 0;
            height: 300px;
            width: 100%;
            background-image: url('<?= base_url('/assets/img/header.png'); ?>');
            background-size: 70%;
            background-repeat: no-repeat;
            background-position: center;
        }

        h1 {
            font-family: Open Sans;
            font-style: normal;
            font-weight: bold;
            font-size: 54px;
            color: white;
            text-align: center;

        }

        .card-img-top {
            width: 100%;
            height: 570px;
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <!-- <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow"> -->

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('/assets/img/logo.png') ?>" width="30" height="30" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('main'); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('main/theater'); ?>">Theater</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Movies</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Category
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Romance</a>
                                <a class="dropdown-item" href="#">Comedy</a>
                                <a class="dropdown-item" href="#">Thriller</a>
                                <a class="dropdown-item" href="#">Horror</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-outline-primary" href="<?= base_url('auth'); ?>" role="button">Login</a>
                    </form>
                </div>
            </nav>


            <!-- End of Topbar -->