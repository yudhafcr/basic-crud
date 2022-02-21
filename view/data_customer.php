<?php include("navbar.php"); ?>
<main role="main">

    <?php
    // Create database connection using config file
    include_once("config.php");


    ?>
    <div class="container-fluid">
        <div class="col">
            <h1> Customer </h1>
            <a class="btn btn-success float-right " href="input_customer.php"> tambah data</a>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope=" col">Id customer</th>
                        <th scope="col">Nama customer</th>
                        <th scope="col">alamat </th>
                        <th scope="col">no hp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $qr_service = mysqli_query($conn, "SELECT * FROM customer
                        order by id_customer asc");

                    while ($data = mysqli_fetch_array($qr_service)) {
                    ?>

                        <tr>
                            <td><?= $data['id_customer']; ?></td>
                            <td><?= $data['nama_customer']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['no_hp']; ?></td>
                            <td><a type="button" class="btn btn-warning" href="edit_pelanggan.php?id=<?= $data['id_pelanggan'] ?>">Edit</a>
                                <a type="button" class="btn btn-danger" href="proses_hapus.php?id=<?= $data['id_pelanggan'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
        </div>
    </div>



</main>
<?php include("footer.php"); ?>