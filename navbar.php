<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="asset/template/css/bootstrap.min.css">


</head>

<body>
    <div class="container-fluid">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img class="rounded-circle" style="max-width: 50px;" src="asset/gambar/aa.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="data_customer.php">Data Customer</a>
                            <a class="dropdown-item" href="data_kasir.php">Data Kasir</a>
                            <a class="dropdown-item" href="data_kategori.php">Data kategori</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="transaksi.php">Transaksi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            List
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">List Petugas</a>
                            <a class="dropdown-item" href="#">List Pelanggan</a>
                            <div class="dropdown-divider">List Data Transaksi</div>
                            <a class="dropdown-item" href="#">Laporan</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <a class="btn btn-outline-danger my-2 my-sm-0" type="submit" href="logout.php">Logout</a>
                </form>
            </div>
        </nav>