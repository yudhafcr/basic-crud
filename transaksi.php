<?php include("navbar.php"); ?>
<main role="main">

    <?php
    // Create database connection using config file
    include_once("config.php");


    ?>
    <div class="container-fluid">
        <div class="col">
            <h1> Transaksi </h1>
            <a class="btn btn-success float-right" href="input_transaksi.php"> tambah data</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope=" col">Id Transaksi</th>
                        <th scope="col">Tanggal transaksi</th>
                        <th scope="col">nama customer</th>
                        <th scope="col">nama kasir</th>
                        <th scope="col">kategori</th>
                        <th scope="col">berat</th>
                        <th scope="col">biaya jasa</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $qr_service = mysqli_query($conn, "SELECT * FROM transaksi
                    inner join customer on transaksi.id_customer = customer.id_customer
                    inner join kasir on transaksi.id_kasir = kasir.id_kasir
                    inner join kategori on transaksi.id_kategori = kategori.id_kategori
                        order by id_transaksi asc");

                    while ($data = mysqli_fetch_array($qr_service)) {
                    ?>

                        <tr>
                            <td><?= $data['id_transaksi']; ?></td>
                            <td><?= $data['tanggal_transaksi']; ?></td>
                            <td><?= $data['nama_customer']; ?></td>
                            <td><?= $data['nama_kasir']; ?></td>
                            <td><?= $data['kategori']; ?></td>
                            <td><?= $data['berat']; ?></td>
                            <td>Rp. <?= $data['biaya_jasa']; ?></td>
                            <td><a type="button" class="btn btn-warning" href="edit_transaksi.php?id=<?= $data['id_transaksi'] ?>">Edit</a>
                                <a type="button" class="btn btn-danger" href="proses_hapus.php?id=<?= $data['id_transaksi'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
        </div>
    </div>



</main>
<?php include("footer.php"); ?>